<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Models\Information;
use Carbon\Carbon;


class Information extends Model
{
    //ここから追加
    protected $table = 'informations';

    public function getCreatedAtAttribute($date)
    {
        // ここの設定はcreated_atのフォーマットの設定です
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y/m/d');
    }
    //ここまで追加
}
