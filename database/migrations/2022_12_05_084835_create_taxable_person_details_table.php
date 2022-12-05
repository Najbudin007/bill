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
        Schema::create('taxable_person_details', function (Blueprint $table) {
            $table->id();
            $table->string('sanket')->nullable();
            $table->string('antarik_sanket_no')->nullable();
            $table->string('old_code')->nullable();
            $table->string('taxpayer_type')->nullable();
            $table->string('ward_no')->nullable();
            $table->string('paybale_ward')->nullable();
            $table->string('status')->nullable();
            $table->string('fullname')->nullable();
            $table->string('name')->nullable();
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
        Schema::dropIfExists('taxable_person_details');
    }
};
