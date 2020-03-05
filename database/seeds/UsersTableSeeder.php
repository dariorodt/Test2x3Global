<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('users')->insert([
			[
				'email' => 'josemartinez@example.com', 
				'email_verified_at' => Carbon::now(), 
				'password' => Hash::make('josemartinez')
			],
			[
				'email' => 'victorcontreras@example.com', 
				'email_verified_at' => Carbon::now(), 
				'password' => Hash::make('victorcontreras')
			],
			[
				'email' => 'teresamedina@example.com', 
				'email_verified_at' => Carbon::now(), 
				'password' => Hash::make('teresamedina')
			],
			[
				'email' => 'miguelcastanos@example.com', 
				'email_verified_at' => Carbon::now(), 
				'password' => Hash::make('miguelcastaños')
			],
			[
				'email' => 'gabrielalara@example.com', 
				'email_verified_at' => Carbon::now(), 
				'password' => Hash::make('gabrielalara')
			],
			[
				'email' => 'danielarodriguez@example.com', 
				'email_verified_at' => Carbon::now(), 
				'password' => Hash::make('danielarodriguez')
			],
			[
				'email' => 'gerardovelez@example.com', 
				'email_verified_at' => Carbon::now(), 
				'password' => Hash::make('gerardovelez')
			]
		]);
	}
}