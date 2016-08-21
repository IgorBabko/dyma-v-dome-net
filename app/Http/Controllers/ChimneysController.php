<?php

namespace DymaVDomeNet\Http\Controllers;

use DymaVDomeNet\Chimney;
use Illuminate\Http\Request;
use Session;

class ChimneysController extends Controller
{
    public function index()
    {
        Session::put('type', 'chimneys');

        return view('chimneys.index');
    }

    public function catalog()
    {
        return view('chimneys.catalog');
    }

    public function prices()
    {
        $prices = scandir(public_path() . '/images/prices/chimneys');

        array_shift($prices);
        array_shift($prices);

        return view('chimneys.prices', compact('prices'));
    }

    public function showByType($type)
    {
        $chimneys = Chimney::whereType($type)->orderBy('created_at', 'desc')->paginate(10);

        \Excel::load('excel/0.5.xlsx', function ($reader) {

            var_dump('it\'s working!');
            // Getting all results
            // $results = $reader->get();

            // ->all() is a wrapper for ->get() and will work the same
            // $results = $reader->all();

            dd($reader->toArray());

        });

        dd($chimneys);

        return view('chimneys.showByType', compact('type', 'chimneys'));
    }

    public function show($type, Chimney $chimney)
    {
        return view('chimneys.show', compact('type', 'chimney'));
    }

    public function search(Request $request)
    {
        $chimneys = Chimney::search($request->queryString)->get();
        $searchCount = count($chimneys);

        return view('chimneys.showByType', compact('chimneys', 'searchCount'));
    }
}
