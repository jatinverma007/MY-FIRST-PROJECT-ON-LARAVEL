<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class PageController extends Controller
{
    public function about()
    {
        $name ="Jatin verma";
       return view('blog.hello')->with([
           'first' => 'jatin',
            'last' =>' verma'
       ]);
    }


    public function contact()
    {
        return view('blog.contact');
    }
}
