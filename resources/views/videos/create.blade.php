{{-- resources/views/videos/create.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SoloScreen - Submit and Watch Video</title>
    <link href="https://fonts.googleapis.com/css?family=Share+Tech" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style> 
body {
  font-family: 'Share Tech', sans-serif;
  margin: 0;
  padding: 0;
  display: flex;
  flex-direction: column; /* Stack elements vertically */
  align-items: center; /* Center items horizontally */
  height: 100vh;
  color: white;
  background-color: #343a40;
}
    
.container {
  text-align: center;
  width: 90%; /* Adjust based on preference */
  max-width: 1200px; /* Adjust based on preference */
}

#videoContainer {
  margin-top: 20px; /* Adjust based on preference */
}

h1 {
  margin: 20px 0;
  font-size: 2rem; /* Adjust size as needed */
}

    </style>
</head>
<body>
<h1>SoloScreen</h1>
    <form id="videoForm" action="{{ route('videos.store') }}" method="post">
        @csrf
        <label for="url">Enter youtube video url here:</label>
        <input type="url" name="url" id="url" required>
        <button type="submit">Submit</button>
    </form>

    <div id="videoContainer"></div>

    <script>
        $('#videoForm').submit(function(e) {
            e.preventDefault(); // Prevent the default form submission
            var formData = $(this).serialize(); // Serialize form data

            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: formData,
                success: function(response) {
                    // Assuming the response contains the embed URL or video ID
                    $('#videoContainer').html('<iframe width="560" height="315" src="' + response.embedUrl + '" frameborder="0" allowfullscreen></iframe>');
                },
                error: function() {
                    alert('Error submitting video URL.');
                }
            });
        });
    </script>
</body>
</html>
