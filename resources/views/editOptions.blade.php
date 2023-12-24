@extends('layouts.main')

@section('container')

        
    <h1>Edit Options for Question: {{ $question->question_text }}</h1>

    <form method="POST" action="/dashboard/quiz/{{ $quiz->id }}/question/{{ $question->id }}/option/{{ $question->id }}">
        @csrf
        @method('PUT')
        @foreach($question->options as $option)
        <div class="form-group">
            <label class="label my-1" for="option_{{ $option->id }}">Option {{ $loop->iteration }}</label>
            <input type="text" class="form-control" id="option_{{ $option->id }}" name="optionText_{{ $option->id }}" value="{{ $option->option_text }}">
        </div>
            <div>
                <input class="radio mb-3" type="radio" id="option_{{ $option->id }}" name="correct_option" value="{{ $option->id }}"
                    {{ $option->is_correct ? 'checked' : '' }}>
                <label for="option_{{ $option->id }}">Correct</label>
            </div>
        @endforeach

        <button type="submit" class="btn btn-primary my-3">Update</button>
    </form>


@endsection