@extends('layouts.main')

@section('container')
    @extends('layouts.sidebar')
    <h1>Edit User</h1>
    <a href="/users" class="btn btn-primary my-4">Back</a>
        <section class="card">
            <div class="card-body">
                <form action="/users/{{ $user->id }}" method="post">
                    @method('patch')
                    @csrf
                    <div class="mb-3">
                        <div class="mb-3">
                        
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}">
                        </div>
                        <p>Program</p>
                        <select class="form-select mb-3" aria-label="Default select example" name="program_id">
                            @foreach ($programs as $program)
                            @if(old('program_id', $user->program_id) == $program->id)
                            <option value="{{ $program->id }}" selected>{{ $program->program_name }}</option>
                            @else
                            <option value="{{ $program->id }}">{{ $program->program_name }}</option>
                            @endif
                            @endforeach
                        </select>
                        
                        <p>Kelas</p>
                        <select class="form-select mb-3" aria-label="Default select example" name="kelas_id">
                            @foreach($kelass as $kelas)
                            @if(old('kelas_id', $user->kelas_id) == $kelas->id)
                            <option value="{{ $kelas->id }}" selected>{{ $kelas->kelas_name }}</option>
                            @else
                            <option value="{{ $kelas->id }}">{{ $kelas->kelas_name }}</option>
                            @endif
                            @endforeach
                        </select>
                        <div>
                            <p>Role</p>
                            <select class="form-select mb-3" aria-label="Default select example" name="role_id">
                                @foreach($roles as $role)
                                @if(old('role_id', $user->role_id) == $role->id)
                                <option value="{{ $role->id }}" selected>{{ $role->role_name }}</option>
                                @else
                                <option value="{{ $role->id }}">{{ $role->role_name }}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>

                    <button class="btn btn-primary mx-auto" type="submit">Update User Info</button>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                    </div>
                    @endif

                </form>

            </div>

        </section>
    
@endsection