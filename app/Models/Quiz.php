<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Answer;
use App\Models\Category;

class Quiz extends Model
{
    use HasFactory;
    protected $table = 'quizzes'; // テーブル名を指定

    public function answer()
    {
        return $this->hasOne('App\Models\Answer', 'id', 'answers_id');
    }
    public function category()
    {
        return $this->hasOne('App\Models\Category', 'id', 'categories_id');
    }
}
