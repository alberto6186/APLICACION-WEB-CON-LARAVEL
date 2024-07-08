<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([
            [
                'tipo_identificacion' => 'CC',
                'numero_identificacion' => '12345678',
                'fecha_expedicion' => Carbon::parse('2000-01-01'),
                'nombres' => 'Juan',
                'apellidos' => 'Perez',
                'pais' => 'Colombia',
                'ciudad' => 'Bogotá',
                'direccion' => 'Calle 123 # 45-67',
                'telefono' => '1234567890',
                'email' => 'juan.perez@example.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'tipo_identificacion' => 'CC',
                'numero_identificacion' => '23456789',
                'fecha_expedicion' => Carbon::parse('2001-02-02'),
                'nombres' => 'Maria',
                'apellidos' => 'Gomez',
                'pais' => 'Colombia',
                'ciudad' => 'Medellín',
                'direccion' => 'Carrera 456 # 78-90',
                'telefono' => '2345678901',
                'email' => 'maria.gomez@example.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'tipo_identificacion' => 'CC',
                'numero_identificacion' => '34567890',
                'fecha_expedicion' => Carbon::parse('2002-03-03'),
                'nombres' => 'Carlos',
                'apellidos' => 'Lopez',
                'pais' => 'Colombia',
                'ciudad' => 'Cali',
                'direccion' => 'Avenida 789 # 01-23',
                'telefono' => '3456789012',
                'email' => 'carlos.lopez@example.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'tipo_identificacion' => 'CC',
                'numero_identificacion' => '45678901',
                'fecha_expedicion' => Carbon::parse('2003-04-04'),
                'nombres' => 'Laura',
                'apellidos' => 'Martinez',
                'pais' => 'Colombia',
                'ciudad' => 'Barranquilla',
                'direccion' => 'Transversal 012 # 34-56',
                'telefono' => '4567890123',
                'email' => 'laura.martinez@example.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'tipo_identificacion' => 'CC',
                'numero_identificacion' => '56789012',
                'fecha_expedicion' => Carbon::parse('2004-05-05'),
                'nombres' => 'Jorge',
                'apellidos' => 'Ramirez',
                'pais' => 'Colombia',
                'ciudad' => 'Cartagena',
                'direccion' => 'Diagonal 345 # 67-89',
                'telefono' => '5678901234',
                'email' => 'jorge.ramirez@example.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'tipo_identificacion' => 'CC',
                'numero_identificacion' => '67890123',
                'fecha_expedicion' => Carbon::parse('2005-06-06'),
                'nombres' => 'Ana',
                'apellidos' => 'Torres',
                'pais' => 'Colombia',
                'ciudad' => 'Pereira',
                'direccion' => 'Calle 678 # 90-12',
                'telefono' => '6789012345',
                'email' => 'ana.torres@example.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'tipo_identificacion' => 'CC',
                'numero_identificacion' => '78901234',
                'fecha_expedicion' => Carbon::parse('2006-07-07'),
                'nombres' => 'Luis',
                'apellidos' => 'Fernandez',
                'pais' => 'Colombia',
                'ciudad' => 'Manizales',
                'direccion' => 'Carrera 012 # 34-56',
                'telefono' => '7890123456',
                'email' => 'luis.fernandez@example.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'tipo_identificacion' => 'CC',
                'numero_identificacion' => '89012345',
                'fecha_expedicion' => Carbon::parse('2007-08-08'),
                'nombres' => 'Diana',
                'apellidos' => 'Vargas',
                'pais' => 'Colombia',
                'ciudad' => 'Bucaramanga',
                'direccion' => 'Avenida 345 # 67-89',
                'telefono' => '8901234567',
                'email' => 'diana.vargas@example.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'tipo_identificacion' => 'CC',
                'numero_identificacion' => '90123456',
                'fecha_expedicion' => Carbon::parse('2008-09-09'),
                'nombres' => 'Ricardo',
                'apellidos' => 'Moreno',
                'pais' => 'Colombia',
                'ciudad' => 'Santa Marta',
                'direccion' => 'Transversal 678 # 90-12',
                'telefono' => '9012345678',
                'email' => 'ricardo.moreno@example.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'tipo_identificacion' => 'CC',
                'numero_identificacion' => '01234567',
                'fecha_expedicion' => Carbon::parse('2009-10-10'),
                'nombres' => 'Sandra',
                'apellidos' => 'Rojas',
                'pais' => 'Colombia',
                'ciudad' => 'Neiva',
                'direccion' => 'Diagonal 901 # 23-45',
                'telefono' => '0123456789',
                'email' => 'sandra.rojas@example.com',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
