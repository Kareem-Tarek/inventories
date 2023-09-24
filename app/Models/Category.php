<?php

namespace App\Models;

use Illuminate\Database\Eloquent\{Model, Relations\HasMany};
use Spatie\Activitylog\{LogOptions, Traits\LogsActivity};

class Category extends Model
{
    use LogsActivity;

    protected $guarded = [];

    /**
     * @return HasMany
     */
    public function subCategory() : HasMany
    {
        return $this->hasMany(subCategory::class);
    }

    /**
     * @return HasMany
     */
    public function product() : HasMany
    {
        return $this->hasMany(Product::class);
    }

    /**
     * @return LogOptions
     */
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->useLogName( 'Category')
            ->logAll()
            ->setDescriptionForEvent(fn (string $eventName) => "This Category has been {$eventName}");
    }
}
