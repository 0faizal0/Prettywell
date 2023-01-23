<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->date('tanggal');
            $table->date('tanggalEx');
            $table->time('time');
            $table->string('status');
            $table->integer('kode');
            $table->integer('ongkir');
            $table->integer('jumlah_harga');
            $table->text('alamatku');
            $table->string('nama');
            $table->string('notelp')->nullable();

            $table->string('status_payment');
            $table->string('status_code');
            $table->string('transaction_id');
            $table->string('order_id');
            $table->string('gross_amount');
            $table->string('payment_type');
            $table->string('bank')->nullable();
            $table->string('payment_code')->nullable();
            $table->string('va_number')->nullable();
            $table->string('permata_va_number')->nullable();
            $table->string('bill_key')->nullable();
            $table->string('biller_code')->nullable();
            $table->string('pdf_url')->nullable();
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
        Schema::dropIfExists('pesanans');
    }
}
