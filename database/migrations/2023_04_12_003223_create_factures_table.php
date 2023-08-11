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
        Schema::create('factures', function (Blueprint $table) {
            $table->increments('id');
            $table->string('facture_number');
            $table->string('facture_Date');
            $table->string('Echeance_date');
            $table->decimal('valeur_tva',8,2)->nullable();
            $table->decimal('Total',8,2)->nullable();
           // $table->string('Status', 50);
            $table->text('note')->nullable();

            $table->timestamps();
            $table->foreignId('user_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('factures');
    }
};
