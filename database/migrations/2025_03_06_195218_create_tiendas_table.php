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
        Schema::create('tiendas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->smallInteger("id_companie");
            $table->integer("zone");
            $table->tinyinteger("edo");
            $table->string("name");
            $table->string("address");
            $table->json("deptos");
            $table->float("sells_gral", 8, 3);
            $table->float("average_mont", 8, 3);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tiendas');
    }
};

