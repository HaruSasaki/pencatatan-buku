@extends('layouts.main')
@section('container')

<div class="col-lg-8">
  <div class="row">
    <div class="card bg-light mb-3"><br>
      <div class="d-flex justify-content-start">
        <a href="/" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i> Back to list</a>
      </div><br>
      <div class="card-header" align="center">
      <h4>Edit Book</h4>
      </div>
      <form action="{{ url('edit', $book->id) }}" method="POST">
          @csrf
          @method('PUT')
          <table class="table table-responsive">
            <tr>
              <td>
              <div class="form-group row">
                <label for="title" class="col-4 col-form-label">Title</label> 
                <div class="col-8">
                  <input id="title" name="title" type="text" class="form-control" value="{{ $book->title }}">
                </div>
              </div>
              </td>
            </tr>
            <tr>
              <td>
              <div class="form-group row">
                <label for="author" class="col-4 col-form-label">Author</label> 
                <div class="col-8">
                  <input id="author" name="author" type="text" class="form-control" value="{{ $book->author }}">
                </div>
              </div>
              </td>
            </tr>
            <tr>
              <td>
              <div class="form-group row">
                <label for="publisher" class="col-4 col-form-label">Publisher</label> 
                <div class="col-8">
                  <input id="publisher" name="publisher" type="text" class="form-control" value="{{ $book->publisher }}">
                </div>
              </div>
              </td>
            </tr>
            <tr>
              <td>
              <div class="form-group row">
                <label for="synopsis" class="col-4 col-form-label">Synopsis</label> 
                <div class="col-8">
                  <input id="synopsis" name="synopsis" type="text"class="form-control" value="{{ $book->synopsis }}">
                </div>
                <td>
            </tr>
          </table>
          <div class="form-group row">
            <div class="offset-4 col-8">
              <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </div> 
      </form>
  </div>
  </div>
  </div>

@endsection