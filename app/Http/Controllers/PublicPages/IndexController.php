<?php

namespace App\Http\Controllers\PublicPages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $images = [
            url('img/main/main_1.jpg'),
            url('img/main/main_2.jpg'),
            url('img/main/main_3.jpg'),
        ];
        return view('PublicPages.Index', compact('images'));
    }
}
