<?php

namespace App\Http\Controllers;

use App\Models\Option;
use App\Models\Quiz;
use App\Models\Score;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ScoreController extends Controller
{
    public function displayResult($quizId){
        $user = Auth::user();

    // Retrieve the specific question
        $quiz = Quiz::findOrFail($quizId);

        // Fetch the user's score for the given question
        $score = Score::where('user_id', $user->id)
                    ->where('quiz_id', $quizId)
                    ->first();
        //dd($score);
        if (!$score) {
            return redirect()->back()->with('warning', 'You have not taken this quiz yet.');
        }
        return view('quizResult', compact('quiz', 'score'));
    }
    /**
     * Display a listing of the resource.
     */
    public function index($quizId)
    {
        $user = Auth::user();

        $quiz = Quiz::findOrFail($quizId);
        $score = Score::where('user_id', $user->id)
                      ->where('quiz_id', $quizId)
                      ->first();
        if($score){
            return redirect()->back()->with('warning', 'You already taken this quiz.');
        }else{
        $quiz = Quiz::with('questions.options')->findOrFail($quizId);
        $questions = $quiz->questions;
        $options = $quiz->options;
        //dd($options);
        return view('startQuiz',[
            'quiz'=>$quiz,
            'questions'=>$questions,
            'options' => $options
        ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request, $quizId)
    {
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $quizId)
    {
    // Fetch the authenticated user
    $user = Auth::user();

    // Get all submitted answers
    $answers = $request->input('answers');

    // Initialize variables to track correct answers and total questions
    $totalQuestions = count($answers);
    $correctAnswers = 0;

    foreach ($answers as $questionId => $selectedOptionId) {
        // Fetch the selected option and check if it's correct
        $selectedOption = Option::find($selectedOptionId);

        if ($selectedOption && $selectedOption->is_correct) {
            // If the selected option is correct, increment the correct answers count
            $correctAnswers++;
        }
    }

    // Calculate the score value (for example, as a percentage)
    $scoreValue = ($correctAnswers / $totalQuestions) * 100;

    $roundedScoreValue = round($scoreValue);

    // dd the variables to inspect the data before storing
    // dd([
    //     'quiz_id' => $quizId,
    //     'user_id' => $user->id,
    //     'score_value' => $roundedScoreValue,
    //     'answers' => $answers,
    //     'total_questions' => $totalQuestions,
    //     'correct_answers' => $correctAnswers,
    // ]);

    Score::create([
        'quiz_id' => $quizId,
        'user_id' => $user->id,
        'score_value' => $roundedScoreValue,
    ]);
    $quiz = Quiz::findOrFail($quizId);
    $score = Score::where('user_id', $user->id)
                  ->where('quiz_id', $quizId)
                  ->first();
    
    return view('quizResult', compact('quiz', 'score'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Score $score)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Score $score)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Score $score)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Score $score)
    {
        //
    }
    
}
