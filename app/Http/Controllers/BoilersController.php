<?php

namespace DymaVDomeNet\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use DymaVDomeNet\Http\Requests;
use DymaVDomeNet\Boiler;
use Nicolaslopezj\Searchable\SearchableTrait;

class BoilersController extends Controller
{
    public function index()
    {
        Session::put('type', 'boilers');

        return view('boilers.index');
    } 
    
    public function catalog()
    {
        $boilers = Boiler::orderBy('created_at', 'desc')->paginate(10);

        return view('boilers.catalog', compact('boilers'));
    }

 /*   public function showByType($type)
    {
        $boilers = Boiler::whereType($type)->orderBy('created_at', 'desc')->paginate(10);

        return view('chimneys.showByType', compact('chimneys'));
    } */

   /* public function prices($type)
    {
        $prices = Price::whereType($type)->get(); 
        return view('boilers.prices', compact('prices')); 
   } */

    public function search(Request $request)
    {
        $boilers = Boiler::search($request->queryString)->get();
        $searchCount    = count($boilers);

        return view('boilers.index', compact('boilers', 'searchCount'));
    }
}
