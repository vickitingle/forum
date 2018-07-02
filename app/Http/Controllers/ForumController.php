<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Library\Forums;

/**
 * Forum Listing
 * @author Vicki Tingle <vicki.tingle@gmail.com>
 */
class ForumController extends Controller
{
    protected $forums;
    public function __construct(
        Forums $forums
    ) {
        $this->forums = $forums;
    }

    public function index(Request $request, $id)
    {
        $forum = $this->forums->getById($id);
        return view('forum/list', [
            'forum' => $forum,
            'posts' => null
        ]);
    }
}