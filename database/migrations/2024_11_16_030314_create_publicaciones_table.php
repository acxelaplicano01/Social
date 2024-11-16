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
        if (!Schema::hasTable('publicaciones')) {
            Schema::create('publicaciones', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('IdUsuario');
                $table->text('Contenido');
                $table->string('Imagen')->nullable();
                $table->integer('created_by')->nullable(); 
                $table->integer('deleted_by')->nullable();
                $table->integer('updated_by')->nullable();
                $table->timestamps();
                $table->softDeletes();
                $table->foreign('IdUsuario')->references('id')->on('users')->onDelete('cascade');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publicaciones');
    }
};