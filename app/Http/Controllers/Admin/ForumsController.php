<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Library\Forums;

class ForumsController extends Controller
{
    protected $forums;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        Forums $forums
    ) {
        $this->middleware('auth');
        $this->forums = $forums;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forums = $this->forums::all();
        return view('admin/forums', [
            'forums' => $forums,
            'messages' => false,
            'messageType' => null
        ]);
    }

    public function create()
    {
        return view('admin/forums/new');
    }

    public function save(Request $request)
    {
        $data = $request->input();
        $forum = new Forums();
        foreach ($data as $key => $value) {
            $forum->$key = $value;
        }
        $forum->created_at = time();
        $forum->updated_at = time();
        $forum->save();

        return view('admin/forums', [
            'messages' => 'Successfully created new forum : ' . $forum->name,
            'messageType' => 'success'
        ]);
    }
}
