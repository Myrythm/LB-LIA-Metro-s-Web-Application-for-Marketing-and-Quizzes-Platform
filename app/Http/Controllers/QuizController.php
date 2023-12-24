<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Option;
use App\Models\Program;
use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuizController extends Controller
{
    public function index(){
        $user = Auth::user(); // Get the logged-in user
        
        if ($user->role_id === 1) {
            // If the user is an admin, fetch all quizzes
            $quizzes = Quiz::all();
        }else{
            // Ensure the user has a grade and class
            if (!$user->program_id || !$user->kelas_id) {
                return redirect()->back()->with('error', 'User is not assigned a grade or class.');
            }
        

        // Retrieve the user's grade and class IDs
        $programId = $user->program_id;
        $kelasId = $user->kelas_id;

        // Fetch quizzes based on the user's grade and class
        $quizzes = Quiz::where('program_id', $programId)
                        ->where('kelas_id', $kelasId)
                        ->get();
        }

        return view("quizPage", compact('quizzes'));
    }

    public function create(){
        return view("createQuiz", [
            'programs'=> Program::all(),
            'kelass'=>Kelas::all()
        ]);
    }

    public function showAvailableQuizzes(Request $request)
    {
        $user = Auth::user(); // Get the logged-in user

        // Ensure the user has a grade and class
        if (!$user->program_id || !$user->kelas_id) {
            return redirect()->back()->with('error', 'User is not assigned a grade or class.');
        }

        // Retrieve the user's grade and class IDs
        $programId = $user->program_id;
        $kelasId = $user->kelas_id;

        // Fetch quizzes based on the user's grade and class
        $quizzes = Quiz::where('program_id', $programId)
                        ->where('kelas_id', $kelasId)
                        ->get();

        return view('dashboard', compact('quizzes'));
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'program_id'=>'required',
            'kelas_id'=>'required'
        ]);
        Quiz::create($validatedData);
        return redirect('dashboard/quiz');
    }

    public function edit(Quiz $quiz){
        return view('createQuestion',[
            'programs'=> Program::all(),
            'kelass'=>Kelas::all(),
            'quiz'=>$quiz
        ]);
    }

    public function update(Request $request, Quiz $quiz){
        $validatedData = $request->validate([
            'title'=> 'required|string|max:255',
            'program_id'=>'required',
            'kelas_id'=>'required',
            'questions' => 'required|array|min:1',
            'questions.*.text' => 'required|string|max:255',
            'questions.*.options' => 'required|array|min:2|max:4',
            'questions.*.options.*.text' => 'required|string|max:255',
            'questions.*.correct_answer'=>'required'

        ]);
        dd($validatedData);
    }
}
