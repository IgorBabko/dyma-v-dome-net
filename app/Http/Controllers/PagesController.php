<?php

namespace DymaVDomeNet\Http\Controllers;

use Illuminate\Http\Request;
use DymaVDomeNet\Order;
use DymaVDomeNet\Http\Requests;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.main');
    } 

    public function order()
    {
        return view('pages.order');
    }

    public function saveOrder(Request $request)
    {
        $this->validate($request, [
            'client_name' => 'required|string',
            'email' => 'email',
            'question' => 'required',
        ]);

        // Order::create($request->all());
        // send email to the admin
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function docs()
    {
        return view('pages.docs');
    }

    public function faq()
    {
        return view('pages.faq');
    }

    public function articles()
    {
        return view('pages.articles');
    }

    public function prices()
    {
        return view('pages.prices');
    }

    public function partners()
    {
        return view('pages.partners');
    }

    public function photos()
    {
        return view('pages.photos');
    }
}
