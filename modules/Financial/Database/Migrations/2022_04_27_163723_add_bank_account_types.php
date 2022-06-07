<?php

use Illuminate\Database\Migrations\Migration;
use Modules\Financial\Database\Seeders\BankAccountTypeSeeder;

return new class extends Migration {
    public function up(): void
    {
        Artisan::call('db:seed', [
            '--class' => BankAccountTypeSeeder::class,
            '--force' => true
        ]);
    }
};
