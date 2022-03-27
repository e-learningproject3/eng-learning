<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function showteacher()
    {
        $data = teacher::all();
        return view('user.teachers', compact('data'));
    }
}
