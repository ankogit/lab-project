<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="ru"> <!--<![endif]-->

<head>

    <meta charset="utf-8">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <meta name="description" content="">

    <link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- <link rel="stylesheet" href="libs/bootstrap/css/bootstrap-grid.min.css"> -->
    <link rel="stylesheet" href="libs/animate/animate.css">

    <link rel="stylesheet" href="/css/fonts.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/media.css">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Scripts -->
{{--    <script src="{{ asset('js/app.js') }}" defer></script>--}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    {{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
    <script src="libs/modernizr/modernizr.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/1.0.4/css/dataTables.responsive.css">

{{--    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>--}}


    <style>
        .alert-block {
            position: absolute;
            right: 20px;
            top: 150px;
        }
    </style>

</head>

<body >
<div id="app">

    <nav class="navbar navbar-expand-lg navbar-light bg-main">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="https://sfedu.ru/index2015/logo_small.png" alt="" width="30" height="24">
            </a>
            @if(\Illuminate\Support\Facades\Auth::check())
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        @if(\Illuminate\Support\Facades\Auth::user()->role_id == '0')

                        <li class="nav-item">
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{route('admin-users.index')}}">Пользователи</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{route('admin-groups.index')}}">Группы</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{route('admin-subjects.index')}}">Предметы</a>
                        </li>
{{--                        <li class="nav-item dropdown">--}}
{{--                            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">--}}
{{--                                Создать--}}
{{--                            </a>--}}
{{--                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
{{--                                <li><a class="dropdown-item" href="#">Мероприятие</a></li>--}}
{{--                                <li><a class="dropdown-item" href="#">Вид мероприятия</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
                        @endif

                    </ul>

                    <div class="d-flex">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">


                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{Auth::user()->name}}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logoutFrom').submit();">
                                            Выход
                                        </a>
                                        <form id="logoutFrom" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                        </li>
                                </ul>
                            </li>
                        </ul>

                    </div>
                </div>
            @endif
        </div>
    </nav>

    <main>
        @yield('content')

    </main>

    <div class="hidden"></div>
</div>
@if (count($errors) > 0)
<div class="alert alert-danger alert-dismissible fade show alert-block" role="alert">
    <strong>Обнаружена ошибка!</strong> Причины:<br>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
{{--<!--[if lt IE 9]>--}}
{{--<script src="libs/html5shiv/es5-shim.min.js"></script>--}}
{{--<script src="libs/html5shiv/html5shiv.min.js"></script>--}}
{{--<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>--}}
{{--<script src="libs/respond/respond.min.js"></script>--}}
{{--<![endif]-->--}}

{{--<script src="libs/jquery/jquery-1.11.2.min.js"></script>--}}
{{--<script src="libs/waypoints/waypoints.min.js"></script>--}}
{{--<script src="libs/animate/animate-css.js"></script>--}}
{{--<script src="libs/plugins-scroll/plugins-scroll.js"></script>--}}

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

{{--<script src="js/common.js"></script>--}}


<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.5/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/plug-ins/f2c75b7247b/integration/bootstrap/3/dataTables.bootstrap.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/responsive/1.0.4/js/dataTables.responsive.js"></script>

<script>
    $('table').DataTable({
        "language": {
            "lengthMenu": "Показывать _MENU_ записей на странице",
            "zeroRecords": "Nothing found - sorry",
            "info": "Showing page _PAGE_ of _PAGES_",
            "infoEmpty": "No records available",
            "search": "Поиск",
            "previous": "Назад",
            "next": "Далее",
            "infoFiltered": "(filtered from _MAX_ total records)"
        }
    });
</script>
</body>
</html>





