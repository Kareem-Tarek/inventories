<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model, Relations\BelongsTo};
use Spatie\Activitylog\{LogOptions, Traits\LogsActivity};


class Price extends Model
{
    use LogsActivity, HasFactory;

    protected $guarded = [];

    /**
     * @return BelongsTo
     */
    public function product() : BelongsTo
    {
        return $this->BelongsTo(Product::class);
    }

    /**
     * @return LogOptions
     */
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->useLogName('Price')
            ->logAll()
            ->setDescriptionForEvent(fn (string $eventName) => "This price has been {$eventName}");
    }
}
