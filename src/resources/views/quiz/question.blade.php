@extends('quiz.template')
@section('content')
    <div class="pt-3 pt-md-5 text-center">
        <h1 class="main-title">{{$title OR 'Em um dia, que série melhor representa você?'}}</h1>

        <form action="{{$formAction}}" method="post" class="question-form p-4 pb-5 text-left">
            {{ csrf_field() }}
            <p class="lead">Pergunta: {{ $question->id }} - {{ $question->description }}</p>
            @foreach ($userAnswers as $key => $userAnswer)
                <input type="hidden" name="userAnswers[{{$key}}]" value="{{$userAnswer}}">
            @endforeach        
            @foreach ($answers as $answer)
                <div class="form-check py-1">
                    <input class="form-check-input" type="radio" name="answer" id="answer-{{$answer->id}}" value="{{$answer->series_id}}">
                    <label class="form-check-label" for="answer-{{$answer->id}}">{{$answer->description}}</label>
                </div>
            @endforeach        
        </form>

        <a href="{{url('quiz/question/1')}}" class="btn btn-lg px-5 btn-primary">{{$btnText OR 'Recomeçar'}}</a>
    </div>
@endsection