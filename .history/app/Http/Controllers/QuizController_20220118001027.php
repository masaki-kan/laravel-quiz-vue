<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Quiz;

class QuizController extends Controller
{
    public function index(Request $request)
    {
        $category = $request->input('categories');
        if ($category) {
            $category = explode(',', $category);
        } else {
            return [];
        }

        $quiz = ::with(['answer', 'category'])
            ->wherein('quizzes.categories_id', $category)
            ->inRandomOrder()
            ->limit(10)
            ->get();

        return $quiz;
    }
}
