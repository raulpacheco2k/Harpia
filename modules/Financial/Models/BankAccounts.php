<?php

namespace Modules\Financial\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Core\Models\User;

class BankAccounts extends Model
{
    use SoftDeletes;

    public static array $rules = [
        'user_id' => 'required|exists:users,id',
        'bank_id' => 'required|exists:banks,id',
        'bank_account_type_id' => 'required|exists:bank_account_types,id',
        'last_four_digits_of_the_card' => 'required|string|size:4',
    ];

    protected $table = 'bank_accounts';

    protected $fillable = [
        'user_id',
        'bank_id',
        'bank_account_type_id',
        'last_four_digits_of_the_card'
    ];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function bank(): HasOne
    {
        return $this->hasOne(Bank::class);
    }

    public function bankAccountType(): HasOne
    {
        return $this->hasOne(BankAccountType::class);
    }
}
