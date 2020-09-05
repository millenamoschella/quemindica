<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Comment;
use App\Post;


class CommentController extends Controller
{
    public function create()
    {
        return view('comment.create');
    }



    public function insert(Request $request)
    {
        $comment = new Comment;

        $comment->conteudo = $request->get('conteudo');
        $comment->user_id = Auth::user()->id;
        $comment->post_id = $request->get('post_id');

        $comment->save();
        return back();
    }



    public function delete($comment_id)
    {

        $comment_id = decrypt($comment_id);
        $comment = Comment::find($comment_id);

        $comment->delete();
        return back();
    }
}
