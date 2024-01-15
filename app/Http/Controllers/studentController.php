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
    public function index()
    {
        $data = student::orderBy('id', 'desc')->get();
        return view('index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('id', $request->id);
        Session::flash('name', $request->name);
        Session::flash('favorite', $request->favorite);

        $request->validate([
            'id' => 'required|numeric|unique:students,id',
            'name' => 'required',
            'favorite' => 'required',
        ], [
            'id.required' => "The 'ID' field is required",
            'id.numeric' => "The 'ID' field only accepts numbers",
            'id.unique' => 'This ID is already taken',
            'name.required' => "The 'Name' field is required",
            'favorite.required' => "The 'Favorite Concept' field is required",
        ]);

        $data = [
            'id' => $request->id,
            'name' => $request->name,
            'favorite' => $request->favorite,
        ];

        student::create($data);

        return redirect()->to('/')->with('success', 'The student was successfully added');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
