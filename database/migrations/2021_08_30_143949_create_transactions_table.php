<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('users_id');

            $table->string('name')->nullable();
            $table->string('name_acara')->nullable();
            $table->string('request_tambahan')->nullable();
            $table->string('request_sambal')->nullable();
            $table->string('request_sambal2')->nullable();
            $table->string('request_saung')->nullable();


            $table->string('email')->nullable();
            $table->date('tglacara')->nullable();

            $table->bigInteger('porsi')->default();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();

            $table->string('service')->default('PRASMANAN');

            $table->string('payment')->default('MIDTRANS');
            $table->string('payment_url')->nullable();

            $table->bigInteger('deposit')->default();
            $table->bigInteger('total_price')->default(0);
            $table->string('status')->default('PENDING');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
