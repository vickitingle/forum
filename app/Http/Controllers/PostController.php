<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Library\Forums;

/**
 * Posts
 * @author Vicki Tingle <vicki.tingle@gmail.com>
 */
class PostController extends Controller
{
    protected $posts;
    public function __construct(
        Forums $forums
    ) {
        $this->forums = $forums;
    }

    public function create(Request $request, $forumId)
    {
        return view('forum/posts/new', [
            'forumId' => $forumId
        ]);
    }
}