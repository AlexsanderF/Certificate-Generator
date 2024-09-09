<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class CertificateController extends Controller
{

    public function index(): View|Factory|Application
    {
        return view('dashboard');
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show()
    {
        return view('certificate');
    }

    public function edit()
    {
    }

    public function update()
    {
    }

    public function destroy()
    {
    }

    public function search(Request $request)
    {
        $certificate = $request->input('search-certificate');
        dd($certificate);
    }

    public function generate()
    {
    }

    public function download()
    {
    }
}
