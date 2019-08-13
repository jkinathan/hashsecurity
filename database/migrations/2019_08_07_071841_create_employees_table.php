<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ename');
            $table->string('photo');
            $table->string('sex');
            $table->string('age');
            $table->string('nssf');
            $table->string('race');
            $table->string('nationality');
            $table->string('tribe');
            $table->dateTime('dateofbirth');
            $table->string('village');
            $table->string('parish');
            $table->string('subcounty');
            $table->string('county');
            $table->string('district');
            $table->string('nearesttown');
            $table->string('lc1');
            $table->string('physicaladdress');
            $table->string('maritalstatus');
            $table->string('spousename');
            $table->string('fathername');
            $table->string('mothername');
            $table->string('addressandphone');
            $table->string('nameofchildren');
            $table->string('nextofkin');
            $table->string('schoolple');
            $table->string('schooluce');
            $table->string('schooluace');
            $table->string('schooluni');
            $table->string('yearple');
            $table->string('yearuce');
            $table->string('yearuace');
            $table->string('yearuni');
            $table->string('namer1');
            $table->string('namer2');
            $table->string('namer3');
            $table->string('phoner1');
            $table->string('phoner2');
            $table->string('phoner3');
            $table->string('relationr1');
            $table->string('relationr2');
            $table->string('relationr3');
            $table->string('addressr1');
            $table->string('addressr2');
            $table->string('addressr3');
            $table->string('yearr1');
            $table->string('yearr2');
            $table->string('yearr3');
            $table->string('companyr1');
            $table->string('companyr2');
            $table->string('companyr3');
            $table->string('positionr1');
            $table->string('positionr2');
            $table->string('positionr3');
            $table->string('addskills');
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
        Schema::dropIfExists('employees');
    }
}
