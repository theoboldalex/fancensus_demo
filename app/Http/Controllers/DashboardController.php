<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        return view('dashboard.index', [
            'links' => Link::where('user_id', auth()->id())->get()
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'link_name' => 'required',
            'link_url' => 'required|url'
        ]);

        $link = Link::create([
            'link_name' => $request->link_name,
            'link_url' => $request->link_url,
            'user_id' => auth()->id()
        ]);

        return redirect()->route('dashboard', auth()->id());
    }

    public function destroy($id)
    {
        Link::destroy($id);

        return redirect()->route('dashboard', auth()->id());
    }

    public function edit($id)
    {
        $link = Link::where('id', $id)->first();

        return view('dashboard.edit', [
            'link' => $link
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'link_name' => 'required',
            'link_url' => 'required|url'
        ]);

        $updated_link = Link::where('id', $id)->update([
            'link_name' => $request->link_name,
            'link_url' => $request->link_url
        ]);

        return redirect()->route('dashboard', auth()->id());
    }
}
