@extends('layouts.main')
@section('container')
    

<div class="col-lg-8">

    <div class="row">
        <div class="card bg-light mb-3"><br>
            <div class="col">
                <table class="table table-borderless">
                    <td style="width: 90%"><a href="/" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i> Back to list</a><td>
                    <td style="width: 5%"><a href="/edit/{{ $book->id }}" class="btn btn-sm btn-warning"><i class="fa-solid fa-pen-to-square" style="color: white"></i></a></td>
                    <td style="width: 5%"><form method="POST" action="{{ url('detail', $book->id ) }}">
                        @csrf
                        @method('DELETE')
                    <button class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></button>
                    </form></td>
                </table>
                <div class="d-flex justify-content-start">
                </div>
                <div class="d-flex justify-content-end">
                </div>
            </div>
            <div class="card-header">
            <p><i class="fa-solid fa-book"></i> Book Detail</p>
            </div>
            <div class="card-body">
              <h6 class="card-title">Title</h6>
              <p class="card-text">{{ $book->title }}</p>
              <h6 class="card-title">Author</h6>
              <p class="card-text">{{ $book->author }}</p>
              <h6 class="card-title">Publisher</h6>
              <p class="card-text">{{ $book->publisher }}</p>
              <h6 class="card-title">Synopsis</h6>
              <p class="card-text">{{ $book->synopsis }}</p>
            </div>
          </div>
    </div>
</div>
@endsection