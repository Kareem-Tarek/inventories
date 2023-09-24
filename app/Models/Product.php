<?php

namespace App\Models;

use Illuminate\Database\Eloquent\{Model, Relations\BelongsTo, Relations\HasMany};
use Spatie\Activitylog\{LogOptions, Traits\LogsActivity};


class Product extends Model
{
    use LogsActivity;

    protected $guarded = [];

    /**
     * @return BelongsTo
     */
    public function unit() : BelongsTo
    {
        return $this->BelongsTo(Unit::class);
    }

    /**
     * @return BelongsTo
     */
    public function category() : BelongsTo
    {
        return $this->BelongsTo(Category::class);
    }

    /**
     * @return BelongsTo
     */
    public function subCategory() : BelongsTo
    {
        return $this->BelongsTo(SubCategory::class);
    }

    /**
     * @return BelongsTo
     */
    public function type() : BelongsTo
    {
        return $this->BelongsTo(Type::class);
    }

    /**
     * @return BelongsTo
     */
    public function company() : BelongsTo
    {
        return $this->BelongsTo(Company::class);
    }

    /**
     * @return HasMany
     */
    public function exportedProduct() : HasMany
    {
        return $this->hasMany(ExportedProduct::class);
    }

    /**
     * @return HasMany
     */
    public function price() : HasMany
    {
        return $this->hasMany(Price::class);
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->useLogName( 'Product')
            ->logAll()
            ->setDescriptionForEvent(fn (string $eventName) => "This product has been {$eventName}");
    }
}
