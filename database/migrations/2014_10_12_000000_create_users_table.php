<?php

use App\Models\User;
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
        Schema::create('users', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->integer('balance')->default(0);
            $table->timestamps();
        });

        User::create(['name' => 'geza', 'email' => 'geza@nomail.yes', 'balance'=> 100]);
        User::create(['name' => 'ferenc', 'email' => 'ferenc@nomail.yes', 'balance'=> 120]);
        User::create(['name' => 'jozsi', 'email' => 'jozsi@nomail.yes', 'balance'=> 140]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
