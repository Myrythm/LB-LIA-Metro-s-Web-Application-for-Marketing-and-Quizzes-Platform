@extends('layouts.main')

@section('container')

        <div class="container mt-5">
            <h1>{{ $quiz->title }}</h1>
            <p>{{ $quiz->description }}</p>
    
            <form method="POST" action="/dashboard/quiz/{{ $quiz->id }}/start">
                @csrf
                @foreach($quiz->questions as $question)
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">{{ $question->question_text }}</h5>
                            <ul class="list-unstyled">
                                @foreach($question->options as $option)
                                    <li>
                                        <label class="form-check">
                                            <input class="form-check-input" type="radio" name="answers[{{ $question->id }}]" value="{{ $option->id }}">
                                            {{ $option->option_text }}
                                        </label>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endforeach
    
                <button type="submit" class="btn btn-primary">Submit Answers</button>
            </form>
        </div>
@endsection()