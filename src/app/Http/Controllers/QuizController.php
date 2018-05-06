<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;

class QuizController extends Controller
{
    private $quiz;
    public function __construct(Quiz $quiz)
    {
        $this->quiz = $quiz;
    }
    public function index()
    {
        return view('quiz.index');
    }
    public function question(int $id = null)
    {
        if (
            !is_null($id) 
            && ($question = $this->quiz->getQuestions($id))
            && ($answers = $this->quiz->getAnswers($id))
            )
        {
            return view('quiz.question', compact('question', 'answers'));
        }
        
        
        return redirect('/quiz/question/1');
    }
}
