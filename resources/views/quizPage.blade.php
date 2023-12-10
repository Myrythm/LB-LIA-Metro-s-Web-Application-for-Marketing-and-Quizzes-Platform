@extends('layouts.main')

@section('container')
    @extends('layouts.sidebar')
    <div class="pagetitle">
    <h1>Your Quizzes</h1>
    </div><!-- End Page Title -->
    <a class="btn btn-primary my-3" href="/dashboard/quiz/create" role="button">Create Quiz</a>


    <section class="section">
    <div class="row">
        <div class="col">
        @foreach ($quizzes as $quiz)
            <div class="card">
                <div class="card-body">
                    <h2>{{ $quiz->title }}</h2>
                    @if ($quiz->program)
                        <p>Program: {{ $quiz->program->program_name }}</p>
                    @endif
                
                    @if ($quiz->kelas)
                        <p>Kelas    : {{ $quiz->kelas->kelas_name }}</p>
                    @endif   
                    <button type="button" class="btn btn-primary  mx-auto my-1">Start</button>
                    <a class="btn bg-warning bi-vector-pen" href="/dashboard/quiz/{{ $quiz->id }}/edit">Questions</a>
                </div>
                {{-- <button type="button" class="btn btn-primary  mx-auto my-1">Start</button> --}}
            </div>
        </div>
    </div>
    @endforeach
@endsection