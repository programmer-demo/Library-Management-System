<?php

namespace App\Http\Controllers;

use App\Models\Library;
use App\Models\Student;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $libraries = Library::paginate(10);
        return view('libraries.index' , compact('libraries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('libraries.create');
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
        ]);

        $student = Student::create([
            'id_card' => $request->student_idcard,
            'name' => $request->student_name,
            'gender' => $request->student_gender,
            'faculty' => $request->student_faculty,
        ]);
        $library = Library::create([
            'student_id' => $student->id,
        ]);
        return redirect()->route('library.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $library = Library::find($id);
        return view('libraries.edit' , compact('library'));
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

        $library = Library::find($id);

        $library->student->update([
            'id_card' => $request->student_idcard,
            'name' => $request->student_name,
            'gender' => $request->student_gender,
            'faculty' => $request->student_faculty,
        ]);
        return redirect()->route('library.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $library = Library::find($id);
        if($library->student){
            $library->student->delete();
            $library->delete();
        }
        return redirect()->route('library.index')->with('success' , 'Library Deleted Successfully');
    }
}
