<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')                              ->comment('save name of users.');
            $table->string('email')         ->unique()          ->comment('save email of users.');
            $table->string('password')                          ->comment('save password of users.');
            $table->string('phone_number')                      ->comment('save phone number of users.');
            $table->tinyInteger('premium')  ->default(0)        ->comment('save types of users. (premium or normal)');
            $table->integer('state')        ->nullable()        ->comment('save state that user living.');
            $table->string('township')      ->nullable()        ->comment('save township that user living.');
            $table->rememberToken()                             ->comment('password remember token of user.');
            $table->timestamps();
            $table->tinyInteger('deleted')  ->default(0)        ->comment('save types of users. (deleted or not)');
            $table->charset     = 'utf8mb4';
            $table->collation   = 'utf8mb4_unicode_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
