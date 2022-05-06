<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreThreadRequest;
use App\Models\Channel;
use App\Models\Thread;
use Illuminate\Http\Request;

class ThreadController extends Controller
{
    public function index()
    {
        $threads = Thread::all();
        return view('threads.index', [
            'threads' => $threads
        ]);
    }

    public function create()
    {
        $tags = Channel::all();
        return view('threads.create', [
            'tags' => $tags
        ]);
    }

    public function store(StoreThreadRequest $request)
    {
        Thread::create([
            'title' => $request->title,
            'body' => $request->body,
            'channel_id' => $request->channel,
            'user_id' => auth()->id()
        ]);

        return redirect('/threads');
    }

    public function show(Channel $channel, Thread $thread)
    {
        return view('threads.show', [
            'thread' => $thread
        ]);
    }

    public function edit(Thread $thread)
    {
        //
    }

    public function update(Request $request, Thread $thread)
    {
        //
    }

    public function destroy(Thread $thread)
    {
        //
    }
}
