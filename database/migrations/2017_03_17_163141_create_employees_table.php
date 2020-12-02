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
            $table->bigInteger('user_id')->unsigned();
            $table->string('name', 60);
            $table->string('email');

            $table->integer('city_id')->unsigned()->nullable();
            $table->integer('state_id')->unsigned()->nullable();
            $table->integer('country_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('city_id')->references('id')->on('city')  ->onDelete('cascade');
            $table->foreign('state_id')->references('id')->on('state')  ->onDelete('cascade');
            $table->foreign('country_id')->references('id')->on('country')  ->onDelete('cascade');
            $table->string('zip', 10)->nullable();
            $table->integer('age')->unsigned()->nullable();
            $table->date('birthdate')->nullable()->nullable();
            $table->date('date_hired')->default(date(now()));
            $table->integer('department_id')->unsigned()->nullable();
            $table->integer('division_id')->unsigned()->nullable();
            // $table->integer('company_id')->unsigned();
            $table->foreign('department_id')->references('id')->on('department')  ->onDelete('cascade');
            $table->foreign('division_id')->references('id')->on('division')  ->onDelete('cascade');
            // $table->foreign('company_id')->references('id')->on('company');
            $table->string('picture', 60)->nullable();
            $table->timestamps();
            $table->softDeletes();
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
