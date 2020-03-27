<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fields', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('section_id')->unsigned()->index();
            $table->integer('input_type_id')->unsigned()->index();
            $table->string('question', 500);
            $table->string('slug', 500);
            $table->json('other_info');
            $table->enum('status', ['Active', 'Inactive'])->default('Inactive');
             $table->enum('required', ['Yes', 'No'])->default("Yes");
            $table->enum('is_updatable', ['Yes', 'No'])->default("No");
            $table->integer('order');
            $table->timestamps();
            $table->foreign('section_id')->references('id')->on('sections')->onDelete('cascade');
            $table->foreign('input_type_id')->references('id')->on('input_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fields');
    }
}
