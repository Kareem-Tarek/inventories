<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model};
use Spatie\Activitylog\{LogOptions, Traits\LogsActivity};

class Invoice extends Model
{
    use LogsActivity, HasFactory;

    protected $guarded = [];

    /**
     * @return LogOptions
     */
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->useLogName('Invoice')
            ->logAll()
            ->setDescriptionForEvent(fn (string $eventName) => "This invoice has been {$eventName}");
    }
}
