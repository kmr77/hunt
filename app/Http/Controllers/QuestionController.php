<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $questions=Question::all();
        $user=auth()->user();
        return view('question.index', compact('questions', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('question.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $inputs=request()->validate([
            'category_num'=>'required|max:1',
            'question'=>'required|max:500',
            'answer'=>'required|max:300',
        ]);

        $question=new Question();
        $question->category_num=$inputs['category_num'];
        $question->question=$inputs['question'];
        $question->answer=$inputs['answer'];
        $question->user_id=auth()->user()->id;
        $question->is_deleted=0;
        $question->save();
        return redirect()->route('question.create')->with('message', '投稿を作成しました');;
    }

    /**
     * Display the specified resource.
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Question $question)
    {
        //
    }
}
