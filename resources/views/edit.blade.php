@extends('layouts.main')
@section('container')

<div class="col-lg-4">
    <div class="d-flex justify-content-end">
      <a href="/" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i> Back to list</a>
    </div><br>
    <h1>Edit Book</h1>
    <form action="{{ url('add', $book->id) }}" method="POST">
        @csrf
        @method('PUT')
      <div class="form-group row">
        <label for="title" class="col-4 col-form-label">Title</label> 
        <div class="col-8">
          <input id="title" name="title" type="text" class="form-control" value="{{ $book->title }}">
        </div>
      </div>
      <div class="form-group row">
        <label for="author" class="col-4 col-form-label">Author</label> 
        <div class="col-8">
          <input id="author" name="author" type="text" class="form-control" value="{{ $book->author }}">
        </div>
      </div>
      <div class="form-group row">
        <label for="publisher" class="col-4 col-form-label">Publisher</label> 
        <div class="col-8">
          <input id="publisher" name="publisher" type="text" class="form-control" value="{{ $book->publisher }}">
        </div>
      </div>
      <div class="form-group row">
        <label for="synopsis" class="col-4 col-form-label">Synopsis</label> 
        <div class="col-8">
          <input id="synopsis" name="synopsis" type="text"class="form-control" value="{{ $book->synopsis }}">
        </div>
      </div> 
      <div class="form-group row">
        <div class="offset-4 col-8">
          <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </form>

</div>

@endsection