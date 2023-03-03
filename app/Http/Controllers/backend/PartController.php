<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;

use App\Models\Part;
use Illuminate\Http\Request;

class PartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parts = Part::all();
        return view('backend.part.index', compact('parts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.part.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Part $part)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:2',
        ]);

        $data = $request->except('_token');
        $part = $part->create($data);
        session()->flash('message', 'Part Added!');
        return redirect(route('index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Part  $part
     * @return \Illuminate\Http\Response
     */
    public function show(Part $part)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Part  $part
     * @return \Illuminate\Http\Response
     */
    public function edit(Part $part)
    {
        return view('backend.part.edit', compact('part'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Part  $part
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Part $part)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:2'
        ]);

        // Retrieve all records from request.
        $data = $request->except('_token', '_method', 'action');

        //store portfolio based on condition.

        $part->update($data);
        session()->flash('message', 'Part Updated!');
        return redirect(route('index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Part  $part
     * @return \Illuminate\Http\Response
     */
    public function destroy(Part $part)
    {
        // Delete record from DB.
        $part->delete();

        session()->flash('error', 'Part Deleted!');
        return redirect(route('part.index'));
    }

    public function category_parts(Request $request)
    {
        $parts = Part::where('category', $request->category)->get();
        $category = $request->category;
        return view('backend.part.index', compact('parts', 'category'));
    }
}
