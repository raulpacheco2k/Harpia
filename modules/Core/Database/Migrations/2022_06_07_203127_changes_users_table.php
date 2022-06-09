<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('name', 'first_name');
            $table->string('last_name')->after('name');
            $table->string('username')->nullable()->after('last_name')->unique();
        });
    }

    public function down(): void
    {
        Schema::table('users', static function (Blueprint $table) {
            Schema::dropColumns('users', ['username']);
        });
    }
};
