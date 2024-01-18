<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class studentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $keywords = $request->keywords;
        $lineCount = 4;

        if (strlen($keywords)) {
            $data = student::where('digits', 'like', "%$keywords%")
                ->orWhere('name', 'like', "%$keywords%")
                ->orWhere('favorite', 'like', "%$keywords%")
                ->paginate($lineCount);
        } else {
            $data = student::orderBy('digits', 'desc')->paginate($lineCount);
        }

        return view('students.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('digits', $request->digits);
        Session::flash('name', $request->name);
        Session::flash('favorite', $request->favorite);

        $request->validate([
            'digits' => 'required|numeric|unique:students,digits',
            'name' => 'required',
            'favorite' => 'required',
        ], [
            'digits.required' => "The 'ID' field is required",
            'digits.numeric' => "The 'ID' field only accepts numbers",
            'digits.unique' => 'This ID is already taken',
            'name.required' => "The 'Name' field is required",
            'favorite.required' => "The 'Favorite Concept' field is required",
        ]);

        $data = [
            'digits' => $request->digits,
            'name' => $request->name,
            'favorite' => $request->favorite,
        ];

        student::create($data);

        return redirect()->to('students')->with('success', 'The student was successfully added');
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
        $data = student::where('digits', $id)->first();
        return view('students.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'favorite' => 'required',
        ], [
            'name.required' => "The 'Name' field is required",
            'favorite.required' => "The 'Favorite Concept' field is required",
        ]);

        $data = [
            'name' => $request->name,
            'favorite' => $request->favorite,
        ];

        student::where('digits', $id)->update($data);

        return redirect()->to('students')->with('success', 'The update was successfully stored');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        student::where('digits', $id)->delete();
        return redirect()->to('students')->with('success', 'Deletion was successful');
    }
}
