<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Option;
use App\Models\Program;
use App\Models\Kelas;
use App\Models\Quiz;
use App\Models\Score;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($quizId)
    {
        $user = Auth::user();

        $quiz = Quiz::with('questions.options')->findOrFail($quizId);
        $questions = $quiz->questions;
        $options = $quiz->options;
        $scores = Score::where('quiz_id', $quizId)
                ->with('user') // Assuming you have a relationship defined between Score and User models
                ->get();
        
        return view('QuestionPage',[
            'programs'=> Program::all(),
            'kelass'=>Kelas::all(),
            'quiz'=>$quiz,
            'questions'=>$questions,
            'options' => $options,
            'scores'=>$scores
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($quiz)
    {
        $quiz = Quiz::with('questions')->findOrFail($quiz);
        return view('createQuestion',[
            'quiz'=>$quiz
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $quiz)
    {

        $validatedData = $request->validate([
            'question' => 'required|string|max:255',
            // Add validation rules for other fields if needed
        ]);

        // Store the question for the specified quiz
        $quizModel = Quiz::findOrFail($quiz);

        $question = new Question();
        $question->question_text = $validatedData['question'];
        // Set other attributes as needed
        $question->quiz_id = $quizModel->id;
        $question->save();

            // Create options associated with the question
        $optionsData = [
            ['option_text' => 'Option A', 'is_correct' => true],
            ['option_text' => 'Option B', 'is_correct' => false],
            ['option_text' => 'Option C', 'is_correct' => false],
            ['option_text' => 'Option D', 'is_correct' => false]
        ];

        foreach ($optionsData as $optionData) {
            $option = new Option($optionData);
            $option->question_id = $question->id; // Set the question_id for the option
            $option->save();
        }
        return redirect()->route('view.quiz.show', ['quiz' => $quizModel->id])
            ->with('success', 'Question Has Been Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Question $question, $quiz)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($quizId, $questionId)
    {
        $quiz = Quiz::findOrFail($quizId);
        $question = Question::findOrFail($questionId); // Fetch the specific question
    
        return view('editQuestion', [
            'quiz' => $quiz,
            'question' => $question, // Pass the specific question to the view
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $quiz, $question)
    {
        $validatedData = $request->validate([
            'question' => 'required|string|max:255',
            // Add validation rules for other fields if needed
        ]);

        $questionModel = Question::findOrFail($question);
        $questionModel->question_text = $validatedData['question'];
        // Update other attributes as needed
        $questionModel->save();

        return redirect()->route('view.quiz.show', ['quiz' => $quiz])
            ->with('success', 'Question updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($quiz, $question)
    {
        $questionModel = Question::findOrFail($question);
        // Perform any necessary checks before deletion, if applicable
        $questionModel->options()->delete();
        $questionModel->delete();
    
        return redirect()->route('view.quiz.show', ['quiz' => $quiz])
            ->with('success', 'Question deleted successfully');
    }
    
}
