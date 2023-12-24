@extends('layouts.main')

@section('container')

<form method="POST" action="/dashboard/quiz/{{ $quiz->id }}/question/{{ $question->id }}">
    @csrf
    @method('PUT')
    <!-- Form fields for editing the question -->
    <div class="form-group">
        <label for="question">Question</label>
        <input type="text" class="form-control" id="question" name="question" value="{{ $question->question_text }}">
    </div>
    <!-- Add other fields as needed -->

    <button type="submit" class="btn btn-primary my-3">Update</button>
</form>
@endsection