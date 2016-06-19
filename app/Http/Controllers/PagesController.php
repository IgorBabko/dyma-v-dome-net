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

    public function about()
    {
        return view('pages.about');
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

        \Mail::send('emails.order', $data, function ($message) use ($data) {
            $message->subject('Оформление заказа')
                ->from(env('MAIL_FROM'))
                ->to(env('MAIL_TO'));
        });

        $this->flashData($request, [
            'type' => 'success',
            'message' => 'Заявка успешно оформлена'
        ]);

        return redirect('/order');
    }

    protected function flashData(Request $request, $data = [])
    {
        foreach ($data as $key => $value) {
            $request->session()->flash($key, $value);
        }
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
