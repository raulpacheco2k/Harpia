<?php

namespace Modules\Financial\Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BankAccountTypeSeeder extends Seeder
{
    public function run()
    {
        DB::table('bank_account_types')->insert([
            'name' => 'Conta Corrente',
            'slug' => str('Conta Corrente')->slug(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('bank_account_types')->insert([
            'name' => 'Conta Poupança',
            'slug' => str(' Conta Poupança')->slug(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('bank_account_types')->insert([
            'name' => 'Conta Salário',
            'slug' => str('Conta Salário')->slug(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('bank_account_types')->insert([
            'name' => 'Conta de Pagamentos',
            'slug' => str('Conta de Pagamentos')->slug(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

    }
}
