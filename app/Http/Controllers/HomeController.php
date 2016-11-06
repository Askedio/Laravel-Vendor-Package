<?php

namespace Askedio\LaravelVendorPackage\Http\Controllers;

use Illuminate\Routing\Controller as Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('LaravelVendorPackage::welcome');
    }
}
