<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Questions;
use App\Answers;

class QuestionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('questions.index',
                                [
                                    'questions' => Questions::all()
                                ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('questions.create',
                                [
                                    'questions' => Questions::all()
                                ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validData = $request->validate(
                            [
                                'title' => 'required|min:3',
                                'description' => 'required|min:10'
                            ]
                          );

        $questions = new Questions();

        $questions->title = $validData['title'];
        $questions->description = $validData['description'];

        $questions->save();

        return redirect('/questions');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Questions $question)
    {
        return view('questions.show', ['question' => $question]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $questions = Questions::findOrFail($id);
        return view('questions.edit', ['question' => $questions]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        $validData = $request->validate(
                            [
                                'title' => 'required|min:3',
                                'description' => 'required|min:10'
                            ]
                          );

        $question = Questions::findOrFail($id);
        
        $question->title = $validData['title'];
        $question->description = $validData['description'];

        $question->save();

        return redirect('/questions');

    }

    /**
     * Show the form for erasing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $question = Questions::findOrFail($id);
        return view('questions.delete', ['question' => $question]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $question = Questions::findOrFail($id); 
        $question->answers()->delete();
        $question->delete();

        return redirect('/questions');
    }
}
