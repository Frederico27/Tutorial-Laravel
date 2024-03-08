<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulu')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bs5.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'/>
</head>
<body>

      <!-- Responsive navbar-->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">Par Impar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="/formvalidation" wire:navigate>Rejistrasaun</a></li>
                    <li class="nav-item"><a class="nav-link" href="/parimpar" wire:navigate>Kalkula</a></li>
                </ul>
                </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- @yield('navbar') --}}
    @yield('konteudu')

   <script src="{{ asset('assets/js/bs5.js') }}"></script>
</body>

</html>