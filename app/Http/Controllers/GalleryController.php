<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\TourPackage;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $destinations = Destination::all();
        $tourPackages = TourPackage::all();
        
        return view('gallery.index', compact('destinations', 'tourPackages'));
    }
}
