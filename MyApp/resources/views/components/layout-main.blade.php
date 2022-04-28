
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ ('assets/css/main.css') }}" rel="stylesheet">
        <link href="{{ ('assets/css/form.css') }}" rel="stylesheet">
        <link href="{{ ('assets/Icons/favicon/favicon.ico') }}" rel="icon" type="image/x-icon">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@300;400;700;900&display=swap');
        </style>
        <link rel="stylesheet" href="{{ ('assets/css/font-awesome.min.css') }}">
        <title>{{$page['title']}}</title>

    </head>
    <body>
        <x-nav-bar/>
        @if ($page['type'] == 'menu')
            <x-main-content :thoughts="$thoughts" /> 
        @elseif($page['type'] == 'new_member')
            <x-card-component :page="$page"/> 
        @elseif($page['type'] == 'member')
            <x-squad-component :members="$members"/>
        @endif
        <x-footer/>
    </body>
</html>