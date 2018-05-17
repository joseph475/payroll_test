<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Payroll System @yield('title')</title>
         
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css"> -->
        <link rel="stylesheet" href="/css/materialize.min.css">  
        <link rel="stylesheet" href="/css/app.css">  
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    </head>
    <body>    
        @include('includes.header')

        @include('includes.sidenav')

        <main>
            @include('includes.breadcrumb')
            
            @yield('content')

            
        </main>
        
         @include('includes.footer')

        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script> -->
        <!-- <script src="/js/dropzone.js"></script> -->
        <script src="/js/materialize.min.js"></script>
        <script>
             M.AutoInit();
        </script>
    </body>
</html>