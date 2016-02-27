<?php

namespace Askedio\LaravelVendorPackage\Http\Controllers;

use Illuminate\Routing\Controller as Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function create()
    {
        dd('Hello World, create :D');
    }

    public function store()
    {
        dd('Hello World, store :D');
    }

    public function show()
    {
        dd('Hello World, show :D');
    }

    public function edit()
    {
        dd('Hello World, edit :D');
    }

    public function update()
    {
        dd('Hello World, update :D');
    }

    public function destroy()
    {
        dd('Hello World, destroy :D');
    }
}
