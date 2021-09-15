<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    function Home () {
        return view('home');
    }

     function About () {
         return view('about');
    }

    function Services () {
         return view('services');
    }

    function Skills () {
         return view('skills');
    }

     function Contact () {
         return view('contact');
    } 
    
    function Portfolio () {
         return view('portfolio');
    }
    
    function Experience () {
         return view('experience');
    }


}
