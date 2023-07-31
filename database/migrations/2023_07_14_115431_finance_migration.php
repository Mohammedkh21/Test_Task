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
        Schema::create('finances',function (Blueprint $table){
            $table->id();
            $table->foreignId('project_id')->constrained(table: 'projects',indexName: 'finance-project');
            $table->integer('income');
            $table->integer('employees');
            $table->integer('current_assets');
            $table->integer('current_claims');
            $table->string('website')->nullable();
            $table->boolean('mortgage_original');
            $table->boolean('other_guarantees');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('finances');
    }
};
