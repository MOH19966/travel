<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShortagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shortages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('school_id')->constrained()->cascadeOnDelete();
            $table->string('school_name');
            $table->foreignId('grade_id')->constrained()->cascadeOnDelete();
            $table->string('grade_name');
            $table->string('grade_type');
            $table->foreignId('material_id')->constrained()->cascadeOnDelete();
            $table->string('material_name');
            $table->integer('houres');
            $table->boolean('closed')->default(false);
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
        Schema::dropIfExists('shortages');
    }
}
