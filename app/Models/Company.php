<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model, Relations\HasMany};
use Spatie\Activitylog\{LogOptions, Traits\LogsActivity};

class Company extends Model
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
            ->useLogName('Company')
            ->logAll()
            ->setDescriptionForEvent(fn (string $eventName) => "This company has been {$eventName}");
    }
}
