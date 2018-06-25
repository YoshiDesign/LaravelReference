<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PagesController extends Controller
{
    public function index()
    {
        $title = "Welcome to Laravel";
        return view('pages.index')->with('title', $title);
    }

    public function about()
    {
        $title = "About Page";
        $stuff = array(
            'things' => ["home", "next", "nope"]
        );
        return view('pages.about')->with($stuff);
    }

    public function services()
    {
        $data = array(
            'services' => ['Index', 'About', 'Junk']

        );
        return view('pages.services')->with($data);
    }

}
