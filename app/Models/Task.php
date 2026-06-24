<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    protected $table = "Tasks";
    protected $primaryKey = "Id";

    const CREATED_AT = "CreationDateTime";
    const UPDATED_AT = "EditDateTime";

    public function internalEvent(): BelongsTo {
        return $this->belongsTo(InternalEvent::class,"InternalEventId");
    }


}
