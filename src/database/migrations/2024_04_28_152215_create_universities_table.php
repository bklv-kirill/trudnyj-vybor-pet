<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('universities', function (Blueprint $table) {
            $table->id();

            $table->string('name', '1000');
            $table->string('slug', '1000');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('universities');
    }
};