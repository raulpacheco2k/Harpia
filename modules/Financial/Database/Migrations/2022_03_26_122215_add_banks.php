<?php

use Illuminate\Database\Migrations\Migration;
use Modules\Financial\Database\Seeders\BankSeeder;

class AddBanks extends Migration
{
    public function up()
    {
        Artisan::call('db:seed', [
            '--class' => BankSeeder::class,
            '--force' => true
        ]);
    }
}
