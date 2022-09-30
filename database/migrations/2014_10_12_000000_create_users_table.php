<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name',225)->nullable();;
            $table->string('last_name',225)->nullable();
            $table->string('email',225)->unique();
            $table->date('date_of_birth')->nullable();
            $table->string('gender',255)->nullable();
            $table->string('annual_income',255)->nullable();
            $table->string('occupation',255)->nullable();
            $table->string('family_type',255)->nullable();
            $table->string('Manglik',255)->nullable();
            $table->tinyInteger('is_admin')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
