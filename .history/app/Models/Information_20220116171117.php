<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Information extends Model
{
    //ここから追加
    protected $table = 'informations';

    protected function serializeDate(DateTimeInterface ,$date)
    {
        return $date->format('Y-m-d H:i:s');;
    }
}
