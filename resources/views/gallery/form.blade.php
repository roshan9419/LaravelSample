<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Gallery | Upload Image</title>
</head>
<body>

    <style>
        #upload-btn {
            background: royalblue;
            color: white;
            padding: 10px 15px;
            border: 0;
            margin-top: 20px;
        }
    </style>

    <h2>Upload Image for Gallery</h2>
    <form action="{{ route('gallery.upload') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image" required><br>
        <input type="submit" value="Upload Image" id="upload-btn">
    </form>
</body>
</html>