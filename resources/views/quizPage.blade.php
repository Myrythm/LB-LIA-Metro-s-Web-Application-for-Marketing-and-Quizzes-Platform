@extends('layouts.main')

@section('container')

    <div class="pagetitle">
    <h1>Your Quizzes</h1>
    </div><!-- End Page Title -->
    <hr>
        @if (session()->has('warning'))
        <div class="alert alert-warning" role="alert">
        {{ session('warning') }}
    </div>
    @endif
    @can('admin')
    <a class="btn btn-primary my-3" href="/dashboard/quiz/create" role="button">Create Quiz</a>
    @endcan
    <section class="section">
    <div class="row">
        <div class="col">
        @foreach ($quizzes as $quiz)
            <div class="card">
                <div class="card-body">
                    <h2 class="my-2">{{ $quiz->title }}</h2>
                    @if ($quiz->program)
                        <p>Program: {{ $quiz->program->program_name }}</p>
                    @endif
                
                    @if ($quiz->kelas)
                        <p>Kelas    : {{ $quiz->kelas->kelas_name }}</p>
                    @endif   
                    <a class="btn btn-primary my-3" href="/dashboard/quiz/{{ $quiz->id }}/start" role="button">Start</a>
                    <a class="btn btn-primary my-3" href="/dashboard/quiz/{{ $quiz->id }}/result" role="button">View Result</a>
                    @can('admin')
                    <a class="btn bg-warning bi-gear-fill" href="/dashboard/quiz/{{ $quiz->id }}/question"> Details</a>
                    @endcan
                </div>
                {{-- <button type="button" class="btn btn-primary  mx-auto my-1">Start</button> --}}
            </div>
        </div>
    </div>
    @endforeach
@endsection