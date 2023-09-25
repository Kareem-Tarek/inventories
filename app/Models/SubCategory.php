<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model, Relations\HasMany, Relations\BelongsTo};
use Spatie\Activitylog\{Traits\LogsActivity, LogOptions};

class SubCategory extends Model
{
    use LogsActivity, HasFactory;

    protected $guarded = [];

    /**
     * @return BelongsTo
     */
    public function category() : BelongsTo
    {
        return $this->BelongsTo(Category::class);
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
            ->useLogName('SubCategory')
            ->logAll()
            ->setDescriptionForEvent(fn (string $eventName) => "This sub category has been {$eventName}");
    }
}
