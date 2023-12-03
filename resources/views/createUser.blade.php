@extends('layouts.main')

@section('container')
    @extends('layouts.sidebar')
    <h1>Create a User</h1>
    <a href="/users" class="btn btn-primary my-4">Back</a>
        <section class="card">
            <div class="card-body">
                <form action="/users" method="POST">
                    @csrf
                    <div class="mb-3">
                        
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="text" class="form-control" id="password"  name="password" value="{{ old('password') }}">
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
                        <option value="{{ $kelas->id }}">{{ $kelas->kelas_name }}</option>
                        @endforeach
                    </select>
                    <div>
                        <p>Role</p>
                        <select class="form-select mb-3" aria-label="Default select example" name="role_id">
                            @foreach($roles as $role)
                            <option value="{{ $role->id }}">{{ $role->role_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <button class="btn btn-primary mx-auto" type="submit">Create User</button>
                </form>

            </div>

        </section>
    
@endsection