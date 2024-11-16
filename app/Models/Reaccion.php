<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reaccion extends BaseModel
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'reacciones';
    protected $fillable = [
        'IdUsuario',
        'IdPublicacion',
        'Reaccion',
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'IdUsuario');
    }

    public function publicacion()
    {
        return $this->belongsTo(Publicacion::class, 'IdPublicacion');
    }
}
