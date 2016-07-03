<?php

namespace DymaVDomeNet\Http\Controllers\Admin;

use Illuminate\Http\Request;

use DymaVDomeNet\Http\Requests;
use DymaVDomeNet\Http\Controllers\Controller;
use DymaVDomeNet\Page;
use DymaVDomeNet\Http\Middleware\Authenticate;

class PagesController extends Controller
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
        $pages = Page::orderBy('created_at', 'desc')->paginate(10);

        return view('admin.pages.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
   //         'desc' => 'required',
            'content' => 'required',
        ]);

        $page = Page::create($request->all());

        if ($request->file('image')) {
            $this->saveImage($request, $page);
        }

        $this->flashData($request, [
            'type' => 'success',
            'message' => 'Статья успешно добавлена!'
        ]);

        return redirect('/admin/pages');
    }

    protected function saveImage(Request $request, Page $page, $replace = false)
    {
        $imageName = $page->id . '.' . $request->file('image')->getClientOriginalExtension();

        if ($replace) {
            \Storage::delete(public_path() . $page->image);
        }

        $request->file('image')->move(public_path() . '/images/uploads/', $imageName);
    
        $page->image = '/images/uploads/' . $imageName;
        $page->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        return view('admin.pages.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        $this->validate($request, [
            'name' => 'required',
            //'desc' => 'required',
            'content' => 'required',
        ]);

        if ($request->file('image')) {
            $this->saveImage($request, $page, true);
        }

        $page->title = $request->title;
        $page->text = $request->text;

        $page->save();

        $this->flashData($request, [
            'type' => 'success',
            'message' => 'Статья успешно обновлена!'
        ]);

        return redirect('/admin/pages');
    }

    protected function flashData(Request $request, $data = [])
    {
        foreach ($data as $key => $value) {
            $request->session()->flash($key, $value);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        Page::destroy($id); 

        $this->flashData($request, [
            'type' => 'success',
            'message' => 'Статья успешно удалена!',
        ]);

        return back();
    }

    public function search(Request $request)
    {
        $pages = Page::search($request->queryString)->get();
        $searchCount    = count($pages);

        return view('admin.pages.index', compact('pages', 'searchCount'));
    }
}
