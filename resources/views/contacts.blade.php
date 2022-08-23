<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="contacts">
        <div class="office">
            <h2>Segretieria: </h2>
            <ul>
                @foreach ($segreteria as $key => $contact)
                    <li class="contact-list">
                       <span>{{$key}} :</span> 
                       <span>{{ $contact }}</span>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="counseling">
            <h2>Consulenza Scolastica: </h2>
            <ul>
                @foreach ($consulenze as $key => $contact)
                    <li class="contact-list">
                        <span>{{$key}} :</span> 
                        <span>{{ $contact }}</span>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="return-home">
        <a href="{{route('home')}}">Ritorna alla Home</a>
    </div>
</body>
</html>

<style>
    ul {
        list-style-type: none;
    }

    .contact-list span:first-child{
        text-transform: capitalize;
    }
</style>