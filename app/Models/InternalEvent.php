<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InternalEvent extends Model
{
    protected $table = "internalevents";
    protected $primaryKey = "id";

    const CREATED_AT = "creationdatetime";
    const UPDATED_AT = "editdatetime";


}
