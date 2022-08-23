<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="classroom">
        <ul class="img">
            @foreach ($image as $img)
                <li>
                    <img src="{{$img}}" alt="{{$img}}">
                </li>
            @endforeach
        </ul>
        <div class="return-home">
            <a href="{{route('home')}}">Ritorna alla Home</a>
        </div>
    </div>
</body>
</html>

<style>
    ul {
        list-style-type: none;
    }

    img {
        width: 500px;
    }
</style>