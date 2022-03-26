<?php

namespace Modules\Financial\Http\Requests;

use Elegant\Sanitizer\Laravel\SanitizesInput;
use Illuminate\Foundation\Http\FormRequest;
use Modules\Financial\Models\Bank;

class BankRequest extends FormRequest
{
    use SanitizesInput;

    public function rules(): array
    {
        $rules = Bank::$rules;
        $rules['code'] .= '|unique:banks,code,' . $this->code . ',id,digit,' . $this->digit;

        return $rules;
    }

    public function filters(): array
    {
        return Bank::$filters;
    }

}
