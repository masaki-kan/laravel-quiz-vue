<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Information extends Model
{
    //ここから追加
    protected $table = 'informations';

    public function getCreatedAtAttribute($date)
    {
        dd($data);
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y/m/d');
    }
}
