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
        Schema::create('admin_specialized_models', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->string('title');
            $table->unsignedBigInteger('specialized_category'); //foreign key of AdminSpecializedCategoryModel id
            $table->timestamps();


            // Define foreign key constraint
            $table->foreign('specialized_category')
                ->references('id')
                ->on('admin_specialized_category_models')
                ->onDelete('cascade'); // Cascade delete if the category is deleted
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('admin_specialized_models', function (Blueprint $table) {
            $table->dropForeign(['specialized_category']);
        });

        Schema::dropIfExists('admin_specialized_models');
    }
};
