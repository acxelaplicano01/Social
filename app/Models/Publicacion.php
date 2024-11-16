<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Publicacion extends BaseModel
{
    use HasFactory;
    use SoftDeletes;
    
    protected $table = 'publicaciones';
    protected $fillable = [
        'IdUsuario',
        'Contenido',
        'Imagen',
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'IdUsuario');
    }

    public function reacciones()
    {
        return $this->hasMany(Reaccion::class, 'IdPublicacion');
    }
}
