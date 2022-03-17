@extends('layouts.main')
@section('container')

<div class="col-lg-8">
    <div class="row">
        <a href="add" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Add Book</a><br>
    </div><br>
    <div class="row">
        @foreach ($books as $book)
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">{{ $book->title }}</h5>
              <p class="card-text">{{ $book->synopsis }}</p>
              <div class="d-flex justify-content-end">
              <a href="detail/{{ $book->id }}" class="btn btn-primary"><i class="fa-solid fa-circle-info"></i> View Detail</a>
              </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection