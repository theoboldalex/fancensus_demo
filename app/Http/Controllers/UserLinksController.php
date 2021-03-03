<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\User;
use Illuminate\Http\Request;

class UserLinksController extends Controller
{
    public function show($id)
    {
        $links = Link::where('user_id', $id)->with('user')->get();

        return view('user.shareable', [
            'links' => $links
        ]);
    }
}
