<?php

namespace App\Http\Controllers;

use App\Models\Track;
use Illuminate\Http\Request;

class TrackController extends Controller
{
    public function index()
    {
        $tracks = Track::all();
        
        return view('tracks/index', compact('tracks'));
    }
    
    public function store(Request $request)
    {
        $track = [
            'title' => $request->title,
            'artists' => $request->artist,
            'genres' => $request->genre,
            'styles' => $request->style,
        ];
        
        Track::create($track);
        
        return redirect()->route('tracks.index');
    }
}
