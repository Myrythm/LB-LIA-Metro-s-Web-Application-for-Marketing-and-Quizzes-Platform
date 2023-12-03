<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuizController extends Controller
{
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

    public function create(Request $request){
        return view('createQuestion');
    }
}
