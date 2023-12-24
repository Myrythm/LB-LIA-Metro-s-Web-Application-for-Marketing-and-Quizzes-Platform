@extends('layouts.main')

@section('container')
    <h1> {{ $quiz->title }} Result</h1>
    <h1></h1>
    <h1></h1>
    <h2> Your Score is : {{ $score->score_value }}</h2>
    
    <a class="btn btn-primary my-3" href="/dashboard/quiz" role="button">Return</a>


@endsection()