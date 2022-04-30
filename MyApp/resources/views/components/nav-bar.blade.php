
<!DOCTYPE html>
<head>
    <script src="{{ ('assets/js/navbar.js') }}"  defer></script> <!--Passar pro laravel depois-->
</head>
<html>
    @auth
    <header class="transition">
        <div class="user-info">
            <img class="unselectable pointer" src="assets/Icons/account_circle_black_48dp.svg" onclick="location='{{ url("/principal") }}'">
            <h2 id="nome" class="unselectable">{{auth()->user()->name}}</h2>
        </div>
        <nav>
            <ul class="header-extra">
                <li class="transition">
                    <button id="membro" class="no_button" type="button" onclick="location='{{ url("/equipe") }}'">
                        <h2>Membros</h2>
                    </button>
                </li>
                <li class="transition">
                    <button id="novo_membro" class="no_button" type="button" onclick="location='{{ url("/membro") }}'">
                        <h2>Cadastrar membros</h2>
                    </button>
                </li>
                <li class="transition">
                    <form name="sair" action="/logout" method="POST">
                        @csrf
                        <button id="logout" class="no_button" type="submit">
                            <h2>Logout</h2>
                        </button>   
                    </form>
                </li>    
            </ul>
        </nav>
    </header>
    @endauth
</html>
