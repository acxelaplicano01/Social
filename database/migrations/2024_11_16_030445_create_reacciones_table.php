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
        Schema::create('reacciones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('IdUsuario');
            $table->unsignedBigInteger('IdPublicacion');
            $table->enum('Reaccion', ['MeGusta', 'Default']);
            $table->unique(['IdUsuario', 'IdPublicacion']);
            $table->integer('created_by')->nullable(); 
            $table->integer('deleted_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->softDeletes();
            $table->timestamps();

            
            $table->foreign('IdUsuario')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('IdPublicacion')->references('id')->on('publicaciones')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reacciones');
    }
};
