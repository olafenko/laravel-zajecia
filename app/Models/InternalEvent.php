<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class InternalEvent extends Model
{

    protected $table = "InternalEvents";
    protected $primaryKey = "Id";

    const CREATED_AT = "CreationDateTime";
    const UPDATED_AT = "EditDateTime";


    public function tasks(): HasMany{
        return $this->hasMany(Task::class);
    }

}
