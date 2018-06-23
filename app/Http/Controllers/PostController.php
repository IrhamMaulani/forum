<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function store(Request $request){
        $post = new Post;

        $post->judul_post = $request->judulPost;
        $post->isi_post = $request->isiPost;
        $post->user_id = $request->id_user;
        $post->thread_id = $request->threadId;

        $post->save();


      /*   return redirect('thread.detailthread'); */
      /* return redirect('thread')->with('message', 'Data telah di Insert'); */
      return redirect()->back()->with('message', 'Data telah di Insert');;
    }
}
