<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ ('assets/css/form.css') }}" rel="stylesheet">
        <link href="{{ ('assets/Icons/favicon/favicon.ico') }}" rel="icon" type="image/x-icon">
        <title>{{$page['title']}}</title>

        <!--Fonts-->
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@300;400;700;900&display=swap');
        </style>

        <script src="{{ ('assets/js/login.js') }}"></script> <!--Passar pro laravel depois-->

    </head>
    <body class="antialiased">
        <x-card-component :page='$page'/> 
    </body>
    <x-footer/>
</html>