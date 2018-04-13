<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Lizzy & Max - Home</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="/css/style.css">

        <!-- Load Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Cormorant+SC|Tangerine" rel="stylesheet">
    </head>

    <body>
        <nav class="navbar navbar-expand-md sticky-top navbar-light bg-light" style="background: white;">
            <a class="navbar-brand logo-text" href="#">Lizzy & Max</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-end body-text" id="navbarText">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#our-story">Our Story</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#info">Info</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#hotels">Hotels</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pictures">Pictures</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#rsvp">RSVP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#registry">Registry</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#song">Request a Song</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#transportation">Transportation</a>
                    </li>
                </ul>
            </div>
        </nav>

        @yield('content')

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script
            src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

        @yield('js')
    </body>
</html>
