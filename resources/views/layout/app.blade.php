<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Shawon Himu</title>

    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <link
        href={{ url('https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700|Raleway:300,400,500,600,700&display=swap') }}
        rel="stylesheet" />
    <link rel="shortcut icon" href={{ asset('img/shawon-himu.ico') }} type="image/x-icon" />
    <link rel="stylesheet" href={{ asset('css/all.min.css') }} />
    <link rel="stylesheet" href={{ asset('css/flaticon.css') }} />
    <link rel="stylesheet" href={{ asset('slick/slick.css') }} />
    <link rel="stylesheet" href={{ asset('slick/slick-theme.css') }} />
    <link rel="stylesheet" href={{ asset('css/fontawesome.min.css') }} />
    <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }} />

    <link rel="stylesheet" href={{ asset('style.css') }} />
</head>

<body>

    @yield('content')

    <script type="text/javascript">
        document.addEventListener("click", function(e) {
            if (e.target.classList.contains("galleryImg")) {
                const src = e.target.getAttribute("src");
                document.querySelector(".modalImg").src = src;
                const myModal = new bootstrap.Modal(document.getElementById("galleryModal"));
                myModal.show();
            }
        });
    </script>

    <script type="text/javascript" src={{ asset('slick/jquery/jquery.min.js') }}></script>

    <script src={{ asset('slick/slick.min.js') }}></script>

    <script src={{ asset('slick/slick-custom.js') }}></script>
    <script src={{ asset('js/bootstrap.min.js') }}></script>
    <script src={{ asset('js/popper.min.js') }}></script>
</body>

</html>
