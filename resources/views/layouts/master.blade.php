<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
            <div>
                <a class="navbar-brand " href="#">Recycon</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarSupportedContent">
                    <div class="">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/show/product">Show Product</a>
                            </li>
                           @auth()
                                @if(\Illuminate\Support\Facades\Auth::user()->role == 'Admin')
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Manage Item
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="/insert">Insert</a></li>
                                            <li><a class="dropdown-item" href="/view/product">View Product</a></li>
{{--                                            <li><hr class="dropdown-divider"></li>--}}
{{--                                            <li><a class="dropdown-item" href="#">Something else here</a></li>--}}
                                        </ul>
                                    </li>
                                @elseif (\Illuminate\Support\Facades\Auth::user()->role == 'User')
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="/view/cart">My Cart</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="/transaction/history">Transaction History</a>
                                    </li>
                                @endif
                            @endauth
                        </ul>
                    </div>
{{--                    <div>--}}
{{--                        <form class="d-flex" role="search">--}}
{{--                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" width="50%">--}}
{{--                            <button class="btn btn-outline-success" type="submit">Search</button>--}}
{{--                        </form>--}}
{{--                    </div>--}}
                    <div class="">
                        @Auth()
                            <div class=" d-flex align-items-center">
                                <li class="nav-item dropdown text-white list-unstyled me-4">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Profile
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="/edit/profile">Edit Profiles</a></li>
                                        <li><a class="dropdown-item" href="/change/password">Edit Password</a></li>
{{--                                        <li><hr class="dropdown-divider"></li>--}}
{{--                                        <li><a class="dropdown-item" href="#">Something else here</a></li>--}}
                                    </ul>
                                </li>
                                <a href="/logout"><button class="btn btn-outline-info" type="submit">Logout</button></a>
                            </div>

                        @else
                            <div>
                                <a href="/login"><button class="btn btn-outline-info me-2" type="submit">Login</button></a>
                                <a href="/register"><button class="btn btn-outline-info" type="submit">Register</button></a>
                            </div>

                        @endif
                    </div>
            </div>


        </div>
    </nav>
</header>

<section>@yield('content')</section>

<footer>
    <div class="alert alert-dark text-center m-0 bg-dark text-white" role="alert">
        WebProgWakacipuy
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>
