<?php

namespace App\Http\Controllers;

use App\assigner;
use Illuminate\Http\Request;

class AssignersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $assigners = assigner::all();
        return view('home', ['assigners' => $assigners]);
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
     * @param  \App\assigner  $assigner
     * @return \Illuminate\Http\Response
     */
    public function show(assigner $assigner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\assigner  $assigner
     * @return \Illuminate\Http\Response
     */
    public function edit(assigner $assigner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\assigner  $assigner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, assigner $assigner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\assigner  $assigner
     * @return \Illuminate\Http\Response
     */
    public function destroy(assigner $assigner)
    {
        //
    }
}
