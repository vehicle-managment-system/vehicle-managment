<?php

namespace App\Http\Controllers;

use App\Requestt;
use App\Sample;
use Illuminate\Http\Request;

class RequesttsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('Requests.makerequest');
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
     * @param  \App\Requestt  $requestt
     * @return \Illuminate\Http\Response
     */
    public function show(Requestt $requestt)
    {
        //
        return view('Requests.viewrequest');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Requestt  $requestt
     * @return \Illuminate\Http\Response
     */
    public function edit(Requestt $requestt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Requestt  $requestt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Requestt $requestt)
    {
        //TODO

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Requestt  $requestt
     * @return \Illuminate\Http\Response
     */
    public function destroy(Requestt $requestt)
    {
        //
    }
    public function detail()
    {
        $samples = Sample::all();
        return view('Requests.detailrequest',  ['samples' => $samples]);
    }
}
