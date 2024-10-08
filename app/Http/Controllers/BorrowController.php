<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Borrow;
use App\Models\Book;

class BorrowController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $borrows = Borrow::get();
        return view('borrows.index' , compact('borrows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $books = Book::where('status' , true)->get();
        return view('borrows.create' , compact('books'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'student_idcard' => 'required',
            'student_name' => 'required',
            'student_gender' => 'required',
            'student_faculty' => 'required',
            'book_id' => 'required',
        ]);

        $borrow = Borrow::create([
            'student_idcard' => $request->student_idcard,
            'student_name' => $request->student_name,
            'student_gender' => $request->student_gender,
            'student_faculty' => $request->student_faculty,
            'book_id' => $request->book_id,
        ]);

        
        $book = Book::find($request->book_id);
        $book->update([
            'borrow_id' => $borrow->id,
            'status' => false
        ]);

        return redirect()->route('borrow.index')->with('success' , 'Student is Borrow Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $books = Book::where('borrow_id' , $id)->get();
        return view('borrows.show' , compact('books' , 'id'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $borrow = Borrow::first();
        return view('borrows.edit' , compact('borrow'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'student_idcard' => 'required',
            'student_name' => 'required',
            'student_gender' => 'required',
            'student_faculty' => 'required',
        ]);

        $borrow = Borrow::find($id);
        $borrow->update([
            'student_idcard' => $request->student_idcard,
            'student_name' => $request->student_name,
            'student_gender' => $request->student_gender,
            'student_faculty' => $request->student_faculty,
        ]);

        return redirect()->route('borrow.index')->with('success' , 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $borrow = Borrow::find($id);
        if($borrow){
            $borrow->delete();
        }
        return redirect()->route('borrow.index')->with('success' , 'Deleted Successfully');
    }

    public function add($id){
        $books = Book::where('status' , true)->get();
        return view('borrows.add' , compact('id' , 'books'));
    }

    public function add_submit(Request $request ,$id){
        $request->validate([
            'book_id' => 'required',
        ]);

        $book = Book::find($request->book_id);
        $book->update([
            'borrow_id' => $id,
            'status' => false,
        ]);
        return redirect()->route('borrow.show' , $id)->with('success' , 'Student is Borrow Successfully');
    }

    public function return($id , Request $request){
        $book = Book::find($request->book_id);
        $book->update([
            'borrow_id' => 0,
            'status' => true,
        ]);
        return redirect()->route('borrow.show' , $id)->with('success' , 'Student is Borrow Successfully');
    }
}
