<?php

namespace App\Http\Controllers;

use App\Thread;
use Illuminate\Http\Request;

class ThreadController extends Controller
{
    public function show(Thread $thread)
    {
        return view('thread.show', ['thread' => $thread]);
    }
}
