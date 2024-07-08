<?php
// app/Models/Cliente.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipo_identificacion',
        'numero_identificacion',
        'fecha_expedicion_documento',
        'nombres',
        'apellidos',
        'pais',
        'ciudad',
        'direccion',
        'telefono',
        'email',
    ];

    public function vehiculos()
    {
        return $this->hasMany(Vehiculo::class);
    }
}
