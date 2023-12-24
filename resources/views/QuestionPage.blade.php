@extends('layouts.main')

@section('container')


<h1>{{ $quiz->title }} Quiz Details</h1>
@if (session()->has('success'))
<div class="alert alert-success" role="alert">
    {{ session('success') }}
  </div>
@endif
<a class="btn btn-primary my-3" href="/dashboard/quiz/{{ $quiz->id }}/question/create" role="button">Add Question</a>
<div class="row">
  <div class="col-lg-6">
    <div class="card">
      <div class="card-body">
        <table class="table">
          <thead>
            <h5 class="card-title">List of Questions</h5>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Question</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($questions as $question)
            <tr> 
              <td>{{ $loop->iteration }}</td>
              <td>{{ $question->question_text }}</td>
              <td><a class="badge bg-warning bi-vector-pen" href='/dashboard/quiz/{{ $quiz->id }}/question/{{ $question->id }}/edit'> Edit Question</a>
                <a class="badge bg-success bi-vector-pen" href='/dashboard/quiz/{{ $quiz->id }}/question/{{ $question->id }}/option/{{ $question->id }}/edit'> Edit Option</a>
                    <form action="/dashboard/quiz/{{ $quiz->id }}/question/{{ $question->id }}" method="post" class="d-inline">
                      @method('delete')
                      @csrf
                      <button class ="badge bg-danger border-0" onclick="return confirm('Anda Yakin?')"> Delete</button>
                    </form>
                </td>
              
              </tr>
              @endforeach
              
          </tbody>
        </table>
        <!-- End Default Table Example -->
      </div>
    </div>
  </div>
  <div class="col-lg-6">
    <div class="card">
      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Program</th>
              <th scope="col">Kelas</th>
              <th scope="col">Score</th>
            </tr>
          </thead>
          <h5 class="card-title">User Scores</h5>
          <tbody>
              @foreach($scores as $score)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $score->user->name }}</td>
                <td>{{ $score->user->program->program_name }}</td>
                <td>{{ $score->user->kelas->kelas_name }}</td>
                <td>{{ $score->score_value }}</td>
              </tr>
              @endforeach
          </tbody>
        </table>
        <!-- End Default Table Example -->
      </div>
    </div>
  </div>
</div>
@endsection