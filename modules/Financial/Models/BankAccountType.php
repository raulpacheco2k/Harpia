<?php

namespace Modules\Financial\Models;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Financial\Database\factories\BankAccountTypeFactory;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class BankAccountType extends Model
{
    use HasSlug, HasFactory, SoftDeletes;

    public static array $rules = [
        'name' => 'required|string|min:3|max:255',
    ];
    public static array $filters = [
        'name' => 'trim|capitalize',
    ];
    protected $table = 'bank_account_types';
    protected $fillable = [
        'name'
    ];
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'slug' => 'string',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime'
    ];

    protected static function newFactory(): Factory
    {
        return BankAccountTypeFactory::new();
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }
}
