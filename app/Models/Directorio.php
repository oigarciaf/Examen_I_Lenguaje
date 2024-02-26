<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Directorio extends Model
{
    use HasFactory;
    protected $fillable = ['codigoEntrada', 'nombre', 'apellido', 'telefono', 'correo'];
    
    public function contactos()
    {
        return $this->hasMany(Contacto::class, 'codigoEntrada', 'codigoEntrada');
    }
    
}
