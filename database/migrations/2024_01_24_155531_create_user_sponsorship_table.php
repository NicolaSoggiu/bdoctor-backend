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
        Schema::create('user_sponsorships', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('sponsorship_id');
            $table->timestamp('create_at');
            $table->timestamp('expire_date')->default(now());
            $table->timestamps();

            //foreign_key
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('sponsorship_id')->references('id')->on('sponsorships');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_sponsorship');
    }
};