<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    public function getAnswers()
    {
    }
    public function getSeries()
    {
        return [
            'a' => 'House of Cards',
            'b' => 'Game of Thrones',
            'c' => 'Lost',
            'd' => 'Breaking Bad',
            'e' => 'Silicon Valley'
        ];
    }
}
