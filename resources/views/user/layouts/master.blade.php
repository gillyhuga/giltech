<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/d0701816e2.js" crossorigin="anonymous"></script>
    <title>Giltech | @yield('title') </title>
</head>

<body>
    <header>
        <nav class="nav container">
            <div>
                <a href="/" class="nav_logo ">Giltech.</a>
            </div>
            <div>
                <ul class="nav_list">
                    <li class="nav_item"><a href="/" class="nav_link">Home</a></li>
                    <li class="nav_item"><a href="profile" class="nav_link">Profile</a></li>
                    <li class="nav_item"><a href="listapp" class="nav_link">List App</a></li>
                    <li class="nav_item"><button class="button fa fa-moon" id="btn-dark" onclick="switchMode()"></button></li>
                </ul>
            </div>
        </nav>
    </header>

    @yield('hero')

    <div class="header-bg">&nbsp;</div>
    <section id="wrapper">
        @yield('photo-profile')
        @yield('sidebar-left')
        <div id="mid">
        @yield('content')
        @yield('listapp')
        @yield('profile')
        </div>
        @yield('sidebar-right')   
    </section>

    <footer class="footer">
        <div>
            <p> &copy; Gilly Huga Anargya 2021</p>
        </div>
    </footer>

</body>
<link rel="stylesheet" href="{{asset('/css/style.css')}}">
@stack('css')
<script src="{{asset('/js/main.js')}}"></script>
<script src="{{asset('/js/darkmode.js')}}"></script>
@stack('script')


</html>