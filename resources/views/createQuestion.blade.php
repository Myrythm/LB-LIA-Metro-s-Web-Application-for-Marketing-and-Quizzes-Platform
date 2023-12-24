@extends('layouts.main')

@section('container')

<form method="POST" action="/dashboard/quiz/{{ $quiz->id }}/question">
    @csrf
    <!-- Form fields for adding a question -->
    <div class="form-group">
        <label for="question">Question</label>
        <input type="text" class="form-control" id="question" name="question">
    </div>

    <!-- Hidden input for quiz ID -->
    <input type="hidden" name="quiz_id" value="{{ $quiz->id }}">

    <button type="submit" class="btn btn-primary my-3">Submit</button>
</form>
@endsection