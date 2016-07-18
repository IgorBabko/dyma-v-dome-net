<?php

namespace DymaVDomeNet\Http\Controllers;

use Illuminate\Http\Request;
use DymaVDomeNet\Page;
use DymaVDomeNet\Order;
use DymaVDomeNet\Http\Requests;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.main');
    }

    public function show(Page $page)
    {
        // dd(Page::all());
        // dd($page);
        return view('pages.index', compact('page'));
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

        Order::create($request->all());

        $data = $request->all();
        $data['question'] = str_replace("\n", "<br>", $request->question);

        \Mail::send('emails.order', $data, function ($message) {
            $message->subject('Оформление заказа')
                ->to('i.i.babko@gmail.com');
        });

        $this->flashData($request, [
            'type' => 'success',
            'message' => 'Заявка успешно оформлена'
        ]);

        return redirect('/pages/order');
    }

    protected function flashData(Request $request, $data = [])
    {
        foreach ($data as $key => $value) {
            $request->session()->flash($key, $value);
        }
    }

    public function faq()
    {
        return view('pages.faq');
    }
}
