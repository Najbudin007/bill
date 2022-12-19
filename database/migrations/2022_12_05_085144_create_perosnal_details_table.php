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
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('Dob_bs');
            $table->string('Dob_ad')->nullable();
            $table->string('name_eng');
            $table->string('middle_name_eng')->nullable();
            $table->string('last_name_eng');
            $table->string('gender');
            $table->string('religion');
            $table->string('proffession');
            $table->string('native_language');
            $table->string('country');
            $table->string('nationality');
            $table->string('weight')->nullable();
            $table->string('file_no')->nullable();
            $table->string('disability')->nullable();
            $table->string('image')->nullable();
            // Relatives Details
            $table->string('relativeDetails')->comment('relativeDetails');
            $table->string('father_name')->comment('father_name');
            $table->string('father_middle_name')->comment('father_middle_name')->nullable();
            $table->string('father_last_name')->comment('father_last_name');
            // permnanet Address
            $table->string('zone')->comment('permanentAddress');
            $table->string('district')->comment('permanentAddress');
            $table->string('vdc_municipality')->comment('permanentAddress');
            $table->string('p_ward_no')->comment('permanentAddress');
            $table->string('roadname')->comment('permanentAddress')->nullable();
            $table->string('tolename')->comment('permanentAddress')->nullable();
            $table->string('house_no')->comment('permanentAddress')->nullable();
            // temporary Address
            $table->string('temp_zone')->comment('TemporayAddress')->nullable();
            $table->string('temp_district')->comment('TemporayAddress')->nullable();
            $table->string('temp_vdc_municipality')->comment('TemporayAddress')->nullable();
            $table->string('temp_ward_no')->comment('TemporayAddress')->nullable();
            $table->string('temp_roadname')->comment('TemporayAddress')->nullable();
            $table->string('temp_tolename')->comment('TemporayAddress')->nullable();
            $table->string('temp_house_no')->comment('TemporayAddress')->nullable();
            // contact Details
            $table->string('phone')->nullable()->comment('contactDetails')->nullable();
            $table->string('mobile')->nullable()->comment('contactDetails')->nullable();
            $table->string('email')->nullable()->comment('contactDetails')->nullable();
            $table->string('mailing_address')->nullable()->comment('contactDetails')->nullable();
            // citizenShip Details
            $table->string('citizenship_number')->comment('CitizenShipDetails')->nullable();
            $table->string('c_issue_date_eng')->comment('CitizenShipDetails')->nullable();
            $table->string('c_issue_date_nep')->comment('CitizenShipDetails')->nullable();
            $table->string('c_district')->comment('CitizenShipDetails')->nullable();
            // Passport Details
            $table->string('passport_number')->comment('PasspoetDetails')->nullable();
            $table->string('p_issue_date_nep')->comment('PasspoetDetails')->nullable();
            $table->string('p_issue_date_eng')->comment('PasspoetDetails')->nullable();
            $table->string('p_district')->comment('PasspoetDetails')->nullable();
            // voterId Details
            $table->string('voter_id_number')->comment('Voter_id_details')->nullable();
            $table->string('v_issue_date_eng')->comment('Voter_id_details')->nullable();
            $table->string('v_issue_date_nep')->comment('Voter_id_details')->nullable();
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
