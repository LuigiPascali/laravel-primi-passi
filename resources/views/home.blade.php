<!DOCTYPE html>
<html>

    <head>
        <title>Laravel Primi Passi</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>

    <body>

        <header>

            <nav>

                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/contact">Contacts</a></li>
                </ul>

            </nav>

        </header>
        
        <h1>
            Hello World!
        </h1>
        
        <p>
            {{ $message }}
        </p>

    </body>

</html>
