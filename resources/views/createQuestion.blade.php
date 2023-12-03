@extends('layouts.main')

@section('container')
<h1>Create Quiz</h1>

<form action="/save-quiz" method="POST" id="quizForm">
    @csrf <!-- Add CSRF token for Laravel, if using Laravel -->

    <label for="quiz_name">Quiz Name:</label><br>
    <input type="text" id="quiz_name" name="quiz_name"><br><br>

    <div id="questionsContainer">
        <div class="question">
            <input type="text" name="questions[]" placeholder="Enter question text"><br>

            
            <input type="text" name="choices[0][]" placeholder="Choice 1">
            <input type="radio" name="correct_answer[0]" value="0">

            <input type="text" name="choices[0][]" placeholder="Choice 2">
            <input type="radio" name="correct_answer[0]" value="1">
        </div>
    </div>

    <button type="button" id="addQuestion">Add Question</button><br><br>

    <input type="submit" value="Save Quiz">
</form>
    
@endsection