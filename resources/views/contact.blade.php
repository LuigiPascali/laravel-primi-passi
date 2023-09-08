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
                Contact
            </h2>

            <p>
                {{ $contactInfo }}
            </p>

            <form class="contact-form">

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" required></textarea>
                </div>

                <button type="submit">Send Message</button>

            </form>

        </section>

    </body>

</html>