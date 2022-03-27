<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Lesson;
use App\Models\Teacher;
use App\Models\Topic;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LessonController extends Controller
{
    public function lesson() {
       
        if (Auth::id()) {
            if (Auth::user()->usertype == 1) {
                // if () {
                $data = Lesson::all();
                return view('admin.post.index', compact('data'));
                // }
            } else {
                return redirect()->back();
            }
        } else {
            return redirect('login');
        }
        
    }

    public function create() {
        $teacher = teacher::all();
        $topic = Topic::all();

        return view('admin.post.create', compact('teacher','topic'));
    }

    public function store(Request $request)
    {

        $data = new Lesson;
        $data->name = $request->title;
        $data->content = $request->body;
        $image = $request->file;
        if ($image) {
            $imagename = time() . '.' . $image->getClientoriginalExtension();
            $request->file->move('image', $imagename);
            $data->image = $imagename;
        }
        $data->teacher = $request->teacher;
        $data->topic = $request->topic;
        $data->save();
        return redirect()->back()->with('message', 'Lesson Add Succesful!');
        // if (Auth::id()) {
        //     $data->user_id = Auth::user()->id;
        // } else {
        //     return redirect('login');
        // }
       
    }

    public function lesson_details($id) {
        $data = Lesson::find($id);
        return view('admin.post.lesson_details', compact('data'));
    }

    public function deletelesson($id)
    {
        $data = Lesson::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function updatelesson($id)
    {
        $teacher = teacher::all();
        $topic = Topic::all();
        $data = Lesson::find($id);
        return view('admin.post.edit', compact('data','teacher','topic'));
    }

    public function editlesson(Request $request, $id)
    {
        $data = Lesson::find($id);
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


    public function news()
    {
        $data = Lesson::all();
        return view('user.post.post',compact('data'));
    }
    
    public function details_post($id) {
        $comment = Comment::all();
        $data = Lesson::find($id);
        return view('user.post.details', compact('data','comment'));
    }

}
