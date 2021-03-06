<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin Employees</title>

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
                    SAHA
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

    <section class="p-10">

        <div class="container">
            <div class="row">
                
                <div class="col-md-12">
                    <h2 align="center">Data Employee</h2>
                    <a href="{{ route('employees.create') }}" class="btn btn-danger">Buat Data Baru</a>
                    
                    @if (Session::has('success'))
                        <div class="alert alert-success mt-3" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif

                </div>
                <div class="col-md-12">
                        <table class="table">
                                <thead>
                                    <tr>
                                        <th>Nama Depan</th>
                                        <th>Nama belakang</th>
                                        <th>Email</th>
                                        <th>Departement</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($employees as $a)
                                    <tr>
                                            <td>{{ $a->first_name }}</td>
                                            <td>{{ $a->last_name }}</td>
                                            <td>{{ $a->email }}</td>
                                            <td>{{ $a->departement_id }}</td>
                                            <td>
                                            <a href="{{route('employees.edit', $a->id)}}" class="btn btn-warning btn-sm">Edit</a>

                                            {{ method_field('DELETE') }}

                                            <a href="{{route('employees.destroy', $a->id)}}" class="btn btn-danger btn-sm">Hapus</a>
                                            </td>
                                        </tr> 
                                    @endforeach

                                    


                                </tbody>
                            </table>
                </div>
            </div>
        </div>

    

</section>



</body>
</html>
