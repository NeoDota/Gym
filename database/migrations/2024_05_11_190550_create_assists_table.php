<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('assists', function (Blueprint $table) {
            $table->id();

            $table->time('hora');
            $table->date('fecha');

            $table->unsignedBigInteger('users_id')->nullable();/* unique hace que se ligue 1 a 1.no 2 a 1, ni 1 a 2 | ->nullable() si necesitas consevar el post[->set null] */
            $table->foreign('users_id')
                ->references('id')
                ->on('users')/* para que actualice el id */
                ->onUpdate('cascade')
                ->onDelete('set null');/* 'set null' |^ ->nullable() */

            
            $table->unsignedBigInteger('categories_id')->nullable();/* unique hace que se ligue 1 a 1.no 2 a 1, ni 1 a 2 | ->nullable() si necesitas consevar el post[->set null] */
            $table->foreign('categories_id')
                ->references('id')
                ->on('categories')/* para que actualice el id */
                ->onUpdate('cascade')
                ->onDelete('set null');/* 'set null' |^ ->nullable() */

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assists');
    }
};
