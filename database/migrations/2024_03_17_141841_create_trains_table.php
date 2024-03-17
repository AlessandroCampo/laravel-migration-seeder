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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->tinyText('provider')->nullable(false);
            $table->tinyText('dep_station')->nullable(false);
            $table->tinyText('arr_station')->nullable(false);
            $table->time('dep_time');
            $table->time('arr_time');
            $table->date('dep_date');
            $table->integer('train_code')->unique();
            $table->smallInteger('carriage_num');
            $table->boolean('on_time');
            $table->boolean('cancelled');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
