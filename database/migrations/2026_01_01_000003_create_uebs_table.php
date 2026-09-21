<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('uebs', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('name');
            $table->string('province')->nullable();
            $table->string('logo')->nullable();
            $table->string('image')->nullable();
            $table->text('intro')->nullable();
            $table->longText('content')->nullable();
            $table->text('mission')->nullable();
            $table->text('vision')->nullable();
            $table->string('address')->nullable();
            $table->string('website')->nullable();
            $table->unsignedInteger('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('uebs');
    }
};
