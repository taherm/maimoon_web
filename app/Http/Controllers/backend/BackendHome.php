<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Balance;
use App\Models\Part;
use Illuminate\Http\Request;

class BackendHome extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $parts_count = Part::count();
        return view('backend.home', compact('parts_count'));
    }
}
