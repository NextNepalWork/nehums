<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(Request $request)
    {
        $messages=Message::all();
        return view('admin.message.index',compact('messages'));
    }

    public function show($id)
    {
        $message = Message::findOrFail($id);
        return view('admin.message.show',compact('message'));
    }

    public function delete($id)
    {
        $message = Message::findOrFail($id);
        $message->delete();
        return back()->with('message','Message deleted successfully');
    }
}
