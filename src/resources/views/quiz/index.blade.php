@extends('quiz.template')

@section('content')
    <div class="pt-3 pt-md-5 text-center">
        <h1 class="display-4">{{$title OR 'Quiz'}}</h1>
        <p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        <button type="button" class="btn btn-lg px-5 btn-primary">Get started</button>
    </div>
@endsection