<?php

namespace App\Http\Controllers\AdminPages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainImageController extends Controller
{
    public function index()
    {
        $images = [
            url('img/main/main_1.jpg'),
            url('img/main/main_2.jpg'),
            url('img/main/main_3.jpg'),
        ];
        return view('AdminPages.MainImage', compact('images'));
    }
}
