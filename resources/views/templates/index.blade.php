
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Farma Hyo</title>
    <meta content="jcsoftia" name="description" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="Themesdesign" name="author" />
    <link rel="shortcut icon" href="./assets/img/icon.png">
    <link rel="stylesheet" href="./assets/css/plantilla.css">
    <script src="./js/plantillahead.js"></script>
    <style>
        
        *::-webkit-scrollbar {
            width: .75em;     /* Tamaño del scroll en vertical */
            height: .75em;    /* Tamaño del scroll en horizontal */
            /* display: none;  Ocultar scroll */
        }
        /* Ponemos un color de fondo y redondeamos las esquinas del thumb */
        *::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 4px;
        }

        /* Cambiamos el fondo y agregamos una sombra cuando esté en hover */
        *::-webkit-scrollbar-thumb:hover {
            background: #444;
            box-shadow: 0 0 2px 1px rgba(0,0,0,0.8);
            cursor: pointer;
        }

        /* Cambiamos el fondo cuando esté en active */
        *::-webkit-scrollbar-thumb:active {
            background-color: #333;
        }
         *::-webkit-scrollbar-track {
            background: #bbb;
            border-radius: 4px;
        }

        /* Cambiamos el fondo cuando esté en active o hover */
        *::-webkit-scrollbar-track:hover,
        *::-webkit-scrollbar-track:active {
        background: #bbb;
        cursor: pointer;
        }
    </style>
</head>

<body class="p-0 m-0">

    <div id="app">
    <v-app id="inspire" >
        <div class="header-bg light-blue darken-4 pb-5 mb-5">
            <!-- Navigation Bar-->
            <header id="topnav">
                @include('templates.topnav')
                <!-- end topbar-main -->
                @include('templates.header')
            </header>
            <!-- End Navigation Bar-->
            <div class="wrapper">

                <div class="container-fluid">

                    @yield('contenido')
                </div>
            </div>
        </div>
        


        @include('templates.footer')
    </v-app>
    </div>
    
    <!-- App js -->
    <script src="./js/app.js"></script>
    <!-- plantilla  -->
        {{-- <script>$().DataTable();</script> --}}
    <script src="./js/plantilla.js"></script>
</body>

</html>