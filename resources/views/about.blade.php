<!DOCTYPE html>
<html>

    <head>
        <title>{{ $title }}</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>

    <body>

        <header>

            <nav>

                <ul>

                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/contact">Contact</a></li>

                </ul>

            </nav>

        </header>
        
        <h1>
            {{ $title }}
        </h1>

        <section>

            <h2>
                About
            </h2>

            <p>
                {{ $aboutContent }}
            </p>

            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae nunc nec nisl aliquam lacinia. Nulla facilisi. Sed euismod, nisl id aliquet tincidunt, velit nunc tincidunt nunc, id aliquam nunc nisl id nunc. Sed euismod, nisl id aliquet tincidunt, velit nunc tincidunt nunc, id aliquam nunc nisl id nunc.
            </p>
            <p>
                Phasellus auctor, nunc id aliquam tincidunt, velit nunc tincidunt nunc, id aliquam nunc nisl id nunc. Sed euismod, nisl id aliquet tincidunt, velit nunc tincidunt nunc, id aliquam nunc nisl id nunc.
            </p>

        </section>

    </body>

</html>