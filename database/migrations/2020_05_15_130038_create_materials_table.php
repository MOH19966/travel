<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materials', function (Blueprint $table) {
            $table->id();
            $table->string('name', 30);
            $table->timestamps();
        });
        //pivot table
            Schema::create('grade_material', function (Blueprint $table) {
                $table->primary(['grade_id', 'material_id']);
                $table->foreignId('grade_id')->constrained()->onDelete('cascade');
                $table->foreignId('material_id')->constrained()->onDelete('cascade');
            });

                //selectes materials to teach
            Schema::create('material_user', function (Blueprint $table) {
                $table->primary(['material_id', 'user_id']);
                $table->foreignId('user_id')->constrained()->onDelete('cascade');
                $table->foreignId('material_id')->constrained()->onDelete('cascade');
            });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materials');


    }
}
