
<!DOCTYPE html>
<html>
    @auth
    <header class="transition">
        <div class="user-info">
            <img class="unselectable pointer" src="assets/Icons/account_circle_black_48dp.svg" onclick="location='{{ url("/principal") }}'">
            <h2 class="unselectable">{{auth()->user()->name}}</h2>
        </div>
        <nav>
            <ul class="header-extra">
                <li class="transition">
                    <button class="no_button" type="button" onclick="location='{{ url("/equipe") }}'">
                        <h2>Membros</h2>
                    </button>
                </li>
                <li class="transition">
                    <button class="no_button" type="button" onclick="location='{{ url("/membro") }}'">
                        <h2>Cadastrar membros</h2>
                    </button>
                </li>
                <li class="transition">
                    <form name="sair" action="/logout" method="POST">
                        @csrf
                        <button class="no_button" type="submit">
                            <h2>Logout</h2>
                        </button>   
                    </form>
                </li>    
            </ul>
        </nav>
    </header>
    @endauth
</html>
