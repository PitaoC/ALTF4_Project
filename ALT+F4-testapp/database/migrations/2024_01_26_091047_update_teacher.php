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
        Schema::table('teachers', function (Blueprint $table) {
            //
            $table->string('lastname', 100);
            $table->string('firstname', 100);
            $table->string('department', 10);
            $table->string('status', 50);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('teachers', function (Blueprint $table) {
            //
            $table->dropColumn('lastname');
            $table->dropColumn('firstname');
            $table->dropColumn('department');
            $table->dropColumn('status');
        });
    }
};
