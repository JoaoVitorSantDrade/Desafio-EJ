
<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ ('assets/css/main.css') }}" rel="stylesheet"> <!--Lembrar de colocar {{ }}-->        <!--Fonts-->
        <title>Nav-bar</title>
        <!--Fonts-->
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@300;400;700;900&display=swap');
        </style>

        <!--<link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.min.css')}}">
        <script type="text/javascript" src="{{URL::asset('assets/js/jquery.min.js')}}"></script>-->
    </head>
    <header class="transition">
        <div class="user-info">
            <img class="unselectable" src="assets/Icons/account_circle_black_48dp.svg">
            <h2 class="unselectable">Placeholder name</h2>
            <h2 class="unselectable">Placeholder cargo</h2>
        </div>
        <nav>
            <ul class="header-extra">
                <li class="transition"><a href=""><h2>Membros</h2></a></li>
                <li class="transition"><a href=""><h2>Cadastrar Usuários</h2></a></li>
            </ul>
        </nav>
    </header>
</html>
