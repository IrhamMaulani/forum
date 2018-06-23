@extends('layouts.template_html')

@section('content')
    
<form action="/thread" method="POST">
<div class="form-group">
        <label for="Judul">Judul Thread:</label>
        <input type="text" class="form-control" id="judulThread" name="judulThread">


        <label for="thread">Thread:</label>
        <textarea class="form-control" rows="5" id="comment" name="isiThread"></textarea>
      </div>

      <input type="hidden" name="id_user" value="1">

      @csrf

      <input type="hidden" name="_method" value="POST">
      <button type="submit" class="btn btn-primary" name="submit" value="POST">Submit</button>
    </form>
@endsection