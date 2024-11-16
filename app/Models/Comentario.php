<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Comentario extends BaseModel
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'comentarios';
    protected $fillable = ['id', 'IdUsuario', 'IdPublicacion', 'Comentario'];
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    public $incrementing = true;

    public function usuario()
    {
        return $this->belongsTo(User::class, 'IdUsuario', 'id');
    }

    public function publicacion()
    {
        return $this->belongsTo(Publicacion::class, 'IdPublicacion', 'id');
    }
}
