<?php

namespace App\Http\Controllers\Parser;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ParserController extends Controller
{
    public function index()
    {
        return view('parser.index');
    }
}
