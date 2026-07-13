<?php

namespace App\Http\Controllers;

use App\Models\TourPackage;
use Illuminate\Http\Request;

class TourPackageController extends Controller
{
    public function index()
    {
        $tourPackages = TourPackage::all();
        return view('tour-packages.index', compact('tourPackages'));
    }

    public function show(TourPackage $tourPackage)
    {
        return view('tour-packages.show', compact('tourPackage'));
    }
}
