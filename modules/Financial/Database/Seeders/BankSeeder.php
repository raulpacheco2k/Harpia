<?php

namespace Modules\Financial\Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BankSeeder extends Seeder
{
    public function run()
    {
        DB::table('banks')->insert([
            'name' => 'Banco do Brasil S.A.',
            'slug' => str('Banco do Brasil S.A.')->slug(),
            'code' => '001',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco da Amazônia S.A.',
            'slug' => str('Banco da Amazônia S.A.')->slug(),
            'code' => '003',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco do Nordeste do Brasil S.A.',
            'slug' => str('Banco do Nordeste do Brasil S.A.')->slug(),
            'code' => '004',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Nacional de Desenvolvimento Econômico e Social – BNDES',
            'slug' => str('Banco Nacional de Desenvolvimento Econômico e Social – BNDES')->slug(),
            'code' => '007',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Credicoamo',
            'slug' => str('Credicoamo')->slug(),
            'code' => '010',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'C.Suisse Hedging-Griffo Cv S.A (Credit Suisse)',
            'slug' => str('C.Suisse Hedging-Griffo Cv S.A (Credit Suisse)')->slug(),
            'code' => '011',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Inbursa S.A.',
            'slug' => str('Banco Inbursa S.A.')->slug(),
            'code' => '012',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Natixis Brasil S.A.',
            'slug' => str('Natixis Brasil S.A.')->slug(),
            'code' => '014',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Ccm Desp Trâns Sc E Rs',
            'slug' => str('Ccm Desp Trâns Sc E Rs')->slug(),
            'code' => '016',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'BNY Mellon Banco S.A.',
            'slug' => str('BNY Mellon Banco S.A.')->slug(),
            'code' => '017',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Tricury S.A.',
            'slug' => str('Banco Tricury S.A.')->slug(),
            'code' => '018',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'BANESTES S.A. Banco do Estado do Espírito Santo',
            'slug' => str('BANESTES S.A. Banco do Estado do Espírito Santo')->slug(),
            'code' => '021',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco BANDEPE S.A.',
            'slug' => str('Banco BANDEPE S.A.')->slug(),
            'code' => '024',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Alfa S.A.',
            'slug' => str('Banco Alfa S.A.')->slug(),
            'code' => '025',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Itaú Consignado S.A.',
            'slug' => str('Banco Itaú Consignado S.A.')->slug(),
            'code' => '029',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Santander S.A.',
            'slug' => str('Banco Santander S.A.')->slug(),
            'code' => '033',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Bradesco BBI S.A.',
            'slug' => str('Banco Bradesco BBI S.A.')->slug(),
            'code' => '036',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco do Estado do Pará S.A.',
            'slug' => str('Banco do Estado do Pará S.A.')->slug(),
            'code' => '037',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Cargill S.A.',
            'slug' => str('Banco Cargill S.A.')->slug(),
            'code' => '040',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco do Estado do Rio Grande do Sul S.A.',
            'slug' => str('Banco do Estado do Rio Grande do Sul S.A.')->slug(),
            'code' => '041',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco do Estado de Sergipe S.A.',
            'slug' => str('Banco do Estado de Sergipe S.A.')->slug(),
            'code' => '047',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco de Desenvolvimento do Espírito Santo S.A.',
            'slug' => str('Banco de Desenvolvimento do Espírito Santo S.A.')->slug(),
            'code' => '051',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Confidence Cc S.A',
            'slug' => str('Confidence Cc S.A')->slug(),
            'code' => '060',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Hipercard S.A.',
            'slug' => str('Hipercard S.A.')->slug(),
            'code' => '062',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Bradescard S.A.',
            'slug' => str('Banco Bradescard S.A.')->slug(),
            'code' => '063',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Goldman Sachs do Brasil S.A.',
            'slug' => str('Goldman Sachs do Brasil S.A.')->slug(),
            'code' => '064',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Andbank S.A.',
            'slug' => str('Banco Andbank S.A.')->slug(),
            'code' => '065',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Morgan Stanley S.A.',
            'slug' => str('Banco Morgan Stanley S.A.')->slug(),
            'code' => '066',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Crefisa S.A.',
            'slug' => str('Banco Crefisa S.A.')->slug(),
            'code' => '069',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'BRB – Banco de Brasília S.A.',
            'slug' => str('BRB – Banco de Brasília S.A.')->slug(),
            'code' => '070',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco J. Safra S.A.',
            'slug' => str('Banco J. Safra S.A.')->slug(),
            'code' => '074',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco ABN AMRO S.A',
            'slug' => str('Banco ABN AMRO S.A')->slug(),
            'code' => '075',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco KDB S.A.',
            'slug' => str('Banco KDB S.A.')->slug(),
            'code' => '076',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Inter S.A.',
            'slug' => str('Banco Inter S.A.')->slug(),
            'code' => '077',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Haitong Banco de Investimento do Brasil S.A.',
            'slug' => str('Haitong Banco de Investimento do Brasil S.A.')->slug(),
            'code' => '078',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Original do Agronegócio S.A.',
            'slug' => str('Banco Original do Agronegócio S.A.')->slug(),
            'code' => '079',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'B&T Cc Ltda',
            'slug' => str('B&T Cc Ltda')->slug(),
            'code' => '080',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'BancoSeguro S.A.',
            'slug' => str('BancoSeguro S.A.')->slug(),
            'code' => '081',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Topázio S.A.',
            'slug' => str('Banco Topázio S.A.')->slug(),
            'code' => '082',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco da China Brasil S.A.',
            'slug' => str('Banco da China Brasil S.A.')->slug(),
            'code' => '083',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Uniprime Norte do Paraná – Coop de Economia eCrédito Mútuo dos Médicos, Profissionais das Ciências',
            'slug' => str('Uniprime Norte do Paraná – Coop de Economia eCrédito Mútuo dos Médicos, Profissionais das Ciências')->slug(),
            'code' => '084',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Coop Central Ailos',
            'slug' => str('Coop Central Ailos')->slug(),
            'code' => '085',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Cooperativa Central de Crédito Urbano-CECRED',
            'slug' => str('Cooperativa Central de Crédito Urbano-CECRED')->slug(),
            'code' => '085',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Cooperativa Central de Economia e Crédito Mútuo das Unicredsde Santa Catarina e Paraná',
            'slug' => str('Cooperativa Central de Economia e Crédito Mútuo das Unicredsde Santa Catarina e Paraná')->slug(),
            'code' => '087',
            'digit' => '6',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Ccr Reg Mogiana',
            'slug' => str('Ccr Reg Mogiana')->slug(),
            'code' => '089',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Cooperativa de Crédito Rural da Região da Mogiana',
            'slug' => str('Cooperativa de Crédito Rural da Região da Mogiana')->slug(),
            'code' => '089',
            'digit' => '2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Cooperativa Central de Economia e Crédito Mutuo – SICOOB UNIMAIS',
            'slug' => str('Cooperativa Central de Economia e Crédito Mutuo – SICOOB UNIMAIS')->slug(),
            'code' => '090',
            'digit' => '2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Unicred Central Rs',
            'slug' => str('Unicred Central Rs')->slug(),
            'code' => '091',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Unicred Central do Rio Grande do Sul',
            'slug' => str('Unicred Central do Rio Grande do Sul')->slug(),
            'code' => '091',
            'digit' => '4',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Brickell S.A. Crédito, Financiamento e Investimento',
            'slug' => str('Brickell S.A. Crédito, Financiamento e Investimento')->slug(),
            'code' => '092',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Pólocred Scmepp Ltda',
            'slug' => str('Pólocred Scmepp Ltda')->slug(),
            'code' => '093',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Finaxis S.A.',
            'slug' => str('Banco Finaxis S.A.')->slug(),
            'code' => '094',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Travelex Banco de Câmbio S.A.',
            'slug' => str('Travelex Banco de Câmbio S.A.')->slug(),
            'code' => '095',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco B3 S.A.',
            'slug' => str('Banco B3 S.A.')->slug(),
            'code' => '096',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Cooperativa Central de Crédito Noroeste Brasileiro Ltda.',
            'slug' => str('Cooperativa Central de Crédito Noroeste Brasileiro Ltda.')->slug(),
            'code' => '097',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Credialiança Ccr',
            'slug' => str('Credialiança Ccr')->slug(),
            'code' => '098',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'CREDIALIANÇA COOPERATIVA DE CRÉDITO RURAL',
            'slug' => str('CREDIALIANÇA COOPERATIVA DE CRÉDITO RURAL')->slug(),
            'code' => '098',
            'digit' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'UNIPRIME Central – Central Interestadual de Cooperativas de Crédito Ltda.',
            'slug' => str('UNIPRIME Central – Central Interestadual de Cooperativas de Crédito Ltda.')->slug(),
            'code' => '099',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Planner Corretora De Valores S.A',
            'slug' => str('Planner Corretora De Valores S.A')->slug(),
            'code' => '100',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Renascenca Dtvm Ltda',
            'slug' => str('Renascenca Dtvm Ltda')->slug(),
            'code' => '101',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Xp Investimentos S.A',
            'slug' => str('Xp Investimentos S.A')->slug(),
            'code' => '102',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Caixa Econômica Federal',
            'slug' => str('Caixa Econômica Federal')->slug(),
            'code' => '104',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Lecca Crédito, Financiamento e Investimento S.A.',
            'slug' => str('Lecca Crédito, Financiamento e Investimento S.A.')->slug(),
            'code' => '105',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco BOCOM BBM S.A.',
            'slug' => str('Banco BOCOM BBM S.A.')->slug(),
            'code' => '107',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Portocred S.A',
            'slug' => str('Portocred S.A')->slug(),
            'code' => '108',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Oliveira Trust Dtvm S.A',
            'slug' => str('Banco Oliveira Trust Dtvm S.A')->slug(),
            'code' => '111',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Magliano S.A',
            'slug' => str('Magliano S.A')->slug(),
            'code' => '113',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Central Cooperativa De Crédito No Estado Do Espírito Santo',
            'slug' => str('Central Cooperativa De Crédito No Estado Do Espírito Santo')->slug(),
            'code' => '114',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Central das Cooperativas de Economia e Crédito Mútuo doEstado do Espírito Santo Ltda.',
            'slug' => str('Central das Cooperativas de Economia e Crédito Mútuo doEstado do Espírito Santo Ltda.')->slug(),
            'code' => '114',
            'digit' => '7',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Advanced Cc Ltda',
            'slug' => str('Advanced Cc Ltda')->slug(),
            'code' => '117',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Standard Chartered Bank S.A.',
            'slug' => str('Standard Chartered Bank S.A.')->slug(),
            'code' => '118',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Western Union do Brasil S.A.',
            'slug' => str('Banco Western Union do Brasil S.A.')->slug(),
            'code' => '119',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Rodobens S.A.',
            'slug' => str('Banco Rodobens S.A.')->slug(),
            'code' => '120',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Agibank S.A.',
            'slug' => str('Banco Agibank S.A.')->slug(),
            'code' => '121',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Bradesco BERJ S.A.',
            'slug' => str('Banco Bradesco BERJ S.A.')->slug(),
            'code' => '122',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Woori Bank do Brasil S.A.',
            'slug' => str('Banco Woori Bank do Brasil S.A.')->slug(),
            'code' => '124',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Plural S.A.',
            'slug' => str('Plural S.A.')->slug(),
            'code' => '125',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'BR Partners Banco de Investimento S.A.',
            'slug' => str('BR Partners Banco de Investimento S.A.')->slug(),
            'code' => '126',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Codepe Cvc S.A',
            'slug' => str('Codepe Cvc S.A')->slug(),
            'code' => '127',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'MS Bank S.A. Banco de Câmbio',
            'slug' => str('MS Bank S.A. Banco de Câmbio')->slug(),
            'code' => '128',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'UBS Brasil Banco de Investimento S.A.',
            'slug' => str('UBS Brasil Banco de Investimento S.A.')->slug(),
            'code' => '129',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Caruana Scfi',
            'slug' => str('Caruana Scfi')->slug(),
            'code' => '130',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Tullett Prebon Brasil Cvc Ltda',
            'slug' => str('Tullett Prebon Brasil Cvc Ltda')->slug(),
            'code' => '131',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'ICBC do Brasil S.A.',
            'slug' => str('ICBC do Brasil S.A.')->slug(),
            'code' => '132',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Cresol Confederação',
            'slug' => str('Cresol Confederação')->slug(),
            'code' => '133',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Bgc Liquidez Dtvm Ltda',
            'slug' => str('Bgc Liquidez Dtvm Ltda')->slug(),
            'code' => '134',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Unicred Cooperativa',
            'slug' => str('Unicred Cooperativa')->slug(),
            'code' => '136',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Multimoney Cc Ltda',
            'slug' => str('Multimoney Cc Ltda')->slug(),
            'code' => '137',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Get Money Cc Ltda',
            'slug' => str('Get Money Cc Ltda')->slug(),
            'code' => '138',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Intesa Sanpaolo Brasil S.A.',
            'slug' => str('Intesa Sanpaolo Brasil S.A.')->slug(),
            'code' => '139',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Easynvest – Título Cv S.A',
            'slug' => str('Easynvest – Título Cv S.A')->slug(),
            'code' => '140',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Broker Brasil Cc Ltda',
            'slug' => str('Broker Brasil Cc Ltda')->slug(),
            'code' => '142',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Treviso Corretora de Câmbio S.A.',
            'slug' => str('Treviso Corretora de Câmbio S.A.')->slug(),
            'code' => '143',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'BEXS Banco de Câmbio S.A.',
            'slug' => str('BEXS Banco de Câmbio S.A.')->slug(),
            'code' => '144',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Levycam Ccv Ltda',
            'slug' => str('Levycam Ccv Ltda')->slug(),
            'code' => '145',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Guitta Corretora de Câmbio Ltda',
            'slug' => str('Guitta Corretora de Câmbio Ltda')->slug(),
            'code' => '146',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Facta S.A. Cfi',
            'slug' => str('Facta S.A. Cfi')->slug(),
            'code' => '149',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Icap Do Brasil Ctvm Ltda',
            'slug' => str('Icap Do Brasil Ctvm Ltda')->slug(),
            'code' => '157',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Casa Credito S.A',
            'slug' => str('Casa Credito S.A')->slug(),
            'code' => '159',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Commerzbank Brasil S.A.',
            'slug' => str('Commerzbank Brasil S.A.')->slug(),
            'code' => '163',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Olé Bonsucesso Consignado S.A.',
            'slug' => str('Banco Olé Bonsucesso Consignado S.A.')->slug(),
            'code' => '169',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Albatross Ccv S.A',
            'slug' => str('Albatross Ccv S.A')->slug(),
            'code' => '172',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'BRL Trust Distribuidora de Títulos e Valores Mobiliários S.A.',
            'slug' => str('BRL Trust Distribuidora de Títulos e Valores Mobiliários S.A.')->slug(),
            'code' => '173',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Pernambucanas Financ S.A',
            'slug' => str('Pernambucanas Financ S.A')->slug(),
            'code' => '174',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Guide Investimentos S.A. Corretora de Valores',
            'slug' => str('Guide Investimentos S.A. Corretora de Valores')->slug(),
            'code' => '177',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Cm Capital Markets Cctvm Ltda',
            'slug' => str('Cm Capital Markets Cctvm Ltda')->slug(),
            'code' => '180',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Dacasa Financeira S.A.',
            'slug' => str('Dacasa Financeira S.A.')->slug(),
            'code' => '182',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Socred S.A',
            'slug' => str('Socred S.A')->slug(),
            'code' => '183',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Itaú BBA S.A.',
            'slug' => str('Banco Itaú BBA S.A.')->slug(),
            'code' => '184',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Ativa Investimentos S.A',
            'slug' => str('Ativa Investimentos S.A')->slug(),
            'code' => '188',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'HS Financeira S.A. Crédito, Financiamento e Investimentos',
            'slug' => str('HS Financeira S.A. Crédito, Financiamento e Investimentos')->slug(),
            'code' => '189',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Servicoop',
            'slug' => str('Servicoop')->slug(),
            'code' => '190',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Nova Futura Corretora de Títulos e Valores Mobiliários Ltda.',
            'slug' => str('Nova Futura Corretora de Títulos e Valores Mobiliários Ltda.')->slug(),
            'code' => '191',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Parmetal Distribuidora de Títulos e Valores Mobiliários Ltda',
            'slug' => str('Parmetal Distribuidora de Títulos e Valores Mobiliários Ltda')->slug(),
            'code' => '194',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Fair Corretora de Câmbio S.A',
            'slug' => str('Banco Fair Corretora de Câmbio S.A')->slug(),
            'code' => '196',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Stone Pagamentos S.A',
            'slug' => str('Stone Pagamentos S.A')->slug(),
            'code' => '197',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Bradesco Cartões S.A.',
            'slug' => str('Banco Bradesco Cartões S.A.')->slug(),
            'code' => '204',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco BTG Pactual S.A.',
            'slug' => str('Banco BTG Pactual S.A.')->slug(),
            'code' => '208',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Original S.A.',
            'slug' => str('Banco Original S.A.')->slug(),
            'code' => '212',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Arbi S.A.',
            'slug' => str('Banco Arbi S.A.')->slug(),
            'code' => '213',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco John Deere S.A.',
            'slug' => str('Banco John Deere S.A.')->slug(),
            'code' => '217',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco BS2 S.A.',
            'slug' => str('Banco BS2 S.A.')->slug(),
            'code' => '218',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Credit Agricole Brasil S.A.',
            'slug' => str('Banco Credit Agricole Brasil S.A.')->slug(),
            'code' => '222',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Fibra S.A.',
            'slug' => str('Banco Fibra S.A.')->slug(),
            'code' => '224',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Cifra S.A.',
            'slug' => str('Banco Cifra S.A.')->slug(),
            'code' => '233',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Bradesco S.A.',
            'slug' => str('Banco Bradesco S.A.')->slug(),
            'code' => '237',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Clássico S.A.',
            'slug' => str('Banco Clássico S.A.')->slug(),
            'code' => '241',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Máxima S.A.',
            'slug' => str('Banco Máxima S.A.')->slug(),
            'code' => '243',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco ABC Brasil S.A.',
            'slug' => str('Banco ABC Brasil S.A.')->slug(),
            'code' => '246',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Investcred Unibanco S.A.',
            'slug' => str('Banco Investcred Unibanco S.A.')->slug(),
            'code' => '249',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'BCV – Banco de Crédito e Varejo S.A.',
            'slug' => str('BCV – Banco de Crédito e Varejo S.A.')->slug(),
            'code' => '250',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Bexs S.A.',
            'slug' => str('Bexs S.A.')->slug(),
            'code' => '253',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Paraná Banco S.A.',
            'slug' => str('Paraná Banco S.A.')->slug(),
            'code' => '254',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Nu Pagamentos S.A (Nubank)',
            'slug' => str('Nu Pagamentos S.A (Nubank)')->slug(),
            'code' => '260',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Fator S.A.',
            'slug' => str('Banco Fator S.A.')->slug(),
            'code' => '265',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Cédula S.A.',
            'slug' => str('Banco Cédula S.A.')->slug(),
            'code' => '266',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Barigui Companhia Hipotecária',
            'slug' => str('Barigui Companhia Hipotecária')->slug(),
            'code' => '268',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'HSBC Brasil S.A. – Banco de Investimento',
            'slug' => str('HSBC Brasil S.A. – Banco de Investimento')->slug(),
            'code' => '269',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Sagitur Corretora de Câmbio Ltda.',
            'slug' => str('Sagitur Corretora de Câmbio Ltda.')->slug(),
            'code' => '270',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'IB Corretora de Câmbio, Títulos e Valores Mobiliários S.A.',
            'slug' => str('IB Corretora de Câmbio, Títulos e Valores Mobiliários S.A.')->slug(),
            'code' => '271',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Cooperativa de Crédito Rural de São Miguel do Oeste – Sulcredi/São Miguel',
            'slug' => str('Cooperativa de Crédito Rural de São Miguel do Oeste – Sulcredi/São Miguel')->slug(),
            'code' => '273',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Senff S.A. – Crédito, Financiamento e Investimento',
            'slug' => str('Senff S.A. – Crédito, Financiamento e Investimento')->slug(),
            'code' => '276',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Genial Investimentos Corretora de Valores Mobiliários S.A.',
            'slug' => str('Genial Investimentos Corretora de Valores Mobiliários S.A.')->slug(),
            'code' => '278',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Cooperativa de Crédito Rural de Primavera Do Leste',
            'slug' => str('Cooperativa de Crédito Rural de Primavera Do Leste')->slug(),
            'code' => '279',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Avista S.A. Crédito, Financiamento e Investimento',
            'slug' => str('Avista S.A. Crédito, Financiamento e Investimento')->slug(),
            'code' => '280',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Rb Capital Investimentos Dtvm Ltda',
            'slug' => str('Rb Capital Investimentos Dtvm Ltda')->slug(),
            'code' => '283',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Frente Corretora de Câmbio Ltda.',
            'slug' => str('Frente Corretora de Câmbio Ltda.')->slug(),
            'code' => '285',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Cooperativa de Crédito Rural De Ouro',
            'slug' => str('Cooperativa de Crédito Rural De Ouro')->slug(),
            'code' => '286',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Carol Distribuidora de Títulos e Valor Mobiliários Ltda',
            'slug' => str('Carol Distribuidora de Títulos e Valor Mobiliários Ltda')->slug(),
            'code' => '288',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Pagseguro Internet S.A',
            'slug' => str('Pagseguro Internet S.A')->slug(),
            'code' => '290',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'BS2 Distribuidora de Títulos e Valores Mobiliários S.A.',
            'slug' => str('BS2 Distribuidora de Títulos e Valores Mobiliários S.A.')->slug(),
            'code' => '292',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Lastro RDV Distribuidora de Títulos e Valores Mobiliários Ltda.',
            'slug' => str('Lastro RDV Distribuidora de Títulos e Valores Mobiliários Ltda.')->slug(),
            'code' => '293',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Vips Cc Ltda',
            'slug' => str('Vips Cc Ltda')->slug(),
            'code' => '298',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Sorocred Crédito, Financiamento e Investimento S.A.',
            'slug' => str('Sorocred Crédito, Financiamento e Investimento S.A.')->slug(),
            'code' => '299',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco de La Nacion Argentina',
            'slug' => str('Banco de La Nacion Argentina')->slug(),
            'code' => '300',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Bpp Instituição De Pagamentos S.A',
            'slug' => str('Bpp Instituição De Pagamentos S.A')->slug(),
            'code' => '301',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Vortx Distribuidora de Títulos e Valores Mobiliários Ltda',
            'slug' => str('Vortx Distribuidora de Títulos e Valores Mobiliários Ltda')->slug(),
            'code' => '310',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco BMG S.A.',
            'slug' => str('Banco BMG S.A.')->slug(),
            'code' => '318',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'China Construction Bank S.A.',
            'slug' => str('China Construction Bank S.A.')->slug(),
            'code' => '320',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Mercado Pago – Conta Do Mercado Livre',
            'slug' => str('Mercado Pago – Conta Do Mercado Livre')->slug(),
            'code' => '323',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Parati – Crédito Financiamento e Investimento S.A.',
            'slug' => str('Parati – Crédito Financiamento e Investimento S.A.')->slug(),
            'code' => '326',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Digio S.A',
            'slug' => str('Banco Digio S.A')->slug(),
            'code' => '335',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco C6 S.A – C6 Bank',
            'slug' => str('Banco C6 S.A – C6 Bank')->slug(),
            'code' => '336',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Super Pagamentos e Administração de Meios Eletrônicos S.A.',
            'slug' => str('Super Pagamentos e Administração de Meios Eletrônicos S.A.')->slug(),
            'code' => '340',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Itaú Unibanco S.A.',
            'slug' => str('Itaú Unibanco S.A.')->slug(),
            'code' => '341',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Xp S.A.',
            'slug' => str('Banco Xp S.A.')->slug(),
            'code' => '348',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Société Générale Brasil S.A.',
            'slug' => str('Banco Société Générale Brasil S.A.')->slug(),
            'code' => '366',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Carrefour',
            'slug' => str('Banco Carrefour')->slug(),
            'code' => '368',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Mizuho do Brasil S.A.',
            'slug' => str('Banco Mizuho do Brasil S.A.')->slug(),
            'code' => '370',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco J. P. Morgan S.A.',
            'slug' => str('Banco J. P. Morgan S.A.')->slug(),
            'code' => '376',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Mercantil de Investimentos S.A.',
            'slug' => str('Banco Mercantil de Investimentos S.A.')->slug(),
            'code' => '389',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Mercantil do Brasil S.A.',
            'slug' => str('Banco Mercantil do Brasil S.A.')->slug(),
            'code' => '389',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Bradesco Financiamentos S.A.',
            'slug' => str('Banco Bradesco Financiamentos S.A.')->slug(),
            'code' => '394',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Kirton Bank S.A.',
            'slug' => str('Kirton Bank S.A.')->slug(),
            'code' => '399',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Capital S.A.',
            'slug' => str('Banco Capital S.A.')->slug(),
            'code' => '412',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Safra S.A.',
            'slug' => str('Banco Safra S.A.')->slug(),
            'code' => '422',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco MUFG Brasil S.A.',
            'slug' => str('Banco MUFG Brasil S.A.')->slug(),
            'code' => '456',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Sumitomo Mitsui Brasileiro S.A.',
            'slug' => str('Banco Sumitomo Mitsui Brasileiro S.A.')->slug(),
            'code' => '464',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Caixa Geral – Brasil S.A.',
            'slug' => str('Banco Caixa Geral – Brasil S.A.')->slug(),
            'code' => '473',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Citibank N.A.',
            'slug' => str('Citibank N.A.')->slug(),
            'code' => '477',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco ItauBank S.A',
            'slug' => str('Banco ItauBank S.A')->slug(),
            'code' => '479',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Deutsche Bank S.A. – Banco Alemão',
            'slug' => str('Deutsche Bank S.A. – Banco Alemão')->slug(),
            'code' => '487',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'JPMorgan Chase Bank, National Association',
            'slug' => str('JPMorgan Chase Bank, National Association')->slug(),
            'code' => '488',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'ING Bank N.V.',
            'slug' => str('ING Bank N.V.')->slug(),
            'code' => '492',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco de La Republica Oriental del Uruguay',
            'slug' => str('Banco de La Republica Oriental del Uruguay')->slug(),
            'code' => '494',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco de La Provincia de Buenos Aires',
            'slug' => str('Banco de La Provincia de Buenos Aires')->slug(),
            'code' => '495',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Credit Suisse S.A.',
            'slug' => str('Banco Credit Suisse S.A.')->slug(),
            'code' => '505',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Senso Ccvm S.A',
            'slug' => str('Senso Ccvm S.A')->slug(),
            'code' => '545',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Luso Brasileiro S.A.',
            'slug' => str('Banco Luso Brasileiro S.A.')->slug(),
            'code' => '600',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Industrial do Brasil S.A.',
            'slug' => str('Banco Industrial do Brasil S.A.')->slug(),
            'code' => '604',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco VR S.A.',
            'slug' => str('Banco VR S.A.')->slug(),
            'code' => '610',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Paulista S.A.',
            'slug' => str('Banco Paulista S.A.')->slug(),
            'code' => '611',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Guanabara S.A.',
            'slug' => str('Banco Guanabara S.A.')->slug(),
            'code' => '612',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Omni Banco S.A.',
            'slug' => str('Omni Banco S.A.')->slug(),
            'code' => '613',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco PAN S.A.',
            'slug' => str('Banco PAN S.A.')->slug(),
            'code' => '623',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Ficsa S.A.',
            'slug' => str('Banco Ficsa S.A.')->slug(),
            'code' => '626',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Smartbank S.A.',
            'slug' => str('Banco Smartbank S.A.')->slug(),
            'code' => '630',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Rendimento S.A.',
            'slug' => str('Banco Rendimento S.A.')->slug(),
            'code' => '633',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Triângulo S.A.',
            'slug' => str('Banco Triângulo S.A.')->slug(),
            'code' => '634',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Sofisa S.A.',
            'slug' => str('Banco Sofisa S.A.')->slug(),
            'code' => '637',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Alvorada S.A.',
            'slug' => str('Banco Alvorada S.A.')->slug(),
            'code' => '641',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Pine S.A.',
            'slug' => str('Banco Pine S.A.')->slug(),
            'code' => '643',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Itaú Unibanco Holding S.A.',
            'slug' => str('Itaú Unibanco Holding S.A.')->slug(),
            'code' => '652',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Indusval S.A.',
            'slug' => str('Banco Indusval S.A.')->slug(),
            'code' => '653',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco A.J.Renner S.A.',
            'slug' => str('Banco A.J.Renner S.A.')->slug(),
            'code' => '654',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Votorantim S.A.',
            'slug' => str('Banco Votorantim S.A.')->slug(),
            'code' => '655',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Porto Real de Investimentos S.A.',
            'slug' => str('Banco Porto Real de Investimentos S.A.')->slug(),
            'code' => '658',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Daycoval S.A.',
            'slug' => str('Banco Daycoval S.A.')->slug(),
            'code' => '707',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Ourinvest S.A.',
            'slug' => str('Banco Ourinvest S.A.')->slug(),
            'code' => '712',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Maxinvest S.A.',
            'slug' => str('Banco Maxinvest S.A.')->slug(),
            'code' => '720',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Cetelem S.A.',
            'slug' => str('Banco Cetelem S.A.')->slug(),
            'code' => '739',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Ribeirão Preto S.A.',
            'slug' => str('Banco Ribeirão Preto S.A.')->slug(),
            'code' => '741',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Semear S.A.',
            'slug' => str('Banco Semear S.A.')->slug(),
            'code' => '743',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Citibank S.A.',
            'slug' => str('Banco Citibank S.A.')->slug(),
            'code' => '745',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Modal S.A.',
            'slug' => str('Banco Modal S.A.')->slug(),
            'code' => '746',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Rabobank International Brasil S.A.',
            'slug' => str('Banco Rabobank International Brasil S.A.')->slug(),
            'code' => '747',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Cooperativo Sicredi S.A.',
            'slug' => str('Banco Cooperativo Sicredi S.A.')->slug(),
            'code' => '748',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Scotiabank Brasil S.A.',
            'slug' => str('Scotiabank Brasil S.A.')->slug(),
            'code' => '751',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco BNP Paribas Brasil S.A.',
            'slug' => str('Banco BNP Paribas Brasil S.A.')->slug(),
            'code' => '752',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Novo Banco Continental S.A.',
            'slug' => str('Novo Banco Continental S.A.')->slug(),
            'code' => '753',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Sistema S.A.',
            'slug' => str('Banco Sistema S.A.')->slug(),
            'code' => '754',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Bank of America Merrill Lynch S.A.',
            'slug' => str('Bank of America Merrill Lynch S.A.')->slug(),
            'code' => '755',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Cooperativo do Brasil S.A. – BANCOOB',
            'slug' => str('Banco Cooperativo do Brasil S.A. – BANCOOB')->slug(),
            'code' => '756',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco KEB HANA do Brasil S.A.',
            'slug' => str('Banco KEB HANA do Brasil S.A.')->slug(),
            'code' => '757',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Acesso Soluções De Pagamento S.A.',
            'slug' => str('Acesso Soluções De Pagamento S.A.')->slug(),
            'code' => '332',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'AGK Corretora De Câmbio S.A.',
            'slug' => str('AGK Corretora De Câmbio S.A.')->slug(),
            'code' => '272',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'AMAGGI S.A. - CRÉDITO, FINANCIAMENTO E INVESTIMENTO',
            'slug' => str('AMAGGI S.A. - CRÉDITO, FINANCIAMENTO E INVESTIMENTO')->slug(),
            'code' => '349',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Bari De Investimentos E Financiamentos S.A',
            'slug' => str('Banco Bari De Investimentos E Financiamentos S.A')->slug(),
            'code' => '330',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Cambionet Corretora De Câmbio Ltda.',
            'slug' => str('Cambionet Corretora De Câmbio Ltda.')->slug(),
            'code' => '309',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Cooperativa De Crédito Rural Coopavel',
            'slug' => str('Cooperativa De Crédito Rural Coopavel')->slug(),
            'code' => '281',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Cooperativa De Crédito Rural De Abelardo Luz - Sulcredi/Crediluz',
            'slug' => str('Cooperativa De Crédito Rural De Abelardo Luz - Sulcredi/Crediluz')->slug(),
            'code' => '322',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Creditas Sociedade De Crédito Direto S.A.',
            'slug' => str('Creditas Sociedade De Crédito Direto S.A.')->slug(),
            'code' => '342',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Crefaz Sociedade De Crédito Ao Microempreendedor E A Empresa De Pequeno Porte Lt',
            'slug' => str('Crefaz Sociedade De Crédito Ao Microempreendedor E A Empresa De Pequeno Porte Lt')->slug(),
            'code' => '321',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Decyseo Corretora De Câmbio Ltda.',
            'slug' => str('Decyseo Corretora De Câmbio Ltda.')->slug(),
            'code' => '289',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Fram Capital Distribuidora De Títulos E Valores Mobiliários S.A.',
            'slug' => str('Fram Capital Distribuidora De Títulos E Valores Mobiliários S.A.')->slug(),
            'code' => '331',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Money Plus Sociedade De Crédito Ao Microempreendedor E A Empresa De Pequeno Port',
            'slug' => str('Money Plus Sociedade De Crédito Ao Microempreendedor E A Empresa De Pequeno Port')->slug(),
            'code' => '274',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'OM Distribuidora De Títulos E Valores Mobiliários Ltda.',
            'slug' => str('OM Distribuidora De Títulos E Valores Mobiliários Ltda.')->slug(),
            'code' => '319',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Órama Distribuidora De Títulos E Valores Mobiliários S.A.',
            'slug' => str('Órama Distribuidora De Títulos E Valores Mobiliários S.A.')->slug(),
            'code' => '325',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Otimo Sociedade De Credito Direto S.A.',
            'slug' => str('Otimo Sociedade De Credito Direto S.A.')->slug(),
            'code' => '355',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'PI Distribuidora De Títulos E Valores Mobiliários S.A.',
            'slug' => str('PI Distribuidora De Títulos E Valores Mobiliários S.A.')->slug(),
            'code' => '315',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Portopar Distribuidora De Títulos E Valores Mobiliários Ltda.',
            'slug' => str('Portopar Distribuidora De Títulos E Valores Mobiliários Ltda.')->slug(),
            'code' => '306',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'QI Sociedade De Crédito Direto S.A.',
            'slug' => str('QI Sociedade De Crédito Direto S.A.')->slug(),
            'code' => '329',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Terra Investimentos Distribuidora De Títulos E Valores Mobiliários Ltda.',
            'slug' => str('Terra Investimentos Distribuidora De Títulos E Valores Mobiliários Ltda.')->slug(),
            'code' => '307',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'UBS Brasil Corretora De Câmbio, Títulos E Valores Mobiliários S.A.',
            'slug' => str('UBS Brasil Corretora De Câmbio, Títulos E Valores Mobiliários S.A.')->slug(),
            'code' => '015',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Vision S.A. Corretora De Câmbio',
            'slug' => str('Vision S.A. Corretora De Câmbio')->slug(),
            'code' => '296',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Picpay Servicos S.A.',
            'slug' => str('Picpay Servicos S.A.')->slug(),
            'code' => '380',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('banks')->insert([
            'name' => 'Gerencianet Pagamentos Do Brasil',
            'slug' => str('Gerencianet Pagamentos Do Brasil')->slug(),
            'code' => '364',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
