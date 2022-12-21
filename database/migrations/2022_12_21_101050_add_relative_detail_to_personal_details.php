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
        Schema::table('perosnal_details', function (Blueprint $table) {
            $table->string('father_name_nep')->nullable();
            $table->string('father_middlename_nep')->nullable();
            $table->string('father_lastname_nep')->nullable();
            // English
            $table->string('father_name_eng')->nullable();
            $table->string('father_middlename_eng')->nullable();
            $table->string('father_lastname_eng')->nullable();
            // mother
            $table->string('mother_name_nep')->nullable();
            $table->string('mother_middlename_nep')->nullable();
            $table->string('mother_lastname_nep')->nullable();
            // English
            $table->string('mother_name_eng')->nullable();
            $table->string('mother_middlename_eng')->nullable();
            $table->string('mother_lastname_eng')->nullable();
            // grandFather
            $table->string('grandfather_name_nep')->nullable();
            $table->string('grandfather_middlename_nep')->nullable();
            $table->string('grandfather_lastname_nep')->nullable();
            // English
            $table->string('grandfather_name_eng')->nullable();
            $table->string('grandfather_middlename_eng')->nullable();
            $table->string('grandfather_lastname_eng')->nullable();
            // Spouse
            $table->string('spouse_name_nep')->nullable();
            $table->string('spouse_middlename_nep')->nullable();
            $table->string('spouse_lastname_nep')->nullable();
            // English
            $table->string('spouse_name_eng')->nullable();
            $table->string('spouse_middlename_eng')->nullable();
            $table->string('spouse_lastname_eng')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('perosnal_details', function (Blueprint $table) {
            //
        });
    }
};
