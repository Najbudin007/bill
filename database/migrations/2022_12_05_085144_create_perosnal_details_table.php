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
            $table->string('name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('Dob_bs');
            $table->string('Dob_ad');
            $table->string('name_eng');
            $table->string('middle_name_eng');
            $table->string('last_name_eng');
            $table->string('gender');
            $table->string('religion');
            $table->string('proffession');
            $table->string('native_language');
            $table->string('country');
            $table->string('nationality');
            $table->string('weight')->nullable();
            $table->string('file_no')->nullable();
            $table->string('disability');
            // Relatives Details
            $table->string('dad')->comment('relativeDetails');
            $table->string('mom')->comment('relativeDetails');
            $table->string('grand_father')->comment('relativeDetails');
            $table->string('spouse')->comment('relativeDetails');
            // permnanet Address
            $table->string('address')->comment('permanentAddress');
            $table->string('zone')->comment('permanentAddress');
            $table->string('district')->comment('permanentAddress');
            $table->string('vdc/municipality')->comment('permanentAddress');
            $table->string('p_ward_no')->comment('permanentAddress');
            $table->string('roadname')->comment('permanentAddress')->nullable();
            $table->string('tolename')->comment('permanentAddress')->nullable();
            $table->string('house_no')->comment('permanentAddress')->nullable();
            // temporary Address
            $table->string('temp_zone')->comment('TemporayAddress');
            $table->string('temp_district')->comment('TemporayAddress');
            $table->string('temp_vdc/municipality')->comment('TemporayAddress');
            $table->string('temp_ward_no')->comment('TemporayAddress');
            $table->string('temp_roadname')->comment('TemporayAddress')->nullable();
            $table->string('temp_tolename')->comment('TemporayAddress')->nullable();
            $table->string('temp_house_no')->comment('TemporayAddress')->nullable();
            // contact Details
            $table->string('phone')->nullable()->comment('contactDetails');
            $table->string('mobile')->nullable()->comment('contactDetails');
            $table->string('email')->nullable()->comment('contactDetails');
            $table->string('mailing_addredd')->nullable()->comment('contactDetails');
            // citizenShip Details
            $table->string('citizenship_number')->comment('CitizenShipDetails')->nullable();
            $table->string('c_issue_date')->comment('CitizenShipDetails')->nullable();
            $table->string('c_district')->comment('CitizenShipDetails')->nullable();
            // Passport Details
            $table->string('passport_number')->comment('PasspoetDetails')->nullable();
            $table->string('p_issue_date')->comment('PasspoetDetails')->nullable();
            $table->string('p_district')->comment('PasspoetDetails')->nullable();
            // voterId Details
            $table->string('voter_id_number')->comment('Voter_id_details')->nullable();
            $table->string('v_issue_date')->comment('Voter_id_details')->nullable();
            $table->string('v_district')->comment('Voter_id_details')->nullable();
            $table->string('sthai_lekha_number')->comment('Voter_id_details')->nullable();
            // other Details
            $table->string('other_detail')->comment('otherDetails')->nullable();
            $table->longText('description')->comment('Description')->nullable();
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
