<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserLinksController extends Controller
{
    public function show($id)
    {
        $links = Link::where('user_id', $id)->with('user')->get();

        if (!count($links))
        {
            return view('user.no_links');
        }

        return view('user.shareable', [
            'links' => $links
        ]);
    }
}
