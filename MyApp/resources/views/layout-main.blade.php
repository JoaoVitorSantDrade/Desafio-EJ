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
        <!--nav-bar-->
        <section class="values-container">
            <h1>A EcompJr</h1> <!--Depende da pagina-->
            <div class="flex-row">
                @unless(count($thoughts) == 0)

                @foreach($thoughts as $thought)
                <!--Pensamentos-->
                <x-enterprise-thoughts :thought="$thought"/>
                @endforeach
                @else
                <x-thought-not-found/>
                @endunless
            </div>
        </section>
        <!--footer-->
        <x-footer/>
    </body>
</html>