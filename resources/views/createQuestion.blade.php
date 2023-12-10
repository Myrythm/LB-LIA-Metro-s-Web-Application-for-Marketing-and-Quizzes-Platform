@extends('layouts.main')

@section('container')
    <div class="container">
        <h1>Questions</h1>

        <form action="/dashboard/quiz/{{ $quiz->id }}" method="post">
            @method('patch')
            @csrf

            <div class="form-group">
                <label for="title">Quiz Title:</label>
                <input type="text" id="title" name="title" class="form-control" value="{{ old('name', $quiz->title) }}" required>
            </div>
            <p>Program</p>
                        <select class="form-select mb-3" aria-label="Default select example" name="program_id">
                            @foreach ($programs as $program)
                            @if(old('program_id', $quiz->program_id) == $program->id)
                            <option value="{{ $program->id }}" selected>{{ $program->program_name }}</option>
                            @else
                            <option value="{{ $program->id }}">{{ $program->program_name }}</option>
                            @endif
                            @endforeach
                        </select>
                        
                        <p>Kelas</p>
                        <select class="form-select mb-3" aria-label="Default select example" name="kelas_id">
                            @foreach($kelass as $kelas)
                            @if(old('kelas_id', $quiz->kelas_id) == $kelas->id)
                            <option value="{{ $kelas->id }}" selected>{{ $kelas->kelas_name }}</option>
                            @else
                            <option value="{{ $kelas->id }}">{{ $kelas->kelas_name }}</option>
                            @endif
                            @endforeach
                        </select>

            <!-- Other quiz settings can be added here -->

            <hr>

            <h3>Add Questions:</h3>

            <div class="questions">
                <div class="question">
                    <div class="form-group">
                        <label for="question_1">Question 1:</label>
                        <input type="text" id="question_1" name="questions[0][text]" class="form-control" required>
                    </div>

                    <!-- Options for the question -->
                    <div class="form-group">
                        <hr>
                        <div class="options">
                            <div class="option">
                                <label>Option 1</label>
                                <input type="text" name="questions[0][options][0][text]" class="form-control" required>
                            </div>
                            <div class="option">
                                <label>Option 2</label>
                                <input type="text" name="questions[0][options][1][text]" class="form-control" required>
                            </div>
                            <div class="option">
                                <label>Option 3</label>
                                <input type="text" name="questions[0][options][2][text]" class="form-control" required>
                            </div>
                            <div class="option">
                                <label>Option 4</label>
                                <input type="text" name="questions[0][options][3][text]" class="form-control" required>
                            </div>
                            <div class="option">
                                <label>Select correct answer:</label>
                                <select name="questions[0][correct_answer]" class="form-select">
                                    <option value="0">Option 1</option>
                                    <option value="1">Option 2</option>
                                    <option value="2">Option 3</option>
                                    <option value="3">Option 4</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                        

                <!-- Add more question fields here -->
            </div>

            <button type="button" id="addQuestion" class="btn btn-primary">Add Another Question</button>

            <button type="submit" class="btn btn-success">Add and Save Questions</button>
        </form>
    </div>

    <script>
        document.getElementById('addQuestion').addEventListener('click', function() {
            const questionsContainer = document.querySelector('.questions');
            const questionCount = questionsContainer.querySelectorAll('.question').length;

            const newQuestion = document.createElement('div');
            newQuestion.classList.add('question');
            newQuestion.innerHTML = `
                <hr>
                <div class="form-group">
                    <label for="question_${questionCount + 1}">Question ${questionCount + 1}:</label>
                    <input type="text" id="question_${questionCount + 1}" name="questions[${questionCount}][text]" class="form-control" required>
                </div>
                
                <div class="form-group">
                    <hr>
                    <div class="options">
                        <div class="options">
                            <div class="option">
                                <label>Option 1</label>
                                <input type="text" name="questions[${questionCount}][options][0][text]" class="form-control" required>
                            </div>
                            <div class="option">
                                <label>Option 2</label>
                                <input type="text" name="questions[${questionCount}][options][1][text]" class="form-control" required>
                            </div>
                            <div class="option">
                                <label>Option 3</label>
                                <input type="text" name="questions[${questionCount}][options][2][text]" class="form-control" required>
                            </div>
                            <div class="option">
                                <label>Option 4</label>
                                <input type="text" name="questions[${questionCount}][options][3][text]" class="form-control" required>
                            </div>
                            <div class="option">
                                <label>Select correct answer:</label>
                                <select name="questions[${questionCount}][correct_answer]" class="form-select">
                                    <option value="0">Option 1</option>
                                    <option value="1">Option 2</option>
                                    <option value="2">Option 3</option>
                                    <option value="3">Option 4</option>
                                </select>
                            </div>
                        </div>
                        <!-- Add more option fields here -->
                    </div>
                </div>
            `;

            questionsContainer.appendChild(newQuestion);
        });
    </script>
@endsection