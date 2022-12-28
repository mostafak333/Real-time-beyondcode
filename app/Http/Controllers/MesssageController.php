<?php

namespace App\Http\Controllers;

use App\Events\GetRequestEvent;
use Illuminate\Http\Request;

class MesssageController extends Controller
{
    public function index()
    {
        return view('messages.index');
    }
    public function sender()
    {
        return view('messages.sender');
    }
    public function reciver()
    {
        return view('messages.reciver');
    }
    public function send(Request $request)
    {
        event(new GetRequestEvent($request->data));
        return redirect()->back();
    }
}
