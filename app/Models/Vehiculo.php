<?php
// app/Models/Vehiculo.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;

    protected $fillable = [
        'placa',
        'marca',
        'linea',
        'modelo',
        'tipo_vehiculo',
         'clase', 'cilindraje',
         'numero_motor',
         'numero_pasajeros',
          'tipo_combustible',
          'vin',
          'cliente_id'
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function soats()
    {
        return $this->hasMany(Soat::class);
    }

    public function tarifaSoat()
    {
        return $this->belongsTo(TarifaSoat::class, 'cilindraje', 'cilindraje');
    }
}
