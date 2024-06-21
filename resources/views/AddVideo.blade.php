<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('CSS/addVideo.css') }}">
    <title>Add Video</title>
</head>
<body>
    <form action="/add-video1" enctype="multipart/form-data" method="POST">
        @csrf
        <label for="video">Gambar</label>
        <input type="file" name="video" id="video">
        @error('video')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        
        <label for="link">Link Video</label>
        <input type="text" name="link" id="link">
        @error('link')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label for="title">Judul</label>
        <input type="text" name="title" id="title">
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label for="info">Informasi</label>
        <input type="text" name="info" id="info">
        @error('info')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <button type="submit">Submit</button>
    </form>
</body>
</html>