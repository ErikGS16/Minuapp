<!DOCTYPE html>
<html lang="ca">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inici</title>

        <link href="{{ asset('css/layouts/navbar.css') }}" rel="stylesheet">
</head>

<body>
        <div class="header">
                <h1 id="title">Minuapp</h1>
        </div>
        <div id="sidebarAndContentContainer">
                <div id="sidebar">
                        <button class="sidebarButton">
                                <span>Inici</span>
                        </button>
                        <button class="sidebarButton">
                                <span>Calendari</span>
                        </button>
                        <button class="sidebarButton">
                                <span>Documentació</span>
                        </button>
                        <button class="sidebarButton">
                                <span>Pagaments</span>
                        </button>
                        <button class="sidebarButton">
                                <span>Blog</span>
                        </button>
                        <button class="sidebarButton" id="logOutButton">
                                <span>Tanca la sessió</span>
                        </button>
                </div>
                <div id="pagesContent">
                        @yield('content')
                </div>
        </div>
</body>

</html>