<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    protected $table = "tasks";
    protected $primaryKey = "id";

    const CREATED_AT = "creationdatetime";
    const UPDATED_AT = "editdatetime";

    public function internalEvent(): BelongsTo {
        return $this->belongsTo(InternalEvent::class,"internaleventid");
    }


}
