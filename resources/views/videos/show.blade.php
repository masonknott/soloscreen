<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video</title>
</head>
<body>
    <h1>Watch Video</h1>

    {{-- Assuming $video->url contains the full YouTube video link --}}
    @php
        $videoId = explode('?v=', $video->url)[1];
        $embedUrl = "https://www.youtube.com/embed/$videoId";
    @endphp

    <iframe width="560" height="315" src="{{ $embedUrl }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
</body>
</html>
