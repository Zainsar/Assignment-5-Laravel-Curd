<!doctype html>
<html lang="en">

<head>
    <title>To Do Application</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <header>

        <nav class="navbar navbar-expand-sm bg-dark ">
            <div class="container-fluid">
                <ul class="navbar-nav">
                    <li class="nav-item">
                     <h1>  <a class="nav-link text-light" href="{{ route('products.index') }}">Products</a></h1>
                    </li>
                </ul>
            </div>
        </nav>

    </header>
    <main>
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert block">
                <strong>{{ $message }}</strong>
            </div>
        @endif
