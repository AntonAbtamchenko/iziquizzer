<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * Class QuestionController
 *
 * @package App\Http\Controllers\Frontend
 */
class QuestionController extends Controller
{
    /**
     * Render view for quiz questions and answers creation
     *
     * @param $quizId
     * @param $questionsCount
     * @param $answersCount
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function createBulk($quizId, $questionsCount, $answersCount)
    {
        abort_if($questionsCount <= 0 || $questionsCount > config('quiz.questions.max'), 403);
        abort_if($answersCount <= 0 || $answersCount > config('quiz.answers.max'), 403);

        return view('frontend.questions.createList', [
            'quiz' => $quizId,
            'questionsCount' => $questionsCount,
            'answersCount' => $answersCount
        ]);
    }

    public function storeBulk(Request $request, $quizId)
    {

    }
}
