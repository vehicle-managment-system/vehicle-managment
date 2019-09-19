<?php

namespace App\Http\Controllers;

use app\Sample;
use Illuminate\Http\Request;

class SampleController extends Controller
{
    //
    public function detail()
    {
        $sample = Sample::all();
        return view('Request.detailrequest', compact($sample));
    }
}
