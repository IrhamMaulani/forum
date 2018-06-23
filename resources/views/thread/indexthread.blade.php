@extends('layouts.template_html')



@section('content')

@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif

<h1>ISI THREAD</h1>

<a  class="btn btn-info" href="/thread/create" role="button">Add</a>

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
        <td><a href="/thread/{{$thread ->id}}"> {{$thread ->judul_thread}} </a></td>
          <td>{{$thread ->user->name }}</td>
          <td>{{$thread ->isi_thread}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  
    
@endsection