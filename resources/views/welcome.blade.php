<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Styles -->

</head>

<body class="antialiased">
    <div class="">
        @if (Route::has('login'))
            <div class="container">



            </div>
        @endif
    </div>
    <section class="d-flex flex-column align-items-center justify-content-center" style="height:80vh;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 text-center"> <img src="{{ asset('img/logo.png') }}"
                        class="w-25 mx-auto" alt="">
                        <h1 style="color:rgb(32, 32, 133)">Bem vindo ao ERP+</h1>
                    <div class="d-flex flex-row gap-3 mt-3 flex-wrap p-2 justify-content-center">
                        @auth
                            <a href="{{ url('/home') }}" style="background-color: #f3f2f2" class="ps-4 pe-4 btn text-primary ">Home</a>
                        @else
                            <a href="{{ route('login') }}" style="background-color: #f3f2f2" class="ps-4 pe-4 btn text-primary ">Logar</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" style="background-color: #f3f2f2" class=" ps-4 pe-4 btn text-primary ">Registre-se</a>
                            @endif
                        @endauth
                    </div>
                </div>

            </div>

        </div>

    </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>
