<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\QuestionOption;
use App\Models\Teacher;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuizController extends Controller
{
    //Quiz
    public function quiz() {
        if (Auth::id()) {
            if (Auth::user()->usertype == 1) {
                // if () {
                $data = Question::all();
                return view('admin.quiz.index');
                // }
            } else {
                return redirect()->back();
            }
        } else {
            return redirect('login');
        }
    }
    public function create() {
        $teacher = Teacher::all();
        // $topic = Topic::all();
        $relations = [
            'topics' => Topic::get()->pluck('title', 'id')->prepend('Please select', ''),
        ];
        $correct_options = [
            'option1' => 'Option #1',
            'option2' => 'Option #2',
            'option3' => 'Option #3',
            'option4' => 'Option #4',
        ];

        return view('admin.quiz.create', compact('teacher','topic', 'correct_options')+ $relations);
    }

    public function store(Request $request)
    {

        $question = Question::create($request->all());

        foreach ($request->input() as $key => $value) {
            if(strpos($key, 'option') !== false && $value != '') {
                $status = $request->input('correct') == $key ? 1 : 0;
                QuestionOption::create([
                    'question_id' => $question->id,
                    'option'      => $value,
                    'correct'     => $status
                ]);
            }
        }
        return redirect()->back()->with('message', 'Lesson Add Succesful!');


       
       
    }

    

    public function deletelesson($id)
    {
        $data = Question::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function updatelesson($id)
    {
        $teacher = teacher::all();
        $topic = Topic::all();
        $data = Question::find($id);
        return view('admin.quiz.edit', compact('data','teacher','topic'));
    }

    public function editlesson(Request $request, $id)
    {
        $data = Question::find($id);
        $data->name = $request->title;
        $data -> teacher = $request -> teacher;
        $data -> topic = $request -> topic;
        $data -> content = $request -> body;
        $image = $request -> file;
        if ($image) {
            $imagename = time() . '.' . $image->getClientoriginalExtension();
            $request->file->move('image', $imagename);
            $data->image = $imagename;
        }
        $data->save();
        return redirect()->back()->with('message', 'Lesson Update Successfully!');
    }
}
