<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GraduationController extends Controller
{
    public function firstsplash()
    {
        return view('pages.first');
    }

    public function secondsplash()
    {
        return view('pages.second');
    }

    public function thirdsplash()
    {
        return view('pages.third');
    }

    public function fourthsplash()
    {
        return view('pages.fourth');
    }

    public function lastsplash()
    {
        return view('pages.last-phases');
    }
}