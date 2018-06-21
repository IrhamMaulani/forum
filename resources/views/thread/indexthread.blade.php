@extends('layouts.template_html')



@section('content')

<h1>ISI THREAD</h1>

<div class="container">
    
    <table class="table">
      <thead>
        <tr>
          <th>Judul</th>
          <th>Nama User</th>
          <th>Isi</th>
        </tr>
      </thead>
      <tbody>

            @foreach ($threads as $thread )
        <tr>
          <td>{{$thread -> thread -> judul_thread}}</td>
          <td>{{$thread -> user_id }}</td>
          <td>{{$thread -> isi_thread}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  
    
@endsection