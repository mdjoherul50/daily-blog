<!--doctype html-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, intial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Blog Section</title>
    <!--Stylesheet----------------------------------->
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" />
    <!--fav-icon------------------------------------->
    <link rel="shortcut icon" href="images/fav-icon.svg" />
    <!--poppins-font-family-------------------------->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
       
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
        {{-- <style>
            body {
                background-color: #f8f9fa; /* Set your desired background color */
            }
            .container {
                background-color: #ffffff; /* Set your desired background color for the form container */
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                margin-top: 50px;
            }
        </style> --}}
    @stack('style')
</head>

<body>
    <!--blog-section============================================================================-->
    <header>
        <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
        <div class="topnav" id="myTopnav">
            <a href="index.html">Home</a>
            <a href="#">All Blog</a>
            <a href="#">About</a>
            @if (auth()->check())
                <a href="{{ route('logout') }}" class="login-menu">Logout</a>
            @else
                <a href="{{ route('login') }}" class="login-menu">Login</a>
            @endif
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>© All Rights Reserved</p>
    </footer>

    <!-- scripts -->
    <script src="{{asset('js/index.js')}}"></script>
    <script>
        // document.addEventListener('DOMContentLoaded', function() {
        //     // Your JavaScript code goes here
        //     alert('global');
        // });
    </script>
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    @stack('js')
</body>

</html>