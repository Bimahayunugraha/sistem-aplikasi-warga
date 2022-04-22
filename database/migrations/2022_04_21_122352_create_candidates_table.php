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
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('vice_name')->nullable();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('image')->nullable();
            $table->datetime('start_date');
            $table->datetime('end_date');
            $table->text('excerpt');
            $table->text('description');
            $table->enum('status', ['Vote dibuka', 'Vote ditutup'])->default('Vote dibuka');
            $table->timestamp('published_at')->nullable();
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
        Schema::dropIfExists('candidates');
    }
};
