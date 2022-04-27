<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ ('assets/css/form.css') }}" rel="stylesheet">
        <title>Login E.J</title>

        <!--Fonts-->
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@300;400;700;900&display=swap');
        </style>

        <script src="{{ ('assets/js/login.js') }}"></script> <!--Passar pro laravel depois-->

    </head>
    <body class="antialiased"> 
        <div class="card">
            <div class="card-modal card-login card-default unselectable">
                <div class="align-center">
                    <h2>Login</h2>
                </div>
                <form name="login" method="POST" action="/login">
                    @csrf
                    <section>
                        <div class="label-div">
                            <label for="name">Nome</label>
                            <input id="user_name" class="input-name"name="name" type="text" placeholder="Digite seu nome" required>
                            @error('name')
                            <p class="error">Nome incorreto!</p>
                            @enderror
                        </div>
                        <div class="label-div">
                            <label for="nickname">Nome de usuário</label>
                            <input id="user_name" class="input-user"name="nickname" type="text" placeholder="Digite seu nome de usuário" required>
                            @error('nickname')
                            <p class="error">Nome de usuario já existe!</p>
                            @enderror
                        </div>
                        <div class="label-div">
                            <label for="password">Senha</label>
                            <input id="user_psw" class="input-psw" name="password" type="password" placeholder="Digite sua senha" required>
                            @error('password')
                            <p class="error">Senha com tamanho inválido!</p>
                            @enderror
                            <button id="visibility-icon" class="no-visibility visibility-icon" type="button"></button>
                            
                        </div>
                        <div>
                            <div class="label-div">
                                <button class="send-login" type="submit"></button>
                                <button class="new-user" type="button"></button>
                            </div>
                        </div>
                    </section>
                </form>
            </div>
        </div> 
    </body>
    <!--Footer-->
</html>