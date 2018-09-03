<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKycTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kyc', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('referee_bank_no');
            $table->string('gender');
            $table->string('marital_status');
            $table->string('bvn');
            $table->date('dob');
            $table->string('occupation');
            $table->string('religion');
            $table->string('country_of_residence');
            $table->string('state_of_residence');
            $table->string('city_of_residence');
            $table->string('nok_name');
            $table->string('nok_no');
            $table->string('nok_occupation')->nullable();
            $table->string('acc_name');
            $table->string('bank_name');
            $table->string('acc_no');
            $table->string('state_of_origin')->nullable();
            $table->string('lga_of_origin')->nullable();
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
        Schema::dropIfExists('kyc');
    }
}
