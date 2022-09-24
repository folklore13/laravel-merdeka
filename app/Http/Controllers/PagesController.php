<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function homepage(){
        $navbars = ["Home", "About", "Music", "Admin"];
        $albums_front = ["taylor swift", "fearless", "speak now"];
        $albums_middle = ["red", "1989", "reputation"];
        $albums_last = ["lover", "folklore", "evermore"];
        $sosmeds = ["facebook", "whatsapp", "instagram", "github", "twitter"];

        return view('pages.homepage.homepage', [
            'navbars' => $navbars,
            'albums_front' => $albums_front,
            'albums_middle' => $albums_middle,
            'albums_last' => $albums_last,
            'sosmeds' => $sosmeds
        ]);
    }

    public function join(){
        return view('join');
    }
}
