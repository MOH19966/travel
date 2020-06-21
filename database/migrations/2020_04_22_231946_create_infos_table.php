<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('college');
            $table->string('university');
            $table->enum('year', ['1','2','3','4','5','6','7' ]); // 7 id graduate
            $table->string('state');
            $table->string('city');
            $table->string('village');// هون بدي اربطها بالنواحي والقرى بحيث انا حددلو شو يسجل
            $table->enum('gender',['male','female']);
            $table->string('user_image')->nullable();
            $table->string('college_card_image')->nullable();
            $table->string('fname');
            $table->string('lname');


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
        Schema::dropIfExists('infos');
    }
}

