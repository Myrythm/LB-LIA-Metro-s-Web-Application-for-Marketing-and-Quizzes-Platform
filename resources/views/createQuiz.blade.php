@extends('layouts.main')

@section('container')

    <div class="container">
        <h1>Create a New Quiz</h1>

        <form method="POST" action="/dashboard/quiz">
            @csrf

            <div class="form-group">
                <label for="title">Quiz Title:</label>
                <input type="text" id="title" name="title" class="form-control" required>
            </div>

            <p>Program</p>
                <select class="form-select mb-3" aria-label="Default select example" name="program_id">
                    @foreach ($programs as $program)
                    <option value="{{ $program->id }}">{{ $program->program_name }}</option>
                    @endforeach
                </select>

                <p>Kelas</p>
                <select class="form-select mb-3" aria-label="Default select example" name="kelas_id">
                    @foreach($kelass as $kelas)
                    <option value="{{ $kelas->id }}">{{ $kelas->kelas_name }}</option>                        @endforeach
                </select>
            <button type="submit" class="btn btn-success">Create Quiz</button>
        </form>
    </div>
@endsection