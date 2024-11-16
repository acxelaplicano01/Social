<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class MensajesPrivados extends BaseModel
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'mensajesprivados';
    protected $fillable = ['id', 'IdUsuario', 'IdUsuarioDestino', 'Mensaje', 'Leido'];
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    public $incrementing = true;
    protected $attributes = [
        'leido' => false,
    ];
    protected $casts = [
        'leido' => 'boolean',
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'IdUsuario', 'id');
    }

    public function usuarioDestino()
    {
        return $this->belongsTo(User::class, 'IdUsuarioDestino', 'id');
    }
}
