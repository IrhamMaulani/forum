<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Thread;

class ThreadController extends Controller
{
    public function index(){
      
       /*  $threads = Thread::all(); */

       $users = \App\User::all();


        return view('/thread/indexthread',['threads' => $users ]);
    }
}
