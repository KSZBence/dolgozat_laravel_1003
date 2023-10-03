<?php

use App\Models\Product_types;
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
        Schema::create('product_types', function (Blueprint $table) {
            $table->id("type_id");
            $table->string("name");
            $table->string("description");
            $table->integer("cost");
            $table->timestamps();
        });

        Product_types::create(['name'=> "etel", 'description' => "eheto", "cost"=>100]);
        Product_types::create(['name'=> "etel2", 'description' => "eheto", "cost"=>110]);
        Product_types::create(['name'=> "etel3", 'description' => "eheto", "cost"=>120]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_types');
    }
};
