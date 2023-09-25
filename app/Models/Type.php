<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model, Relations\HasMany};
use Spatie\Activitylog\{Traits\LogsActivity, LogOptions};

class Type extends Model
{
    use LogsActivity, HasFactory;

    protected $guarded = [];

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
            ->useLogName('Type')
            ->logAll()
            ->setDescriptionForEvent(fn (string $eventName) => "This type has been {$eventName}");
    }
}
