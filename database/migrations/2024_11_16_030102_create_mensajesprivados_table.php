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
        Schema::create('mensajesprivados', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('IdUsuario');
            $table->unsignedBigInteger('IdUsuarioDestino');
            $table->string('Mensaje');
            $table->boolean('Leido')->default(false);
            $table->integer('created_by')->nullable(); 
            $table->integer('deleted_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->softDeletes();
            $table->timestamps();
            
            $table->foreign('IdUsuario')->references('id')->on('users');
            $table->foreign('IdUsuarioDestino')->references('id')->on('users');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mensajesprivados');
    }
};
