<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Seguidor extends BaseModel
{
    use HasFactory;
    use SoftDeletes;
    
    protected $table = 'seguidores';
    protected $fillable = [
        'IdUsuarioSeguidor',
        'IdUsuarioSeguido',
    ];

    public function usuarioSeguido()
    {
        return $this->belongsTo(User::class, 'IdUsuarioSeguido');
    }

    public function usuarioSeguidor()
    {
        return $this->belongsTo(User::class, 'IdUsuarioSeguidor');
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if ($model->IdUsuarioSeguidor == $model->IdUsuarioSeguido) {
                throw new \Exception('Un usuario no puede seguirse a sí mismo.');
            }
        });
    }
}
