@extends('layouts.template_html')

@section('content')
    <div>
{{$thread -> created_at}}
<h3> By {{$thread -> user ->name}}</h3>
<h2> Judul {{ $thread -> judul_thread }}</h2>
<h1>isi<br> {{ $thread ->isi_thread}}</h1>

    </div>

<?php $number = 1;?>

    <div>
        @foreach ($posts as $post)
        <br>
        <td>

            {{$number ++}}


        </td>
    
        {{$post -> user ->name}}
        <td>
<br>    
           

            </td>
        
            <td>
isi post
{{$post -> isi_post}}
            </td>
        @endforeach
    </div>


    <div id="form-post">

        <form action="/post" method="POST">
            <div class="form-group">
                    <label for="Judul">Judul Post:</label>
                    <input type="text" class="form-control" id="judulPost" name="judulPost">
            
            
                    <label for="thread">Post:</label>
                    <textarea class="form-control" rows="5" id="comment" name="isiPost"></textarea>
                  </div>
            
                  <input type="hidden" name="id_user" value="1">
                  <input type="hidden" name="threadId" value="{{ $thread -> id }}">
            
                  @csrf
            
                  <input type="hidden" name="_method" value="POST">
                  <button type="submit" class="btn btn-primary" name="submit" value="POST">Submit</button>
                </form>

    </div>
    
@endsection