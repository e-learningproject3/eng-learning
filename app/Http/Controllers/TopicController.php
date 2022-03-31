<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    public function topic_view()
    {
        $data = Topic::all();
        return view('admin.topic.index', compact('data'));
    }

    public function create_topic()
    {
        return view('admin.topic.create');
    }

    public function store_topic(Request $request)
    {

        $data = new Topic;
        $data->content = $request->body;
        
        $data->level = $request->get('level');

        $data->type = $request-> get('type');
        $data->save();
        return redirect()->back()->with('message', 'Type Add Succesful!');
        
    }
}
