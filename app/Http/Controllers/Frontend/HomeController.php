<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Quiz;

/**
 * Class HomeController
 * @package App\Http\Controllers\Frontend
 */
class HomeController extends Controller
{
    /**
     * Quizzes per page
     *
     * @var int
     */
    protected $pagination = 20;

    /**
     * Show quizzes list
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('frontend.home.index', [
            'quizzes' => Quiz::orderBy('created_at', 'DESC')
                ->paginate($this->pagination)
        ]);
    }
}
