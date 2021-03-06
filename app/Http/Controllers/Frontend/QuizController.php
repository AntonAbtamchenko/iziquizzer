<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Quiz\CreateRequest;
use App\Models\Quiz;

/**
 * Class QuizController
 *
 * @package App\Http\Controllers\Frontend
 */
class QuizController extends Controller
{

    /**
     * Render view for quiz creation
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('frontend.quiz.create');
    }

    /**
     * Store quiz and redirect to view for questions and answers creation
     *
     * @param CreateRequest $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function store(CreateRequest $request)
    {
        $quizData = $request->input('Quiz');
        $quiz = new Quiz($quizData);
        $quiz->setAttribute('user_id', auth()->user()->id);
        $quiz->save();

        return redirect()
            ->route(
                'question.bulk.create',
                [
                    'quiz' => $quiz->id,
                    'questionsCount' => $request->input('questionsCount'),
                    'answersCount' => $request->input('answersCount')
                ]
            );
    }
}
