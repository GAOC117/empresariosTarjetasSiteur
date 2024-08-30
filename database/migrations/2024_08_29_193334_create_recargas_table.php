<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('recargas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('empresarios_id')->constrained()->onDelete('no action');
            $table->decimal('cantidadTarjetasVendidas',20,2);
            $table->integer('cantidadTarjetasNuevas');
            $table->decimal('recarga',20,2);
            $table->decimal('montoVentaPlastico',20,2);
            $table->decimal('ivaPlastico',20,2);
            $table->string('oficio');
            $table->decimal('deposito',20,2);
            $table->date('fechaDeposito');
            $table->string('comentarios');
            $table->foreignId('user_id')->constrained()->onDelete('no action');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recargas');
    }
};
