<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Lesson;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    //login
    public function redirect()
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == '0') {

                $teacher = teacher::all();
                return view('user.home', compact('teacher'));
            }
            // else if (Auth::guard('admin') -> id !=null) {
            //     return view('teachers.home');
            // }
            else {
                $teacher = Teacher::count();
                $lesson = Lesson::count();
                $user = User::where('usertype', '=', '0')->count();
                $data = appointment::all();
                $appointment = appointment::count();
                 return view('admin.home', compact('teacher','lesson','data','user','appointment'));
             }
        } else {
            return redirect()->back();
        }
    }

   


    public function index()
    {
        if (Auth::id()) {
            return redirect('home');
        } else {
            $post = Lesson::all();
            $teacher = teacher::all();
            return view('user.home', compact('teacher','post'));
        }
    }

    public function appointment(Request $request)
    {
        $data = new appointment;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->date = $request->date;
        $data->phone = $request->number;
        $data->message = $request->message;
        $data->teacher = $request->teacher;

        $data->status = 'In Progresss';
        if (Auth::id()) {
            $data->user_id = Auth::user()->id;
        } else {
            return redirect('login');
        }
        $data->save();
        return redirect()->back()->with('message', 'Appointment Request Succesful. We will contact with you soon!');
    }


    public function myappointment()
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == 0) {
                $userid = Auth::user()->id;
                $appoint = appointment::where('user_id', $userid)->get();
                return view('user.my_appointment', compact('appoint'));
            }
        } else {
            return redirect()->back();
        }
    }

    public function cancel_appoint($id)
    {
        $data = appointment::find($id);
        $data->delete();
        return redirect()->back();
    }



   
    public function search(Request $request)
    {
         $search = $request->get('search');
        if ( $search != null) {
            $teacher = Teacher::where('name', 'LIKE', '%'.$search.'%') -> get();
            $lesson = Lesson::where('name', 'LIKE', '%'.$search.'%') -> get();


            return view('user.search', compact('teacher', 'lesson'));
        }
        return redirect() -> back();
    }
}
