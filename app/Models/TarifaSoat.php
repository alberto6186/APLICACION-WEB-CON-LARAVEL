<?php
// app/Models/TarifaSoat.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TarifaSoat extends Model
{
    use HasFactory;

    protected $fillable = [
        'cilindraje',
        'precio',
    ];
}
