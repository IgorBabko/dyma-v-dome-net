<?php

namespace DymaVDomeNet\Http\Controllers;

use Illuminate\Http\Request;

use DymaVDomeNet\Http\Requests;

class ChimneysController extends Controller
{
    public function index()
    {
        return view('chimneys.index');
    } 
}
