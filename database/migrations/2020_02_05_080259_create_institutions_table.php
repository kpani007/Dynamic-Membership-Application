<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstitutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institutions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->string('application_id', 20)->unique();
            $table->string('phone')->unique();
            $table->string('position', 200);
            $table->string('name_english', 200);
            $table->string('name_other', 200);
            $table->enum('status', ['Not Submitted', 'Submitted', 'Declined', 'Full Member', 'Associate Member', 'Withdrawn', 'Admitted pending payment'])->default('Not Submitted');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('institutions');
    }
}
