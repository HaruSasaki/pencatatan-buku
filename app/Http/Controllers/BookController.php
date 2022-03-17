<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        return view('list', ['books'=>$books]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'author'=>'required',
            'publisher'=>'required',
            'synopsis'=>'required',
            'filename'=>'required',
            'filename.*'=> 'image|mimes:jpeg,png,jpg|max:2048']);

        $imageName = time().'.'.$request->filename->extension();
        $request->filename->move(public_path().'/image/', $imageName);
        $book = Book::create([
            'title'=>$request['title'],
            'author'=>$request['author'],
            'publisher'=>$request['publisher'],
            'synopsis'=>$request['synopsis'],
            'filename'=>$imageName]);

        return back()->with('success', 'Book has been added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::findorFail($id);
        $books = Book::all();
        return view('detail', ["book"=>$book, 'books'=>$books]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::findorFail($id);
        return view('edit', ['book'=>$book]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'=>'required',
            'author'=>'required',
            'publisher'=>'required',
            'synopsis'=>'required',
            'filename'=>'required',
            'filename.*'=> 'image|mimes:jpeg,png,jpg|max:2048']);
        $imageName = time().'.'.$request->filename->extension();
        $request->filename->move(public_path().'/image/', $imageName);

        $book = Book::find($id)->update([
            'title'=>$request['title'],
            'author'=>$request['author'],
            'publisher'=>$request['publisher'],
            'synopsis'=>$request['synopsis'],
            'filename'=>$imageName]);
        return redirect('list')->with('success', 'Book has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();
        return redirect('list')->with('success', 'Book has been deleted.');
    }
}
