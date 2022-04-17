<?php

namespace Modules\Financial\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Modules\Financial\Models\BankAccountType;

class BankAccountTypeRequest extends FormRequest
{
    public function rules(): array
    {
        return BankAccountType::$rules;
    }
}
