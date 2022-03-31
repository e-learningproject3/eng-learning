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
    public function lesson()
    {

        if (Auth::id()) {
            if (Auth::user()->usertype == 1) {
                // if () {
                $data = Lesson::all();
                $teacher = teacher::all();
                $topic = Topic::all();

                return view('admin.post.index', compact('data', 'teacher', 'topic'));
                // }
            } else {
                return redirect()->back();
            }
        } else {
            return redirect('login');
        }
    }

    public function create()
    {
        $teacher = teacher::all();
        $topic = Topic::all();

        return view('admin.post.create', compact('teacher', 'topic'));
    }

    public function store(Request $request)
    {

        $data = new Lesson;
        $data->name = $request->title;
        $data->content = $request->body;
        $image = $request->image;
        if ($image) {
            $imagename = time() . '.' . $image->getClientoriginalExtension();
            $request->image->move('image', $imagename);
            $data->image = $imagename;
        }

        $file = $request->file;
        $filename = time() . '.' . $file->getClientoriginalExtension();
        $request->file->move('file', $filename);
        $data->file = $filename;

        $video = $request->video;
        $videoname = time() . '.' . $video->getClientoriginalExtension();
        $request->video->move('file', $videoname);
        $video->video = $videoname;

        $data->teacher = $request->teacher;
        $data->topic = $request->topic;

        $data->type = $request->get('type');
        $data->level = $request->get('level');

        $data->save();
        return redirect()->back()->with('message', 'Lesson Add Succesful!');
        // if (Auth::id()) {
        //     $data->user_id = Auth::user()->id;
        // } else {
        //     return redirect('login');
        // }

    }

    public function lesson_details($id)
    {
        $data = Lesson::find($id);
        $teacher = Teacher::all();
        return view('admin.post.lesson_details', compact('data', 'teacher'));
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
        return view('admin.post.edit', compact('data', 'teacher', 'topic'));
    }

    public function editlesson(Request $request, $id)
    {
        $data = Lesson::find($id);
        $data->name = $request->title;
        $data->teacher = $request->teacher;
        $data->topic = $request->topic;
        $data->content = $request->body;
        $image = $request->file;
        if ($image) {
            $imagename = time() . '.' . $image->getClientoriginalExtension();
            $request->file->move('image', $imagename);
            $data->image = $imagename;
        }
        $data->save();
        return redirect()->back()->with('message', 'Lesson Update Successfully!');
    }


    // public function news()
    // {
    //     $data = Lesson::where('topic', '=', '1')->get();
    //     return view('user.post.post', compact('data'));
    // }

    public function news()
    {
        return view('user.post.post');
    }

    public function skills()
    {
        return view('user.skill.skill');
    }

    public function grammar()
    {

        return view('user.grammar.grammar');
    }

    public function vocubulary()
    {

        return view('user.vocubulary.vocubulary');
    }

    public function business()
    {
        $data = Lesson::where('topic', '=', 'business')->get();
        return view('user.post.business', compact('data'));
    }

    public function details_post($id)
    {
        $comment = Comment::all();
        $data = Lesson::find($id);
        return view('user.post.details', compact('data', 'comment'));
    }


    //SKILLS
    //listening
    public function listening()
    {
        $data = Lesson::where('type', '=', 'skill - listening')->get();
        return view('user.skill.listening', compact('data'));
    }

    public function elementary()
    {
        // $data = Lesson::where('level', '=', 'elementary')->get();
        $data = Lesson::select('*')
            ->where([
                ['type', '=', 'skill - listening'],
                ['level', '=', 'elementary']
            ])
            ->get();
        return view('user.post.index', compact('data'));
    }

    public function pre_elementary()
    {
        // $data = Lesson::where('level', '=', 'pre_elementary')->get();
        $data = Lesson::select('*')
            ->where([
                ['type', '=', 'skill - listening'],
                ['level', '=', 'pre_elementary']
            ])
            ->get();
        return view('user.post.index', compact('data'));
    }

    public function intermediate()
    {
        // $data = Lesson::where('level', '=', 'intermediate')->get();
        $data = Lesson::select('*')
        ->where([
            ['type', '=', 'skill - listening'],
            ['level', '=', 'intermediate']
        ])
        ->get();
        return view('user.post.index', compact('data'));
    }

    public function upper_intermediate()
    {
        // $data = Lesson::where('level', '=', 'upper_intermediate')->get();
        $data = Lesson::select('*')
        ->where([
            ['type', '=', 'skill - listening'],
            ['level', '=', 'upper_intermediate']
        ])
        ->get();
        return view('user.post.index', compact('data'));
    }

    public function advanced()
    {
        // $data = Lesson::where('level', '=', 'advanced')->get();
        $data = Lesson::select('*')
        ->where([
            ['type', '=', 'skill - listening'],
            ['level', '=', 'advanced']
        ])
        ->get();
        return view('user.post.index', compact('data'));
    }
    // listening
    //reading
    public function reading()
    {
        return view('user.skill.reading');
    }

    public function elementary_reading()
    {
        // $data = Lesson::where('level', '=', 'elementary')->get();
        $data = Lesson::select('*')
        ->where([
            ['type', '=', 'skill - reading'],
            ['level', '=', 'elementary']
        ])
        ->get();
        return view('user.post.index', compact('data'));
    }

    public function pre_elementary_reading()
    {
        // $data = Lesson::where('level', '=', 'pre_elementary')->get();
        $data = Lesson::select('*')
        ->where([
            ['type', '=', 'skill - reading'],
            ['level', '=', 'pre_elementary']
        ])
        ->get();
        return view('user.post.index', compact('data'));
    }

    public function intermediate_reading()
    {
        // $data = Lesson::where('level', '=', 'intermediate')->get();
        $data = Lesson::select('*')
        ->where([
            ['type', '=', 'skill - reading'],
            ['level', '=', 'intermediate']
        ])
        ->get();
        return view('user.post.index', compact('data'));
    }

    public function upper_intermediate_reading()
    {
        // $data = Lesson::where('level', '=', 'upper_intermediate')->get();
        $data = Lesson::select('*')
        ->where([
            ['type', '=', 'skill - reading'],
            ['level', '=', 'upper_intermediate']
        ])
        ->get();
        return view('user.post.index', compact('data'));
    }

    public function advanced_reading()
    {
        // $data = Lesson::where('level', '=', 'advanced')->get();
        $data = Lesson::select('*')
        ->where([
            ['type', '=', 'skill - reading'],
            ['level', '=', 'advanced']
        ])
        ->get();
        return view('user.post.index', compact('data'));
    }
    //speaking
    public function speaking()
    {
        return view('user.skill.speaking');
    }

    public function elementary_speaking()
    {
        // $data = Lesson::where('level', '=', 'elementary')->get();
        $data = Lesson::select('*')
        ->where([
            ['type', '=', 'skill - speaking'],
            ['level', '=', 'elementary']
        ])
        ->get();
        return view('user.post.index', compact('data'));
    }

    public function pre_elementary_speaking()
    {
        // $data = Lesson::where('level', '=', 'pre_elementary')->get();
        $data = Lesson::select('*')
        ->where([
            ['type', '=', 'skill - speaking'],
            ['level', '=', 'pre_elementary']
        ])
        ->get();
        return view('user.post.index', compact('data'));
    }

    public function intermediate_speaking()
    {
        // $data = Lesson::where('level', '=', 'intermediate')->get();
        $data = Lesson::select('*')
        ->where([
            ['type', '=', 'skill - speaking'],
            ['level', '=', 'intermediate']
        ])
        ->get();
        return view('user.post.index', compact('data'));
    }

    public function upper_intermediate_speaking()
    {
        // $data = Lesson::where('level', '=', 'upper_intermediate')->get();
        $data = Lesson::select('*')
        ->where([
            ['type', '=', 'skill - speaking'],
            ['level', '=', 'upper_intermediate']
        ])
        ->get();
        return view('user.post.index', compact('data'));
    }

    public function advanced_speaking()
    {
        // $data = Lesson::where('level', '=', 'advanced')->get();
        $data = Lesson::select('*')
        ->where([
            ['type', '=', 'skill - speaking'],
            ['level', '=', 'advanced']
        ])
        ->get();
        return view('user.post.index', compact('data'));
    }
    //writing
    public function writing()
    {
        return view('user.skill.writing');
    }

    public function elementary_writing()
    {
        // $data = Lesson::where('level', '=', 'elementary')->get();
        $data = Lesson::select('*')
        ->where([
            ['type', '=', 'skill - writing'],
            ['level', '=', 'elementary']
        ])
        ->get();
        return view('user.post.index', compact('data'));
    }

    public function pre_elementary_writing()
    {
        // $data = Lesson::where('level', '=', 'pre_elementary')->get();
        $data = Lesson::select('*')
        ->where([
            ['type', '=', 'skill - writing'],
            ['level', '=', 'pre_elementary']
        ])
        ->get();
        return view('user.post.index', compact('data'));
    }

    public function intermediate_writing()
    {
        // $data = Lesson::where('level', '=', 'intermediate')->get();
        $data = Lesson::select('*')
        ->where([
            ['type', '=', 'skill - writing'],
            ['level', '=', 'intermediate']
        ])
        ->get();
        return view('user.post.index', compact('data'));
    }

    public function upper_intermediate_writing()
    {
        // $data = Lesson::where('level', '=', 'upper_intermediate')->get();
        $data = Lesson::select('*')
        ->where([
            ['type', '=', 'skill - writing'],
            ['level', '=', 'upper_intermediate']
        ])
        ->get();
        return view('user.post.index', compact('data'));
    }

    public function advanced_writing()
    {
        // $data = Lesson::where('level', '=', 'advanced')->get();
        $data = Lesson::select('*')
        ->where([
            ['type', '=', 'skill - writing'],
            ['level', '=', 'advanced']
        ])
        ->get();
        return view('user.post.index', compact('data'));
    }


    // vocubulary
    public function elementary_vocub()
    {
        // $data = Lesson::where('level', '=', 'elementary')->get();
        $data = Lesson::select('*')
        ->where([
            ['type', '=', 'vocubulary'],
            ['level', '=', 'elementary']
        ])
        ->get();
        return view('user.post.index', compact('data'));
    }

    public function pre_elementary_vocub()
    {
        // $data = Lesson::where('level', '=', 'pre_elementary')->get();
        $data = Lesson::select('*')
        ->where([
            ['type', '=', 'vocubulary'],
            ['level', '=', 'pre_elementary']
        ])
        ->get();
        return view('user.post.index', compact('data'));
    }

    public function intermediate_vocub()
    {
        // $data = Lesson::where('level', '=', 'intermediate')->get();
        $data = Lesson::select('*')
        ->where([
            ['type', '=', 'vocubulary'],
            ['level', '=', 'intermediate']
        ])
        ->get();
        return view('user.post.index', compact('data'));
    }

    public function upper_intermediate_vocub()
    {
        // $data = Lesson::where('level', '=', 'upper_intermediate')->get();
        $data = Lesson::select('*')
        ->where([
            ['type', '=', 'vocubulary'],
            ['level', '=', 'upper_intermediate']
        ])
        ->get();
        return view('user.post.index', compact('data'));
    }

    public function advanced_vocub()
    {
        // $data = Lesson::where('level', '=', 'advanced')->get();
        $data = Lesson::select('*')
        ->where([
            ['type', '=', 'vocubulary'],
            ['level', '=', 'advanced']
        ])
        ->get();
        return view('user.post.index', compact('data'));
    }

    //grammar
    public function elementary_grammar()
    {
        // $data = Lesson::where('level', '=', 'elementary')->get();
        $data = Lesson::select('*')
        ->where([
            ['type', '=', 'grammar'],
            ['level', '=', 'elementary']
        ])
        ->get();
        return view('user.post.index', compact('data'));
    }

    public function pre_elementary_grammar()
    {
        // $data = Lesson::where('level', '=', 'pre_elementary')->get();
        $data = Lesson::select('*')
        ->where([
            ['type', '=', 'grammar'],
            ['level', '=', 'pre_elementary']
        ])
        ->get();
        return view('user.post.index', compact('data'));
    }

    public function intermediate_grammar()
    {
        // $data = Lesson::where('level', '=', 'intermediate')->get();
        $data = Lesson::select('*')
        ->where([
            ['type', '=', 'grammar'],
            ['level', '=', 'intermediate']
        ])
        ->get();
        return view('user.post.index', compact('data'));
    }

    public function upper_intermediate_grammar()
    {
        // $data = Lesson::where('level', '=', 'upper_intermediate')->get();
        $data = Lesson::select('*')
        ->where([
            ['type', '=', 'grammar'],
            ['level', '=', 'upper_intermediate']
        ])
        ->get();
        return view('user.post.index', compact('data'));
    }

    public function advanced_grammar()
    {
        // $data = Lesson::where('level', '=', 'advanced')->get();
        $data = Lesson::select('*')
        ->where([
            ['type', '=', 'grammar'],
            ['level', '=', 'advanced']
        ])
        ->get();
        return view('user.post.index', compact('data'));
    }
}
