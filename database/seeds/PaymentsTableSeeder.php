<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use App\Payment;

class PaymentsTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Payment::create([
			'uuid' => (string) Str::uuid(), 
			'payment_date' => Carbon::now(), //->toDateTimeString()
			'expires_at' => Carbon::now()->addDays(7), 
			'status' => 'paid', 
			'user_id' => rand(1, 7), 
			'amount' => rand(100000, 999999), 
			'clp_usd' => rand(800, 899), 
		]);
		Payment::create([
			'uuid' => (string) Str::uuid(), 
			'payment_date' => Carbon::now(), //->toDateTimeString()
			'expires_at' => Carbon::now()->addDays(7), 
			'status' => 'paid', 
			'user_id' => rand(1, 7), 
			'amount' => rand(100000, 999999), 
			'clp_usd' => rand(800, 899), 
		]);
		Payment::create([
			'uuid' => (string) Str::uuid(), 
			'payment_date' => Carbon::now(), //->toDateTimeString()
			'expires_at' => Carbon::now()->addDays(7), 
			'status' => 'paid', 
			'user_id' => rand(1, 7), 
			'amount' => rand(100000, 999999), 
			'clp_usd' => rand(800, 899), 
		]);
		Payment::create([
			'uuid' => (string) Str::uuid(), 
			'payment_date' => Carbon::now(), //->toDateTimeString()
			'expires_at' => Carbon::now()->addDays(7), 
			'status' => 'paid', 
			'user_id' => rand(1, 7), 
			'amount' => rand(100000, 999999), 
			'clp_usd' => rand(800, 899), 
		]);
		Payment::create([
			'uuid' => (string) Str::uuid(), 
			'payment_date' => Carbon::now(), //->toDateTimeString()
			'expires_at' => Carbon::now()->addDays(7), 
			'status' => 'paid', 
			'user_id' => rand(1, 7), 
			'amount' => rand(100000, 999999), 
			'clp_usd' => rand(800, 899), 
		]);
		Payment::create([
			'uuid' => (string) Str::uuid(), 
			'payment_date' => Carbon::now(), //->toDateTimeString()
			'expires_at' => Carbon::now()->addDays(7), 
			'status' => 'paid', 
			'user_id' => rand(1, 7), 
			'amount' => rand(100000, 999999), 
			'clp_usd' => rand(800, 899), 
		]);
		Payment::create([
			'uuid' => (string) Str::uuid(), 
			'payment_date' => Carbon::now(), //->toDateTimeString()
			'expires_at' => Carbon::now()->addDays(7), 
			'status' => 'paid', 
			'user_id' => rand(1, 7), 
			'amount' => rand(100000, 999999), 
			'clp_usd' => rand(800, 899), 
		]);
		Payment::create([
			'uuid' => (string) Str::uuid(), 
			'payment_date' => Carbon::now(), //->toDateTimeString()
			'expires_at' => Carbon::now()->addDays(7), 
			'status' => 'paid', 
			'user_id' => rand(1, 7), 
			'amount' => rand(100000, 999999), 
			'clp_usd' => rand(800, 899), 
		]);
		Payment::create([
			'uuid' => (string) Str::uuid(), 
			'payment_date' => Carbon::now(), //->toDateTimeString()
			'expires_at' => Carbon::now()->addDays(7), 
			'status' => 'paid', 
			'user_id' => rand(1, 7), 
			'amount' => rand(100000, 999999), 
			'clp_usd' => rand(800, 899), 
		]);
		Payment::create([
			'uuid' => (string) Str::uuid(), 
			'payment_date' => Carbon::now(), //->toDateTimeString()
			'expires_at' => Carbon::now()->addDays(7), 
			'status' => 'paid', 
			'user_id' => rand(1, 7), 
			'amount' => rand(100000, 999999), 
			'clp_usd' => rand(800, 899), 
		]);
		Payment::create([
			'uuid' => (string) Str::uuid(), 
			'payment_date' => Carbon::now(), //->toDateTimeString()
			'expires_at' => Carbon::now()->addDays(7), 
			'status' => 'paid', 
			'user_id' => rand(1, 7), 
			'amount' => rand(100000, 999999), 
			'clp_usd' => rand(800, 899), 
		]);
		Payment::create([
			'uuid' => (string) Str::uuid(), 
			'payment_date' => Carbon::now(), //->toDateTimeString()
			'expires_at' => Carbon::now()->addDays(7), 
			'status' => 'paid', 
			'user_id' => rand(1, 7), 
			'amount' => rand(100000, 999999), 
			'clp_usd' => rand(800, 899), 
		]);
		Payment::create([
			'uuid' => (string) Str::uuid(), 
			'payment_date' => Carbon::now(), //->toDateTimeString()
			'expires_at' => Carbon::now()->addDays(7), 
			'status' => 'paid', 
			'user_id' => rand(1, 7), 
			'amount' => rand(100000, 999999), 
			'clp_usd' => rand(800, 899), 
		]);
		Payment::create([
			'uuid' => (string) Str::uuid(), 
			'payment_date' => Carbon::now(), //->toDateTimeString()
			'expires_at' => Carbon::now()->addDays(7), 
			'status' => 'paid', 
			'user_id' => rand(1, 7), 
			'amount' => rand(100000, 999999), 
			'clp_usd' => rand(800, 899), 
		]);
		Payment::create([
			'uuid' => (string) Str::uuid(), 
			'payment_date' => Carbon::now(), //->toDateTimeString()
			'expires_at' => Carbon::now()->addDays(7), 
			'status' => 'paid', 
			'user_id' => rand(1, 7), 
			'amount' => rand(100000, 999999), 
			'clp_usd' => rand(800, 899), 
		]);
		Payment::create([
			'uuid' => (string) Str::uuid(), 
			'payment_date' => Carbon::now(), //->toDateTimeString()
			'expires_at' => Carbon::now()->addDays(7), 
			'status' => 'paid', 
			'user_id' => rand(1, 7), 
			'amount' => rand(100000, 999999), 
			'clp_usd' => rand(800, 899), 
		]);
		Payment::create([
			'uuid' => (string) Str::uuid(), 
			'payment_date' => Carbon::now(), //->toDateTimeString()
			'expires_at' => Carbon::now()->addDays(7), 
			'status' => 'paid', 
			'user_id' => rand(1, 7), 
			'amount' => rand(100000, 999999), 
			'clp_usd' => rand(800, 899), 
		]);
		Payment::create([
			'uuid' => (string) Str::uuid(), 
			'payment_date' => Carbon::now(), //->toDateTimeString()
			'expires_at' => Carbon::now()->addDays(7), 
			'status' => 'paid', 
			'user_id' => rand(1, 7), 
			'amount' => rand(100000, 999999), 
			'clp_usd' => rand(800, 899), 
		]);
		Payment::create([
			'uuid' => (string) Str::uuid(), 
			'payment_date' => Carbon::now(), //->toDateTimeString()
			'expires_at' => Carbon::now()->addDays(7), 
			'status' => 'paid', 
			'user_id' => rand(1, 7), 
			'amount' => rand(100000, 999999), 
			'clp_usd' => rand(800, 899), 
		]);
		Payment::create([
			'uuid' => (string) Str::uuid(), 
			'payment_date' => Carbon::now(), //->toDateTimeString()
			'expires_at' => Carbon::now()->addDays(7), 
			'status' => 'paid', 
			'user_id' => rand(1, 7), 
			'amount' => rand(100000, 999999), 
			'clp_usd' => rand(800, 899), 
		]);
		Payment::create([
			'uuid' => (string) Str::uuid(), 
			'payment_date' => Carbon::now(), //->toDateTimeString()
			'expires_at' => Carbon::now()->addDays(7), 
			'status' => 'paid', 
			'user_id' => rand(1, 7), 
			'amount' => rand(100000, 999999), 
			'clp_usd' => rand(800, 899), 
		]);
		Payment::create([
			'uuid' => (string) Str::uuid(), 
			'payment_date' => Carbon::now(), //->toDateTimeString()
			'expires_at' => Carbon::now()->addDays(7), 
			'status' => 'paid', 
			'user_id' => rand(1, 7), 
			'amount' => rand(100000, 999999), 
			'clp_usd' => rand(800, 899), 
		]);
		Payment::create([
			'uuid' => (string) Str::uuid(), 
			'payment_date' => Carbon::now(), //->toDateTimeString()
			'expires_at' => Carbon::now()->addDays(7), 
			'status' => 'paid', 
			'user_id' => rand(1, 7), 
			'amount' => rand(100000, 999999), 
			'clp_usd' => rand(800, 899), 
		]);
		Payment::create([
			'uuid' => (string) Str::uuid(), 
			'payment_date' => Carbon::now(), //->toDateTimeString()
			'expires_at' => Carbon::now()->addDays(7), 
			'status' => 'paid', 
			'user_id' => rand(1, 7), 
			'amount' => rand(100000, 999999), 
			'clp_usd' => rand(800, 899), 
		]);
		Payment::create([
			'uuid' => (string) Str::uuid(), 
			'payment_date' => Carbon::now(), //->toDateTimeString()
			'expires_at' => Carbon::now()->addDays(7), 
			'status' => 'paid', 
			'user_id' => rand(1, 7), 
			'amount' => rand(100000, 999999), 
			'clp_usd' => rand(800, 899), 
		]);
		Payment::create([
			'uuid' => (string) Str::uuid(), 
			'payment_date' => Carbon::now(), //->toDateTimeString()
			'expires_at' => Carbon::now()->addDays(7), 
			'status' => 'paid', 
			'user_id' => rand(1, 7), 
			'amount' => rand(100000, 999999), 
			'clp_usd' => rand(800, 899), 
		]);
		Payment::create([
			'uuid' => (string) Str::uuid(), 
			'payment_date' => Carbon::now(), //->toDateTimeString()
			'expires_at' => Carbon::now()->addDays(7), 
			'status' => 'paid', 
			'user_id' => rand(1, 7), 
			'amount' => rand(100000, 999999), 
			'clp_usd' => rand(800, 899), 
		]);
		Payment::create([
			'uuid' => (string) Str::uuid(), 
			'payment_date' => Carbon::now(), //->toDateTimeString()
			'expires_at' => Carbon::now()->addDays(7), 
			'status' => 'paid', 
			'user_id' => rand(1, 7), 
			'amount' => rand(100000, 999999), 
			'clp_usd' => rand(800, 899), 
		]);
		Payment::create([
			'uuid' => (string) Str::uuid(), 
			'payment_date' => Carbon::now(), //->toDateTimeString()
			'expires_at' => Carbon::now()->addDays(7), 
			'status' => 'paid', 
			'user_id' => rand(1, 7), 
			'amount' => rand(100000, 999999), 
			'clp_usd' => rand(800, 899), 
		]);
		Payment::create([
			'uuid' => (string) Str::uuid(), 
			'payment_date' => Carbon::now(), //->toDateTimeString()
			'expires_at' => Carbon::now()->addDays(7), 
			'status' => 'paid', 
			'user_id' => rand(1, 7), 
			'amount' => rand(100000, 999999), 
			'clp_usd' => rand(800, 899), 
		]);
	}
}
