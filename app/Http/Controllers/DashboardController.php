<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'link_name' => 'required',
            'link_url' => 'required|url'
        ]);
    }
}
