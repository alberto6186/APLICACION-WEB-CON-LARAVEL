<?php
// database/migrations/xxxx_xx_xx_xxxxxx_create_clientes_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_identificacion');
            $table->string('numero_identificacion')->unique();
            $table->date('fecha_expedicion_documento');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('pais');
            $table->string('ciudad');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('email')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
