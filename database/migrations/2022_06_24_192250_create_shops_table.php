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
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('logo')->nullable();
            $table->string('name');
            $table->text('description')->nullable();

            $table->string('phone')->nullable();
            $table->string('email')->nullable();

            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('street_address')->nullable();


            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->nullOnDelete();;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shops', function (Blueprint $table) {
            $table->dropForeign('shops_user_id_foreign');
        });

        Schema::dropIfExists('shops');
    }
};
