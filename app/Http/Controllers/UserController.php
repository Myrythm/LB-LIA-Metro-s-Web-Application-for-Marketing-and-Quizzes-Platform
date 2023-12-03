<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\User;
use App\Models\Program;
use App\Models\Roles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('users', [
            'users'=>User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('createUser', [
            'programs'=> Program::all(),
            'kelass'=>Kelas::all(),
            'roles'=>Roles::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'=>'required|max:255',
            'email'=> 'required|email|unique:users',
            'password'=> 'required|min:5|max:255',
            'program_id'=>'required',
            'kelas_id'=>'required',
            'role_id'=>'required'
        ]);
        if ($request['role_id']==1 || $request['role_id']==2) {
                $validatedData['program_id']=0;
                $validatedData['kelas_id']= 0;
        }

        // if($request['is_teacher'] == "on"){
        //     $validatedData['is_teacher']=1;
        //     $validatedData['program_id']=0;
        //     $validatedData['kelas_id']= 0;
        // }
        // if($request['is_admin'] == "on"){
        //     $validatedData['is_admin']=1;
        //     $validatedData['program_id']=0;
        //     $validatedData['kelas_id']= 0;
        // }
        
        User::create($validatedData);

        return redirect('/users')->with('success', 'User has been created');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('editUser', [
            'programs'=> Program::all(),
            'kelass'=>Kelas::all(),
            'roles'=>Roles::all(),
            'user'=>$user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $rules =[
            'name'=>'required|max:255',
            'program_id'=>'required',
            'kelas_id'=>'required',
            'role_id'=>'required'
        ];
        if($request->email != $user->email){
            $rules['email'] = 'required|email|unique:users';
        }
        
        // if ($request->filled('password')) {
        //     $validatedData['password'] = Hash::make($request->password);
        // } else {
        //     // Remove the password field from the validated data if it's not being updated
        //     // $validatedData['password'] = 'OldPassword';
        // }
        $data = $request->except('password');
        

        $validatedData = $request->validate($rules);
        if ($request['role_id']==1 || $request['role_id']==2) {
            $validatedData['program_id']=0;
            $validatedData['kelas_id']= 0;
        }
        User::where('id', $user->id)->update($validatedData);

        return redirect('/users')->with('success', 'User has been updated');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        User::destroy($user->id);

        return redirect('/users')->with('success', 'User has been deleted');
    }
}
