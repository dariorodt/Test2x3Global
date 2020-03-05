<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    /**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [ 'uuid', 'payment_date', 'expires_at', 'status', 'user_id', 'amount', 'clp_usd', ];
	
	/**
	 * Get the User to whom this payment belongs.
	 * 
	 * @return App\User
	 */
	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
