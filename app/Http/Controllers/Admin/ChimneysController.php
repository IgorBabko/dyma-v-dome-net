<?php

namespace DymaVDomeNet\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DymaVDomeNet\Chimney;
use DymaVDomeNet\Http\Requests;
use DymaVDomeNet\Http\Controllers\Controller;

class ChimneysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chimneys = Chimney::orderBy('created_at', 'desc')->paginate(10);

        return view('admin.chimneys.index', compact('chimneys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.chimneys.create');
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
            'description' => 'required',
            'type' => 'required',
            'img' => 'string'
        ]);

        Chimney::create($request->all());

        return redirect('/admin/chimneys')->with('notify', 'Дымоход успешно добавлен');
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
    public function edit(Chimney $chimney)
    {
        return view('admin.chimneys.edit', compact('chimney'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Chimney::where('id', $id)->update($request->except(['_token', '_method']));

        $request->session()->flash('type', 'success');
        $request->session()->flash('message', 'Дымоход успешно добавлен!');

        return redirect('/admin/chimneys');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
