<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Payment;

class GetCurrentUSD implements ShouldQueue
{
	use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
	
	private $payment;

	/**
	 * Create a new job instance.
	 *
	 * @return void
	 */
	public function __construct(Payment $payment)
	{
		$this->payment = $payment;
	}

	/**
	 * Execute the job.
	 *
	 * @return void
	 */
	public function handle()
	{
		$handle = curl_init();
		$url = "https://mindicador.cl/api/dolar";
		curl_setopt($handle, CURLOPT_URL, $url);
		curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
		
		$output = json_decode(curl_exec($handle));
		 
		curl_close($handle);
		 
		$this->payment->clp_usd = $output->serie[0]->valor;
		$this->payment->save();
	}
}
