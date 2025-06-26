<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePivotTablePersonRole extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('person_role', function (Blueprint $table) {
            $table->uuid('person_id');
            $table->unsignedBigInteger('role_id');
            $table->timestamps();

            $table->foreign('person_id')->references('id')->on('persons')
                ->cascadeOnUpdate()->cascadeOnDelete();

            $table->foreign('role_id')->references('id')->on('roles')
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
        Schema::dropIfExists('person_role');
    }
}
