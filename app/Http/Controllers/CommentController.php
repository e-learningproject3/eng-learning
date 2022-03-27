<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Lesson;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function comment(Request $request)
    {

        if (Auth::id()) {
            if (Auth::user()->usertype == 0) {
                $comment = new Comment;
                $comment->body = $request->get('body');
                $comment['user_id'] = auth()->user()->id;
                $post = Lesson::find($request->get('id_lesson'));
                $post->comments()->save($comment);

                return back();
            } else {
                return redirect()->back();
            }
        } else {
            return redirect('login');
        }
    }

    // REPLY
    // public function reply(Request $request)
    // {
    //     if (Auth::id()) {
    //         if (Auth::user()->usertype == 1) {
    //             $reply = new Comment();
    //             $reply->body = $request->get('comment_body');
    //             $reply['user_id'] = auth()->user()->id;
    //             $reply->parent_id = $request->get('comment_id');
    //             $post = Lesson::find($request->get('id_lesson'));

    //             $post->comments()->save($reply);

    //             return back();
    //         } else {
    //             return redirect()->back();
    //         }
    //     } else {
    //         return redirect('login');
    //     }
    // }
}
