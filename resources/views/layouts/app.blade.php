<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            *{
                font-family:'Inter';
            }

            #menu {
                background: #393535;
                height: 45px;
                padding-left: 18px;
                border-radius: 0px;
                margin-bottom: 20px;
            }

            #menu ul, #menu li {
                margin: 0 auto;
                padding: 0;
                list-style: none
            }

            #menu ul {
                width: 100%;
                text-align: left;
            }

            #menu li {
                display: inline-block;
                position: relative;
            }

            #menu a {
                display: block;
                line-height: 45px;
                padding: 0 14px;
                text-decoration: none;
                color: #FFFFFF;
                font-size: 20px;
            }

            #menu a.dropdown-arrow:after {
                content: "\25BE";
                margin-left: 5px;
            }

            #menu input {
                display: none;
                margin: 0;
                padding: 0;
                height: 45px;
                width: 100%;
                opacity: 0;
                cursor: pointer
            }

            #menu label {
                display: none;
                line-height: 45px;
                text-align: center;
                position: absolute;
                left: 35px
            }

            #menu label:before {
                font-size: 1.6em;
                color: #FFFFFF;
                content: "\2261"; 
                margin-left: 20px;
            }

            #menu ul.sub-menus{
                height: auto;
                overflow: hidden;
                width: 170px;
                background: #444444;
                position: absolute;
                z-index: 99;
                display: none;
            }

            #menu ul.sub-menus li {
                display: block;
                text-align: left;
                width: 100%;
            }

            #menu ul.sub-menus a {
                color: #FFFFFF;
                font-size: 16px;
            }

            #menu li:hover ul.sub-menus {
                display: block
            }

            #menu ul.sub-menus a:hover{
                background: #F2F2F2;
                color: #444444;
            }

            @media screen and (max-width: 800px){
                #menu {position:relative}
                #menu ul {background:#444444;position:absolute;top:100%;right:0;left:0;z-index:3;height:auto;display:none;text-align:left;}
                #menu ul.sub-menus {width:100%;position:static;}
                #menu ul.sub-menus a {padding-left:30px;}
                #menu li {display:block;float:none;width:auto;}
                #menu input, #menu label {position:absolute;top:0;left:0;display:block}
                #menu input {z-index:4}
                #menu input:checked + label {color:#FFFFFF}
                #menu input:checked + label:before {content:"\00d7"}
                #menu input:checked ~ ul {display:block}
            }
        </style>


        @vite('resources/js/app.js')
    </head>
    <body>
        @include('inc.navbar')
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>