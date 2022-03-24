<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Gallery | Images</title>
</head>
<body>

    <style>
        #new-btn {
            background: royalblue;
            color: white;
            padding: 10px 15px;
            border: 0;
        }
        img {
            width: 320px;
            height: 200px;
            margin: 5px;
        }
    </style>

    <h2>My Gallery</h2>
    <a id="new-btn" href="{{ route('gallery.upload') }}">New Image</a>
    <br><br>

    @foreach($photos as $photo)
        <img src="{{ asset($photo->imagePath) }}">
    @endforeach
</body>
</html>