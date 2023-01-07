<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perosnal_details', function (Blueprint $table) {
            $table->id();
            $table->string('kar_ko_prakar')->nullable();
            $table->string('kar_data_sanket')->nullable();
            $table->string('fullname')->nullable();
            $table->string('kardata')->nullable();
            $table->string('pradesh')->nullable();
            $table->string('district')->nullable();
            $table->string('municipality')->nullable();
            $table->string('ward_no')->nullable();
            $table->string('mobile')->nullable();
            // Rasid
            $table->string('counter')->nullable();
            $table->string('bill_type')->nullable();
            $table->string('bill_number')->nullable();
            $table->string('sahayak_module')->nullable();
            $table->string('antarik_rashid_no')->nullable();
            $table->string('payment_mtehod')->nullable();
            $table->string('mudra')->nullable();
            $table->string('date')->nullable();
            $table->string('kaifiyat1')->nullable();
            $table->string('discription')->nullable();
            $table->longText('dar_rate_srishak')->nullable();
            $table->longText('prati_ekai_dar')->nullable();
            $table->longText('parimad')->nullable();
            $table->longText('kaifiyat')->nullable();
            $table->string('nagad')->nullable();
            $table->string('firta')->nullable();
            $table->string('total')->nullable();
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
        Schema::dropIfExists('perosnal_details');
    }
};
