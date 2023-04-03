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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->string('item_name');

            $table->string('price');
            $table->string('description');
            $table->string('item_con');
            $table->string('item_type');
            $table->string('status');
            $table->string('item_photo');
            $table->string('ownerName');
            $table->string('address');
            $table->string('contNo');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
