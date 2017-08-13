<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Quiz;

/**
 * Class Home
 * @package App\Http\Controllers\Frontend
 */
class Home extends Controller
{
    /**
     * Quizzes per page
     *
     * @var int
     */
    protected $pagination = 10;

    /**
     * Show quizzes list
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('frontend.home.index', [
            'quizzes' => Quiz::orderBy('created_at', 'DESC')->paginate($this->pagination)
        ]);
    }
}
