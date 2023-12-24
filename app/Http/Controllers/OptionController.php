<?php

namespace App\Http\Controllers;

use App\Models\Option;
use App\Models\Question;
use App\Models\Quiz;


use Illuminate\Http\Request;

class OptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Option $option)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($quizId, $question)
    {
        $quiz = Quiz::findOrFail($quizId);
        $questionModel = Question::findOrFail($question);
        $options = $questionModel->options;
    
        return view('editOptions', [
            'question'=>$questionModel,
            'quiz'=>$quiz,
            'option'=>$options
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $quizId, $questionId)
    {
        $question = Question::findOrFail($questionId);
        $options = $question->options;

        foreach ($options as $option) {
            $optionId = $option->id;
            $newOptionText = $request->input('optionText_' . $optionId);
            $isCorrect = $request->input('correct_option') == $optionId;

            // Update option text
            $option->option_text = $newOptionText;
            // Update correct status
            $option->is_correct = $isCorrect;
            //dd($option);
            $option->save();
        }
        return redirect()->route('view.quiz.show', ['quiz' => $quizId])
            ->with('success', 'Options updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Option $option)
    {
        //
    }
}
