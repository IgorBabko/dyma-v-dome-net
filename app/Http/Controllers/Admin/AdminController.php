<?php

namespace DymaVDomeNet\Http\Controllers\Admin;

use Illuminate\Http\Request;

use DymaVDomeNet\Http\Requests;
use DymaVDomeNet\Http\Controllers\Controller;

use DymaVDomeNet\Http\Middleware\Authenticate;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware(Authenticate::class);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index'); 
    }
}
