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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            // $table->integer('report_id')->unsigned();
            $table->string('number', 100)->nullable();
            $table->text('description')->nullable();
            $table->timestamps('');
            // $table->integer('user_id');
            // $table->foreign('user_id')->references('id')->on('users');
            // $table->integer('status_id');
            // $table->foreign('status_id')->references('id')->on('statuses');
            $table->softDeletes();

            $table->foreignId('user_id')
            ->nullable()
            ->constrained()
            ->cascadeOnUpdate()
            ->nullOnDelete();
            $table->foreignId('status_id')
            ->nullable()
            ->constrained()
            ->cascadeOnUpdate()
            ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
