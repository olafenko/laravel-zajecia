<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class InternalEvent extends Model
{
    //nazwy z malych liter z uwagi na uzywanie postrges'a

    protected $table = "internalevents";
    protected $primaryKey = "id";

    const CREATED_AT = "creationdatetime";
    const UPDATED_AT = "editdatetime";


    public function tasks(): HasMany{
        return $this->hasMany(Task::class);
    }

}
