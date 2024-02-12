<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends BaseController // Renamed from 'Controller' to 'VideoController'
{
    use AuthorizesRequests, ValidatesRequests;

    public function create()
    {
        return view('videos.create');
    }

    public function show(Video $video)
    {
        return view('videos.show', compact('video'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'url' => 'required|url'
        ]);
    
        // Process the URL and extract the video ID or generate the embed URL here
        $videoUrl = $request->input('url');
        // For simplicity, let's assume it's a YouTube URL and you extract the video ID
        $videoId = explode('?v=', $videoUrl)[1];
        $embedUrl = "https://www.youtube.com/embed/$videoId";
    
        // You might want to save the URL to the database here
    
        return response()->json(['embedUrl' => $embedUrl]);
    }
    }
