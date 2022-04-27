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