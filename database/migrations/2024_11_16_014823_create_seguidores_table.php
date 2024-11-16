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
        Schema::create('seguidores', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('IdUsuarioSeguidor');
            $table->unsignedBigInteger('IdUsuarioSeguido');
            $table->integer('created_by')->nullable(); 
            $table->integer('deleted_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('IdUsuarioSeguidor')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('IdUsuarioSeguido')->references('id')->on('users')->onDelete('cascade');

            // Agregar restricción de unicidad
            $table->unique(['IdUsuarioSeguidor', 'IdUsuarioSeguido']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seguidores');
    }
};