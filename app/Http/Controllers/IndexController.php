<?php

namespace App\Http\Controllers;

class IndexController extends Controller
{
    public function __construct()
    {
    }

    /**
     * Main index page for Dishwasher application.
     *
     * @return string Creates view for index page.
     */
    public function index()
    {
        return view('index');
    }
}