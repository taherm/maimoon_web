<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;

use App\Models\Bush;
use Illuminate\Http\Request;

class BushController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bushes = Bush::all();
        return view('backend.bush.index', compact('bushes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.bush.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Bush $bush)
    {
        $validatedData = $request->validate([
            'car' => 'required|min:2',
        ]);

        $data = $request->except('_token');
        $bush = $bush->create($data);
        session()->flash('message', 'Part Added!');
        return redirect(route('bush.create'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bush  $bush
     * @return \Illuminate\Http\Response
     */
    public function show(Bush $bush)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bush  $bush
     * @return \Illuminate\Http\Response
     */
    public function edit(Bush $bush)
    {
        return view('backend.bush.edit', compact('bush'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bush  $bush
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bush $bush)
    {
        $validatedData = $request->validate([
            'car' => 'required|min:2'
        ]);

        // Retrieve all records from request.
        $data = $request->except('_token', '_method', 'action');

        //store portfolio based on condition.

        $bush->update($data);
        session()->flash('message', 'Part Updated!');
        return redirect(route('index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bush  $bush
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bush $bush)
    {
        // Delete record from DB.
        $bush->delete();

        session()->flash('error', 'Part Deleted!');
        return redirect(route('index'));
    }

    public function category_bush(Request $request)
    {
        $bushes = Bush::where('category', $request->category)->get();
        $category = $request->category;
        return view('backend.bush.index', compact('bushes', 'category'));
    }
}
