<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\hasMany;


class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function unit()
    {
        return $this->BelongsTo(Unit::class);
    }

    public function category()
    {
        return $this->BelongsTo(Category::class);
    }

    public function subCategory()
    {
        return $this->BelongsTo(SubCategory::class);
    }

    public function type()
    {
        return $this->BelongsTo(Type::class);
    }

    public function company()
    {
        return $this->BelongsTo(Company::class);
    }

    public function price()
    {
        return $this->hasMany(Price::class);
    }
}
