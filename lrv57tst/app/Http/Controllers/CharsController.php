<?php

namespace App\Http\Controllers;

use App\Nwn2Chars;
use Illuminate\Http\Request;

class CharsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nwn2chars = Nwn2Chars::sortable()
            ->orderby('lvltotal')
            ->paginate(10);

        return view('nwn2chars.index',compact('nwn2chars'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Nwn2Chars  $nwn2Chars
     * @return \Illuminate\Http\Response
     */
    public function show(Nwn2Chars $nwn2Chars)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Nwn2Chars  $nwn2Chars
     * @return \Illuminate\Http\Response
     */
    public function edit(Nwn2Chars $nwn2Chars)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Nwn2Chars  $nwn2Chars
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nwn2Chars $nwn2Chars)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Nwn2Chars  $nwn2Chars
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nwn2Chars $nwn2Chars)
    {
        //
    }
}
