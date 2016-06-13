<?php

namespace DymaVDomeNet\Http\Controllers;

use Illuminate\Http\Request;

use DymaVDomeNet\Http\Requests;
use Excel;

class PricesController extends Controller
{
    public function getPrice($name, $width)
    {
        Excel::load(public_path() . '/excel/file.xls', function($reader) {
        });

        echo $name . "<br>" . $width;
        return 2;
    }
k
