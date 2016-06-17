<?php

namespace DymaVDomeNet\Http\Controllers;

use Illuminate\Http\Request;
use DymaVDomeNet\Http\Requests;
use DymaVDomeNet\Photo;
use Nicolaslopezj\Searchable\SearchableTrait;

class PhotosController extends Controller
{
    public function index()
    {
        $photos = Photo::orderBy('created_at', 'desc')->paginate();
        return view('photos.index', compact('photos'));
    } 

    public function show(Photo $photo)
    {
        return view('photos.show', compact('photo'));
    }

    public function search(Request $request)
    {
        $photos = Photo::search($request->query)->get();
        $count    = count($photos);

        return view('photos.index', compact('photos'));
    }
}
