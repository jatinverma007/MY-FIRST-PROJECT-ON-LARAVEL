<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;

class ApiTestController extends Controller
{
    public  function  twitter($tweet)
    {
    $tweeter = new TwitterOAuth(Config::get('services.twitter.consumer_key'),
        Config::get('services.twitter.consumer_secret'),
        'Sh8OKtNCtpmKs0neykyy84nD1',
        '2ElfXmU27VppbgTbNeX28kofzKuGarVvijPyxxoLPEhZqupihO'
    );
        $tweeter->post("statuses/update",array("message" => "hello world"));
    }
}

