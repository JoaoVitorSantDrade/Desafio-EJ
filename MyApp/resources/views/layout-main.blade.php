<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ ('assets/css/main.css') }}" rel="stylesheet">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@300;400;700;900&display=swap');
        </style>
        <title>Main</title>
        <!--<link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.min.css')}}">
        <script type="text/javascript" src="{{URL::asset('assets/js/jquery.min.js')}}"></script>-->
    </head>
    <body>
        <x-nav-bar/>
        <x-main-content :thoughts="$thoughts" />
        <x-footer/>
    </body>
</html>