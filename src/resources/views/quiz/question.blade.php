@extends('quiz.template')
@section('content')
    <div class="pt-3 pt-md-5 text-center">
        <h1 class="display-5">{{$title OR 'Em um dia, que série melhor representa você?'}}</h1>

        <form action="{{url('/quiz/question/' . ($question->id + 1))}}" class="p-4 pb-5 text-left">
            <p class="lead">Pergunta: {{ $question->id }} - {{ $question->description }}</p>
            @foreach ($answers as $answer)
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="answer" id="answer-{{$answer->id}}" value="{{$answer->series_id}}">
                    <label class="form-check-label" for="answer-{{$answer->id}}">{{$answer->description}}</label>
                </div>
            @endforeach        
        </form>


        <a href="{{url('/quiz/question/1')}}" type="button" class="btn btn-lg px-5 btn-primary">Recomeçar</a>
    </div>
@endsection