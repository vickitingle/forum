<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

/**
 * Main forums index
 * @author Vicki Tingle <vicki.tingle@gmail.com>
 */
class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }
}