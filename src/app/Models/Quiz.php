<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Quiz extends Model
{
    public function getQuestions(int $id = null)
    {
        $query = DB::table('questions')->select('*');
        if (!is_null($id))
        {
            $query->where('id', '=', $id);
            return $query->get()->first();
        }
        // $query->inRandomOrder();
        return $query->get()->all();
    }
    public function getAnswers(int $id = null)
    {
        $query = DB::table('answers')->select('*');
        if (!is_null($id))
        {
            $query->where('question_id', '=', $id);
        }
        $query->inRandomOrder();
        return $query->get()->all();
    }

}
