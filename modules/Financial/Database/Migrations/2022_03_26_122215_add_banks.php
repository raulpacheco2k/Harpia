<?php

use Illuminate\Database\Migrations\Migration;
use Modules\Financial\Database\Seeders\BankSeeder;

return new class extends Migration {
    public function up(): void
    {
        Artisan::call('db:seed', [
            '--class' => BankSeeder::class,
            '--force' => true
        ]);
    }
};
