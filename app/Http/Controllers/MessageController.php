<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class MessageController extends Controller
{
    public function index(Request $request)
    {
        if (Route::is('messages.index')) {
            $messages=Message::where('type','contact')->latest()->get();
        } elseif(Route::is('job.index')) {
            $messages=Message::where('type','job')->latest()->get();
        } elseif(Route::is('volunteer.index')){
            $messages=Message::where('type','volunteer')->latest()->get();
        } elseif(Route::is('admission.index')){
            $messages=Message::where('type','admission')->latest()->get();
        }
        
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
