<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Library\Forums;

/**
 * Main forums index
 * @author Vicki Tingle <vicki.tingle@gmail.com>
 */
class IndexController extends Controller
{
    protected $forums;
    public function __construct(
        Forums $forums
    ) {
        $this->forums = $forums;
    }

    public function index()
    {
        $forums = $this->forums->getAllForums();
        return view('index', [
            'forums' => $forums
        ]);
    }
}