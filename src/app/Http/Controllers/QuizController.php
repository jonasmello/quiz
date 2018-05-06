<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;

class QuizController extends Controller
{
    private $quiz;
    private $request;
    public function __construct(Quiz $quiz, Request $request)
    {
        $this->quiz = $quiz;
        $this->request = $request;
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
            && (($userAnswer = $this->request->input('answer')) || ($id == 1))
            )
        {
            $userAnswers = $this->request->input('userAnswers');
            $userAnswers = !is_null($userAnswers) ? $userAnswers : [];
            
            if ($userAnswer)
            {
                $userAnswers[($id - 1)] = $userAnswer;
            }
            
            $countQuestions = count($this->quiz->getQuestions());
            $formAction = ($id < $countQuestions ? ($id + 1) : url('/quiz/result'));

            return view('quiz.question', compact('question', 'answers', 'formAction', 'userAnswers'));
        }


        return redirect('/quiz/question/1');
    }
    public function result()
    {

        if ($userAnswer = $this->request->input('answer'))
        {
            $userAnswers = $this->request->input('userAnswers');
            $userAnswers = !is_null($userAnswers) ? $userAnswers : [];
            
            if ($userAnswer)
            {
                $userAnswers[] = $userAnswer;
            }
            
            $countQuestions = count($this->quiz->getQuestions());
            if ($countQuestions == 5)
            {
                $userAnswers = array_count_values($userAnswers);
                asort($userAnswers);
                end($userAnswers);
                $seriesOd = key($userAnswers);
                $seriesWinner = $this->quiz->getSeries($seriesOd);
                return view('quiz.result', compact('seriesWinner'));
            }
        }

        return view('quiz.result');
    }
}
