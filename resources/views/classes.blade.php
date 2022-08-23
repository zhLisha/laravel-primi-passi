<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <ul class="classes flex">
            @foreach($name as $key => $class)
                <li>
                    <div class="class-name">
                        <h2>Classe: {{$key}} </h2>
                    </div>                
                    <ul class="students">                        
                        <span>Studenti: </span> 
                        @foreach($class['students'] as $student)
                            <li>
                                {{$student}}
                            </li>
                        @endforeach                        
                    </ul>                
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
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Arial, Helvetica, sans-serif;
    }
    ul {
        list-style-type: none;
    }

    a {
        text-decoration: none;
        color: inherit;
    }

    .container {
        width: 85%;
        margin: 0 auto;
    }

    .flex {
        display: flex;
    }

    .students span {
        font-weight: 700;
        color: lightcoral;
    }

    .classes {
        justify-content: space-between;
        flex-wrap: wrap;
    }

    .return-home {
        padding-top: 30px;
    }

    .return-home a:hover {
        transition: 0.3s;
        color: lightcoral;
    }

</style>