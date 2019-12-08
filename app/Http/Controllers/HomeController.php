<?php

namespace App\Http\Controllers;
use App\Models\Tutorial;
use App\Models\QuizTopic;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tutorials = Tutorial::Paginate(100);
        $quiz_topics = QuizTopic::orderBy('created_at','desc')->Paginate(10);
        return view('home.index', compact('tutorials', 'quiz_topics'));
    }

}
