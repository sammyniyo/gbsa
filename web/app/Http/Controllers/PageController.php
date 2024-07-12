<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function aboutUs()
    {
        return view('about-us');
    }

    public function ourServices()
    {
        return view('our-services');
    }

    public function ourTours()
    {
        return view('our-tours');
    }

    public function hotels()
    {
        return view('hotels');
    }
    public function contactUs()
    {
        return view('contact-us');
    }
    public function gorillaExpress()
    {
        return view('gorilla-express');
    }
    public function nyungweNationalPark()
    {
        return view('nyungwe-national-park');
    }
    public function akageraNationalPark()
    {
        return view('akagera-national-park');
    }
    public function oneAndOnly()
    {
        return view('one-and-only');
    }
    public function serenaHotel()
    {
        return view('serena-hotel');
    }

    public function niyoArtGarelly()
    {
        return view('niyo-art-garelly');
    }
    public function leBambouGorillaLodge()
    {
        return view('le-bambou-gorilla-lodge');
    }

    public function VolcanoesBoutiqueHotel()
    {
        return view('5-volcanoes-boutique-hotel');
    }
    public function singitaHotel()
    {
        return view('singita-hotel');
    }
    public function ingagiParkViewLodge()
    {
        return view('ingagi-Park-View-Lodge');
    }
    
}
