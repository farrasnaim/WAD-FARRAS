<?php

namespace App\Http\Controllers;

use App\Models\human;
use Illuminate\Http\Request;

class historyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/history');
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
     * @param  \App\Models\human  $human
     * @return \Illuminate\Http\Response
     */
    public function show(human $human)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\human  $human
     * @return \Illuminate\Http\Response
     */
    public function edit(human $human)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\human  $human
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, human $human)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\human  $human
     * @return \Illuminate\Http\Response
     */
    public function destroy(human $human)
    {
        //
    }
}
