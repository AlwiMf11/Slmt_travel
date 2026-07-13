<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\TourPackage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $destinations = Destination::take(3)->get();
        $tourPackages = TourPackage::take(3)->get();

        return view('home', compact('destinations', 'tourPackages'));
    }
}
