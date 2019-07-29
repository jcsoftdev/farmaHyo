
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Stexo - Responsive Admin & Dashboard Template | Themesdesign</title>
    <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="Themesdesign" name="author" />
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <link rel="stylesheet" href="./assets/css/plantilla.css">
    <script src="./js/plantillahead.js"></script>
</head>

<body>

    <div id="app">
        <div class="header-bg">
            <!-- Navigation Bar-->
            <header id="topnav">
                @include('templates.topnav')
                <!-- end topbar-main -->
                @include('templates.header')
            </header>
            <!-- End Navigation Bar-->
            @yield('contenido')
        </div>
        


        @include('templates.footer')
    </div>
    
    <!-- App js -->
    <script src="./js/app.js"></script>
    <!-- plantilla  -->
    
    <script src="./js/plantilla.js"></script>
</body>

</html>