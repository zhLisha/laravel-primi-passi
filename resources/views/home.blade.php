<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="home container">
        <h1>Scuola Primaria G.B.</h1>

        <nav>
            <div class="actions">
                <ul class="flex">
                    <li>
                        <a href="{{ route('classes') }}">Classi</a>
                    </li>
                    <li>
                        <a href="{{ route('classroom') }}">Aule</a>
                    </li>
                    <li>
                        <a href="{{ route('contacts') }}">Contatti</a>
                    </li>
                    <li>
                        <a href="">Attività</a>
                    </li>
                    <li>
                        <a href="">Chi Siamo</a>
                    </li>
                    <li>
                        <a href="">Dove Siamo</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

</body>
</html>

<style>
    body {
        font-family: Arial;
    }

    ul {
        list-style-type: none;
    }

    a {
        text-decoration: none;
        color: inherit;
    }

    .flex {
        display: flex;
    }

    ul{
        justify-content: space-between;
    }

    .container {
        width: 80%;
        margin: 0 auto;
    }
    
    .home {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
    }

    h1 {
        text-align: center;
    }
</style>