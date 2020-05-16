<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin Departements</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Admin 
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a href="/admin/departements" class="nav-link">Departements</a>
                            </li>

                            <li class="nav-item">
                                <a href="/admin/employees" class="nav-link">Employees</a>
                            </li>
                    </ul>
                </div>
            </div>
        </nav>

    </div>

    <section class="p-5">

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-md-6">
                    <form action="{{ route('departements.store') }}" method="post">
                        {{ csrf_field() }}

                    <div class="form-group">

                      <label for="">Nama</label>
                      <input type="text" name="name" id="name" class="form-control" required="required" placeholder="Masukan nama" aria-describedby="helpId">
                      
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
                </div>

            </div>
        
                
        </div>

    

</section>



</body>
</html>
