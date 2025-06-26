<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePivotTableLeavePerson extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leave_person', function (Blueprint $table) {
            $table->uuid('leave_id');
            $table->uuid('person_id');
            $table->timestamps();

            $table->foreign('leave_id')->references('id')->on('leaves')
                ->cascadeOnUpdate()->cascadeOnDelete();

            $table->foreign('person_id')->references('id')->on('persons')
                ->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leave_person');
    }
}
