<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin</title>

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
                    @foreach ($employees as $a)
                    <form action="{{ route('employees.update', $a->id) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}
                        <div class="form-group">
    
                          <label for="">Firts Name</label>
                          <input type="text" name="first_name" id="first_name" class="form-control" required="required" placeholder="Masukan nama depan" aria-describedby="helpId" value="{{$a->first_name}}">
                          
                        </div>

                        <div class="form-group">
    
                            <label for="">Last Name</label>
                            <input type="text" name="last_name" id="last_name" class="form-control" required="required" placeholder="Masukan nama belakang" aria-describedby="helpId" value="{{$a->last_name}}">
                            
                          </div>

                          <div class="form-group">
    
                            <label for="">Firts Name</label>
                            <input type="text" name="email" id="email" class="form-control" required="required" placeholder="Masukan email" aria-describedby="helpId" value="{{$a->email}}">
                            
                          </div>

                          <div class="form-group">
    
                            <label for="">Departement</label>
                            <input type="text" name="departement_id" id="departement_id" class="form-control" required="required" placeholder="Masukan nama" aria-describedby="helpId" value="{{$a->departement_id}}">
                            
                          </div>
                        
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                    @endforeach
                    
                </div>

            </div>
        
                
        </div>

    

</section>



</body>
</html>
