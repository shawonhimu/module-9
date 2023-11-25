<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return view("Home");
    }

    public function aboutInfo()
    {
        return view("About");
    }

    public function servicesInfo()
    {
        return view("Services");
    }

    public function contactForm()
    {
        return view("Contact");
    }

    public function portfolioInfo()
    {
        return view("Portfolio");
    }
}
