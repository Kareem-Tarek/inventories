<?php

namespace App\Models;

use Illuminate\Database\Eloquent\{Model, Relations\HasMany, Factories\HasFactory};
use Spatie\Activitylog\{LogOptions, Traits\LogsActivity};


class Client extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function product() : HasMany
    {
        return $this->hasMany(Product::class);
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->useLogName('Client')
            ->logAll()
            ->setDescriptionForEvent(fn (string $eventName) => "This client has been {$eventName}");
    }
}
