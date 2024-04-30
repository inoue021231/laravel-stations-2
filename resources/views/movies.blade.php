<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>
</head>
<body>
    <ul>
    @foreach ($movies as $movie)
        <li>タイトル：{{$movie->title}}</li>
        <img src="{{$movie->image_url}}" alt="{{$movie->title}}">
        <?php
            if($movie->is_showing) {
                print('上映中');
            } else {
                print('上映予定');
            }
        ?>
        <p>{{$movie->published_year}}</p>
        <p>{{$movie->description}}</p>
    @endforeach
    </ul>
</body>
</html>