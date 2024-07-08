<?php
// database/migrations/xxxx_xx_xx_xxxxxx_create_vehiculos_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();
            $table->string('placa')->unique();
            $table->string('marca');
            $table->string('linea');
            $table->string('modelo');
            $table->string('tipo_vehiculo');
            $table->string('clase');
            $table->string('cilindraje');
            $table->string('numero_motor');
            $table->integer('numero_pasajeros');
            $table->string('tipo_combustible');
            $table->string('vin');
            $table->unsignedBigInteger('cliente_id');
            $table->timestamps();

            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehiculos');
    }
}
