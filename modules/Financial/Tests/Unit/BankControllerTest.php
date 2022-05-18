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
        $bank = Bank::factory()->make([
            'digit' => 0
        ]);

        $response = $this->json('POST', route('financial.bank.store'), $bank->toArray());


        $response->assertJsonValidationErrorFor('digit');
        $response->assertStatus(422);
    }

    public function testDigitGreaterThanAllowed()
    {
        $bank = Bank::factory()->make([
            'digit' => 10
        ]);

        $response = $this->json('POST', route('financial.bank.store'), $bank->toArray());

        $response->assertJsonValidationErrorFor('digit');
        $response->assertStatus(422);
    }

    public function testCodeLessThanAllowed()
    {
        $bank = Bank::factory()->make([
            'code' => 0
        ]);

        $response = $this->json('POST', route('financial.bank.store'), $bank->toArray());

        $response->assertJsonValidationErrorFor('code');
        $response->assertStatus(422);
    }

    public function testCodeGreaterThanAllowed()
    {
        $bank = Bank::factory()->make([
            'code' => 1000
        ]);

        $response = $this->json('POST', route('financial.bank.store'), $bank->toArray());

        $response->assertJsonValidationErrorFor('code');
        $response->assertStatus(422);
    }

    public function testNullName()
    {
        $bank = Bank::factory()->make([
            'name' => null
        ]);

        $response = $this->json('POST', route('financial.bank.store'), $bank->toArray());

        $response->assertJsonValidationErrorFor('name');
        $response->assertStatus(422);
    }

    public function testNameLessThanAllowed()
    {
        $bank = Bank::factory()->make([
            'name' => ''
        ]);

        $response = $this->json('POST', route('financial.bank.store'), $bank->toArray());

        $response->assertJsonValidationErrorFor('name');
        $response->assertStatus(422);
    }

    public function testNameGreaterThanAllowed()
    {
        $bank = Bank::factory()->make([
            'name' => str_repeat('a', 256)
        ]);

        $response = $this->json('POST', route('financial.bank.store'), $bank->toArray());

        $response->assertJsonValidationErrorFor('name');
        $response->assertStatus(422);
    }

    public function testNameUnique()
    {
        $bank = Bank::factory()->make([
            'name' => 'Bank Of Testing'
        ]);
        $bank->save();

        $response = $this->json('POST', route('financial.bank.store'), $bank->toArray());

        $response->assertJsonValidationErrorFor('name');
        $response->assertStatus(422);
    }

    public function testNullDigit()
    {
        $bank = Bank::factory()->make([
            'digit' => null
        ]);

        $response = $this->json('POST', route('financial.bank.store'), $bank->toArray());

        $response->assertStatus(302);
        $response->assertRedirect(route('financial.bank.index'));
        $this->assertDatabaseHas('banks', $bank->toArray());
    }

    public function testNullCode()
    {
        $bank = Bank::factory()->make([
            'code' => null
        ]);

        $response = $this->json('POST', route('financial.bank.store'), $bank->toArray());

        $response->assertJsonValidationErrorFor('code');
        $response->assertStatus(422);
    }
}
