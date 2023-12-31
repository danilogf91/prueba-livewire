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
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->string('area')->nullable();
            $table->unsignedBigInteger('project_id');
            $table->string('group_1')->nullable();
            $table->string('group_2')->nullable();
            $table->string('description')->nullable();
            $table->string('general_classification')->nullable();
            $table->string('item_type')->nullable();
            $table->string('unit')->nullable();
            $table->string('qty')->nullable();
            $table->string('unit_price')->nullable();
            $table->string('global_price')->nullable();
            $table->string('stage')->nullable();
            $table->string('real')->nullable();
            $table->string('committed')->nullable();
            $table->string('percentage')->nullable();
            $table->string('executed_dollars')->nullable();
            $table->string('executed_euros')->nullable();
            $table->string('supplier')->nullable();
            $table->string('code')->nullable();
            $table->string('order_no')->nullable();
            $table->string('input_num')->nullable();
            $table->string('observations')->nullable();
            $table->timestamps();

            $table->foreign('project_id') // Define la clave foránea
                ->references('id')
                ->on('projects')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data');
    }
};
