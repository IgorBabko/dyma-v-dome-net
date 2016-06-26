<?php

namespace DymaVDomeNet\Http\Controllers;

use Illuminate\Http\Request;
use DymaVDomeNet\Http\Requests;
use DymaVDomeNet\Briquette;
use Nicolaslopezj\Searchable\SearchableTrait;

class BriquettesController extends Controller
{
    public function index()
    {
        Session::put('type', 'briquettes');

        return view('briquettes.index');
    } 
    
    public function catalog()
    {
        $briquettes = Briquette::orderBy('created_at', 'desc')->paginate(10);

        return view('briquettes.catalog', compact('briquettes'));
    }

/*    public function showByType($type)
    {
        $chimneys = Chimney::whereType($type)->orderBy('created_at', 'desc')->paginate(10);

        return view('chimneys.showByType', compact('chimneys'));
    } */

   /* public function prices($type)
    {
        $prices = Price::whereType($type)->get(); 
        return view('briquettes.prices', compact('prices')); 
   } */

    public function search(Request $request)
    {
        $briquettes = Briquette::search($request->queryString)->get();
        $searchCount    = count($briquettes);

        return view('briquettes.index', compact('briquettes', 'searchCount'));
    }
}
