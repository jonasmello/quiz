@extends('quiz.template')

@section('content')
    <div class="pt-3 pt-md-5 text-center">
        <h1 class="display-5">{{$title OR 'Em um dia, que série melhor representa você?'}}</h1>
        <p class="lead">Descubra qual série combina mais com você através de um pequeno quiz:</p>
        <a href="{{url('quiz/question/1')}}" class="btn btn-lg px-5 btn-primary">{{$btnText OR 'Começar'}}</a>
    </div>
@endsection