<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Lesson;
use App\Models\Teacher;
use App\Models\Topic;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;

class AdminController extends Controller
{
    // function check(Request $request){
    //     $request -> validate([
    //         'email' => 'required|email|exits:admins,email',
    //         'password' => 
    //     ]);
    // }
    public function addview()
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == 1) {
                
                return view("admin.add_teacher");
            } else {
                return redirect()->back();
            }
        } else {
            return redirect('login');
        }
    }

    public function upload(Request $request)
    {
        $teacher = new teacher;

        $image = $request->file;
        $imagename = time() . '.' . $image->getClientoriginalExtension();
        $request->file->move('teacherimage', $imagename);
        $teacher->image = $imagename;
        
        
        $teacher->name = $request->name;
        $teacher->phone = $request->phone;
        $teacher->email = $request->email;
        $teacher->password = $request->password;

        $teacher->speciality = $request->speciality;


        $teacher->save();
        return redirect()->back()->with('message', 'Teacher Add Successfully!');
    }

    public function showappointment()
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == 1) {
                // if () {
                $data = appointment::all();
                return view('admin.showappointment', compact('data'));
                // }
            } else {
                return redirect()->back();
            }
        } else {
            return redirect('login');
        }
    }

    public function approved($id)
    {
        $data = appointment::find($id);
        $data->status = 'approved';
        $data->save();
        return redirect()->back();
    }

    public function cancelled($id)
    {
        $data = appointment::find($id);
        $data->status = 'cancelled';
        $data->save();
        return redirect()->back();
    }

    public function showteacher()
    {
        $data = teacher::all();
        return view('admin.showteacher', compact('data'));
    }

    public function deleteteacher($id)
    {
        $data = teacher::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function updateteacher($id)
    {
        $data = teacher::find($id);
        return view('admin.updateteacher', compact('data'));
    }

    public function editteacher(Request $request, $id)
    {
        $teacher = teacher::find($id);
        $teacher->name = $request->name;
        $teacher->phone = $request->phone;
        $teacher->email = $request->email;
        $teacher->speciality = $request->speciality;
        $image = $request->file;
        if ($image) {
            $imagename = time() . '.' . $image->getClientoriginalExtension();
            $request->file->move('teacherimage', $imagename);
            $teacher->image = $imagename;
        }

        $teacher->save();
        return redirect()->back()->with('message', 'Teacher Update Successfully!');
    }


    //topic
    public function topic()
    {
        $data = topic::all();
        return view('admin.topic', compact('data'));
    }

    public function deletetopic($id)
    {
        $data = topic::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function addview_topic()
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == 1) {
                return view("admin.add_topic");
            } else {
                return redirect()->back();
            }
        } else {
            return redirect('login');
        }
    }

    public function upload_topic(Request $request)
    {
        $topic = new topic;
        $topic->content = $request->content;
        $topic->save();
        return redirect()->back()->with('message', 'Topic Add Successfully!');
    }

    public function updatetopic($id)
    {
        $data = topic::find($id);
        return view('admin.update_topic', compact('data'));
    }

    public function edittopic(Request $request, $id)
    {
        $topic = topic::find($id);
        $topic->save();
        return redirect()->back()->with('message', 'Topic Update Successfully!');
    }


    //user
    public function user()
    {
        $data = User::where('usertype', '=', '0')->get();
        return view('admin.user', compact('data'));
    }

    
}
