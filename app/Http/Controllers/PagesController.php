<?php

namespace DymaVDomeNet\Http\Controllers;

use Illuminate\Http\Request;

use DymaVDomeNet\Http\Requests;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.main');
    } 
}
