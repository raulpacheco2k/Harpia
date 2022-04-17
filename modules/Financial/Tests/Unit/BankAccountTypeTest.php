<?php

namespace Modules\Financial\Tests\Unit;

use Modules\Financial\Models\BankAccountType;
use Tests\TestCase;

class BankAccountTypeTest extends TestCase
{
    public function testNameLessThanAllowedLength()
    {
        $bankAccountType = BankAccountType::factory()->make([
            'name' => 'ab'
        ]);

        $response = $this->json('POST', route('financial.bankAccountType.store'), $bankAccountType->toArray());

        $response->assertJsonValidationErrorFor('name');
        $response->assertStatus(422);
        $response->assertSeeText('The name must be at least 3 characters.');
    }

    public function testNameGreaterThanAllowedLength()
    {
        $bankAccountType = BankAccountType::factory()->make([
            'name' => str_repeat('a', 256)
        ]);

        $response = $this->json('POST', route('financial.bankAccountType.store'), $bankAccountType->toArray());

        $response->assertJsonValidationErrorFor('name');
        $response->assertStatus(422);
        $response->assertSeeText('The name must not be greater than 255 characters.');
    }

    public function testNullName()
    {
        $bankAccountType = BankAccountType::factory()->make([
            'name' => null
        ]);

        $response = $this->json('POST', route('financial.bankAccountType.store'), $bankAccountType->toArray());

        $response->assertJsonValidationErrorFor('name');
        $response->assertStatus(422);
        $response->assertSeeText('The name field is required.');
    }

    public function testEmptyName()
    {
        $bankAccountType = BankAccountType::factory()->make([
            'name' => ''
        ]);

        $response = $this->json('POST', route('financial.bankAccountType.store'), $bankAccountType->toArray());

        $response->assertJsonValidationErrorFor('name');
        $response->assertStatus(422);
        $response->assertSeeText('The name field is required.');
    }

    public function testCreatingAValidBankAccountType()
    {
        $bankAccountType = BankAccountType::factory()->make();

        $response = $this->json('POST', route('financial.bankAccountType.store'), $bankAccountType->toArray());

        $response->assertStatus(302);
        $response->assertRedirect(route('financial.bankAccountType.index'));
        $this->assertDatabaseHas('bank_account_types', $bankAccountType->toArray());
    }
}
