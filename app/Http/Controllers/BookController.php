<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::get();
        return view('books.index' , compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'barcode' => 'required',
            'name' => 'required',
            'author' => 'required',
            'written_in' => 'requrired',
        ]);

        $datetime = date('d-m-y H:i:s' , $request->written_in);

        $book = Book::create([
            'barcode' => $request->barcode,
            'name' => $request->name,
            'author' => $request->author,
            'written_in' => $datetime,
        ]);

        return redirect()->route('book.index')->with('success' , 'Book Created Successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book = Book::find($id);
        return view('books.edit' , compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'barcode' => 'required',
            'name' => 'required',
            'author' => 'required',
            'written_in' => 'requrired',
        ]);

        $datetime = date('d-m-y H:i:s' , $request->written_in);

        $book = Book::find($id);

        $book->update([
            'barcode' => $request->barcode,
            'name' => $request->name,
            'author' => $request->author,
            'written_in' => $datetime,
        ]);

        return redirect()->route('book.index')->with('success' , 'Book Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book = Book::find($id);
        if($book){
            $book->delete();
        }
        return redirect()->route('book.index')->with('success' , 'Book Deleted Successfully');
    }
}
