<?php

namespace App\Models;

use Illuminate\Database\Eloquent\{Model, Relations\BelongsTo};
use Spatie\Activitylog\{LogOptions, Traits\LogsActivity};

class ExportedProduct extends Model
{
    use LogsActivity;

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
            ->useLogName('Exported Product')
            ->logAll()
            ->setDescriptionForEvent(fn (string $eventName) => "This exported product has been {$eventName}");
    }
}
