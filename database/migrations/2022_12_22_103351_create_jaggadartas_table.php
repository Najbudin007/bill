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
        Schema::create('jaggadartas', function (Blueprint $table) {
            $table->id();
            $table->string('gaupalika')->nullable();
            $table->string('ward_no')->nullable();
            $table->string('p_ward_no')->nullable();
            $table->string('kitta_no')->nullable();
            $table->string('moth_no')->nullable();
            $table->string('sit_no')->nullable();
            $table->string('naskha_no')->nullable();
            $table->string('place')->nullable();
            $table->string('quality')->nullable();
            $table->string('nature')->nullable();
            $table->string('road')->nullable();
            $table->string('road_quality')->nullable();
            $table->string('prapti_type')->nullable();
            $table->string('prapti_date')->nullable();
            $table->string('prapta_date')->nullable();
            $table->string('kharid_mulya')->nullable();
            $table->string('prati_ikai_mulya')->nullable();
            $table->string('under_mulyankan')->nullable();
            $table->string('natural_disaster')->nullable();
            $table->string('mulyankan_rate')->nullable();
            $table->string('malpot_rate')->nullable();
            $table->string('jagga_mapan_ikai')->nullable();
            // landDetails
            $table->string('bigha')->nullable()->comment('land Area');
            $table->string('kattha')->nullable()->comment('land Area');
            $table->string('dhur')->nullable()->comment('land Area');
            $table->string('kanwa')->nullable()->comment('land Area');
            $table->string('kanwain')->nullable()->comment('land Area');
            $table->string('hector')->nullable()->comment('land Area');
            $table->string('acer')->nullable()->comment('land Area');
            $table->string('meter')->nullable()->comment('land Area');

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
        Schema::dropIfExists('jaggadartas');
    }
};
