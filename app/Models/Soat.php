<?php
// app/Models/Soat.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soat extends Model
{
    use HasFactory;

    protected $fillable = [
        'vehiculo_id',
        'fecha_vigencia',
        'fecha_finalizacion',
        'estado',
    ];

    public function vehiculo()
    {
        return $this->belongsTo(Vehiculo::class);
    }
}
