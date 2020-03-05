<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Payment;
use App\Jobs\GetCurrentUSD;
use App\Events\PaymentCreated;

class PaymentController extends Controller
{
    public function index(User $user = null)
    {
    	if ($user === null) return array();
    	return $user->payments;
    }
    
    /**
     * Creates a new payment and notyfie the client.
     * 
     * @param  Request $request
     * @return App\Payment
     */
    public function store(Request $request)
    {
    	$last_payment = Payment::all()->last();
		
		$payment = Payment::create($request->input());
		
		// Check if the last payment was today and take the clp_usd value.
		// Otherwise, dispatch GetCurrentUSD job.
		if ($last_payment->created_at->toDateString() == \Carbon\Carbon::now()->toDateString()) {
			$payment->clp_usd = $last_payment->clp_usd;
			$payment->save();
		} else {
			// The job gets the USD value from «mindicador.cl» and updates 
			// the payment, so we have to pass it as an argument.
    		GetCurrentUSD::dispatchNow($payment);
		}
		
		// Launch PaymentCreated event the notyfies the client about 
		// the new payment.
		event(new PaymentCreated($payment));
    	
    	// Return the just created payment to the app.
    	// Note that if the dollar value is not updated, the payment 
    	// object is sent with the clp_usd field in null, because 
    	// the dollar value update is done in the background.
		return $payment;
    }
}
