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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->string('portada_photo_path', 2048)->nullable();
            $table->date('FechaNacimiento')->nullable();
            $table->string('Telefono')->nullable();
            $table->string('Direccion')->nullable();
            $table->string('DNI')->nullable();
            $table->string('Estado')->nullable();
            $table->string('Sexo')->nullable();
            $table->string('Nombres')->nullable();
            $table->string('Apellidos')->nullable();
            $table->string('TipoUsuario')->nullable();
            $table->string('Pais')->nullable();
            $table->string('Ciudad')->nullable();
            $table->string('EstadoCivil')->nullable();
            $table->string('Intereses')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
