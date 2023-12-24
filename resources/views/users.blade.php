@extends('layouts.main')

@section('container')

    <h1>Users Table</h1>
    @if (session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
      </div>
    @endif
    <a class="btn btn-primary my-3" href="/users/create" role="button">Create User</a>
    
    
<div class="card">
    <div class="card-body">

      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>
            <th scope="col">Program</th>
            <th scope="col">Kelas</th>
            <th scope="col">Created-At</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
          <tr> 
              <td>{{ $loop->iteration }}</td>
              <td>{{ $user->id }}</td>
              <td>{{ $user->name }}</td>
              <td>{{ $user->email }}</td>
              <td>{{ $user->role->role_name }}
              @if ($user->role->role_name =="Admin" ||$user->role->role_name =="Teacher")
                  <td>-</td>
                  <td>-</td>
              @else
              <td>{{ $user->program->program_name }}</td>
              <td>{{ $user->kelas->kelas_name }}
              @endif
              <td>{{ $user->created_at }}</td>
              <td><a class="badge bg-warning bi-vector-pen" href="/users/{{ $user->id }}/edit" > Edit</a>
                  <form action="users/{{ $user->id }}" method="post" class="d-inline">
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
@endsection