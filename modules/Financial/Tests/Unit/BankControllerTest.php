<?php

namespace Modules\Financial\Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Financial\Models\Bank;
use Tests\TestCase;

class BankControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testDigitLessThanAllowed()
    {
        $bank = Bank::factory()->make();
        $bank->digit = 0;

        $response = $this->json('POST', route('financial.bank.store'), $bank->toArray());


        $response->assertJsonValidationErrors('digit');
        $response->assertStatus(422);
    }

    public function testDigitGreaterThanAllowed()
    {
        $bank = Bank::factory()->make();
        $bank->digit = 10;

        $response = $this->json('POST', route('financial.bank.store'), $bank->toArray());

        $response->assertJsonValidationErrors('digit');
        $response->assertStatus(422);
    }

    public function testCodeLessThanAllowed()
    {
        $bank = Bank::factory()->make();
        $bank->code = 0;

        $response = $this->json('POST', route('financial.bank.store'), $bank->toArray());

        $response->assertJsonValidationErrors('code');
        $response->assertStatus(422);
    }

    public function testCodeGreaterThanAllowed()
    {
        $bank = Bank::factory()->make();
        $bank->code = 1000;

        $response = $this->json('POST', route('financial.bank.store'), $bank->toArray());

        $response->assertJsonValidationErrors('code');
        $response->assertStatus(422);
    }

    public function testNameNull()
    {
        $bank = Bank::factory()->make();
        $bank->name = null;

        $response = $this->json('POST', route('financial.bank.store'), $bank->toArray());

        $response->assertJsonValidationErrors('name');
        $response->assertStatus(422);
    }


    public function testNameLessThanAllowed()
    {
        $bank = Bank::factory()->make();
        $bank->name = '';

        $response = $this->json('POST', route('financial.bank.store'), $bank->toArray());

        $response->assertJsonValidationErrors('name');
        $response->assertStatus(422);
    }

    public function testNameGreaterThanAllowed()
    {
        $bank = Bank::factory()->make();
        $bank->name = str_repeat('a', 256);

        $response = $this->json('POST', route('financial.bank.store'), $bank->toArray());

        $response->assertJsonValidationErrors('name');
        $response->assertStatus(422);
    }

    public function testNameUnique()
    {
        $bank = Bank::factory()->make();
        $bank->name = 'Bank Of Testing';
        $bank->save();

        $response = $this->json('POST', route('financial.bank.store'), $bank->toArray());

        $response->assertJsonValidationErrors('name');
        $response->assertStatus(422);
    }

    public function testDigitNull()
    {
        $bank = Bank::factory()->make();
        $bank->digit = null;

        $response = $this->json('POST', route('financial.bank.store'), $bank->toArray());

        $response->assertStatus(302);
    }

    public function testCodeNull()
    {
        $bank = Bank::factory()->make();
        $bank->code = null;

        $response = $this->json('POST', route('financial.bank.store'), $bank->toArray());

        $response->assertJsonValidationErrors('code');
        $response->assertStatus(422);
    }
}
