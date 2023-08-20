<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a href="" class="navbar-brand ">iNiLabs</a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link">Home</a>
                </li>

                <li class="dropdown">
                    <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">TO-DO</a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('todos.create') }}" class="dropdown-item">Create</a></li>
                        <li><a href="{{ route('todos.index') }}" class="dropdown-item">List</a></li>
                    </ul>
                </li>


                {{-- <li class="dropdown">
                    <a href="" class="fw-bold nav-link dropdown-toggle" data-bs-toggle="dropdown">Doctors</a>
                    <ul class="dropdown-menu">
                        <li class=""><a href="{{ route('doctors.index') }}" class=" dropdown-item">Doctors List</a></li>
                        <li><a href="{{ route('doctors.create') }}" class="dropdown-item">Add Doctors</a></li>
                    </ul>
                </li> --}}


            </ul>
        </div>
    </nav>


    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
