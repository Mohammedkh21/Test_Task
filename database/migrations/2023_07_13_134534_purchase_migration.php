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
        Schema::create('purchases',function (Blueprint $table){
            $table->id();
            $table->foreignId('project_id')->constrained(table: 'projects',indexName: 'project-purchase')->unique();
            $table->foreignId('supplier_id')->constrained(table: 'suppliers',indexName: 'supplier-purchase');
            $table->string('type');
            $table->integer('amount');
            $table->integer('payment_period');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
