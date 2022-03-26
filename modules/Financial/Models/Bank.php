<?php

namespace Modules\Financial\Models;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Financial\Database\factories\BankFactory;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Bank extends Model
{
    use HasSlug, HasFactory;

    public static array $rules = [
        'name' => 'required|unique:banks|string|min:3|max:255',
        'code' => 'required|string|size:3',
        'digit' => 'nullable|int|min:1|max:9'
    ];
    public static array $filters = [
        'name' => 'trim|capitalize',
        'code' => 'trim',
        'digit' => 'trim',
    ];
    protected $table = 'banks';
    protected $fillable = [
        'name',
        'code',
        'digit'
    ];
    protected $casts = [
        'name' => 'string',
        'code' => 'string',
        'digit' => 'string'
    ];

    protected static function newFactory(): Factory
    {
        return BankFactory::new();
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }
}

