<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('payments', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('uuid')->unique();
			$table->timestamp('payment_date')->nullable();
			$table->timestamp('expires_at')->nullable();
			$table->string('status');
			$table->unsignedBigInteger('user_id');
			$table->integer('amount');
			$table->integer('clp_usd')->nullable();
			$table->timestamps();
			
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('payments');
	}
}
