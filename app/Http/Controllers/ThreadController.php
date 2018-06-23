<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Thread;

class ThreadController extends Controller
{
    public function index(){
      
        $threads = Thread::all(); 

     /*   $users = \App\User::all(); */
/* 
     dd($threads); */
    /*  foreach($threads as $thread){

        dd($thread -> post -> isi_post);
     }
      */

        return view('/thread/indexthread',['threads' => $threads ]);
      // return view('/thread/indexthread', compact('threads'));
    }


    public function show($id)
    
    {
        
       // $coba=$_POST['id'];       
       // $users = Users::where('id_user', $id) -> get();
       $threads = Thread::find($id);

       $posts = Thread::find($id)->post;

       

       //return response()->json(['data'=>$barangs]);
       return view('thread.detailthread',['thread' => $threads , 'posts' => $posts]); 
    }


    public function create(){

     
        return view('thread.createthread');
     
    }



    public function store(Request $request){
      
        $threads = new Thread;

        $threads->judul_thread = $request->judulThread;
        $threads->isi_thread = $request->isiThread;
        $threads->user_id = $request->id_user;

        $threads->save();
       

        return redirect('thread')->with('message', 'Data telah di Insert');
      // return view('/thread/indexthread', compact('threads'));
    }
}
