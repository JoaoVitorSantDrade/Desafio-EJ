<form name="cadastro" method="POST" action="/usuario">
    @csrf
    <section>
        <div class="label-div">
            <label for="name">Nome</label>
            <input id="user_name" class="input-name" name="name" type="text" placeholder="Digite seu nome" value="{{old('name')}}" required>
            @error('name')
            <p class="error">{{$message}}</p>
            @enderror
        </div>
        <div class="label-div">
            <label for="nickname">Nome de usuário</label>
            <input id="user_name" class="input-user" name="nickname" type="text" placeholder="Digite seu nome de usuário" value="{{old('nickname')}}" required>
            @error('nickname')
            <p class="error">{{$message}}</p>
            @enderror
        </div>
        <div class="label-div">
            <label for="password">Senha</label>
            <input id="user_psw" class="input-psw" name="password" type="password" placeholder="Digite sua senha" required>
            @error('password')
            <p class="error">{{$message}}</p>
            @enderror
            <button id="visibility-icon" class="no-visibility visibility-icon" type="button"></button> 
        </div>
        <div class="label-div">
            <label id="psw_confirmation" for="password_confirmation">Confirmação de senha</label>
            <input id="user_psw2" class="input-psw" name="password_confirmation" type="password" placeholder="Digite a senha novamente" required>
            @error('password_confirmation')
            <p class="error">{{$message}}</p>
            @enderror
            <button id="visibility-icon2" class="no-visibility visibility-icon" type="button"></button>
        </div>
        <div>
            <div class="label-div">
                <button class="send-login" type="submit"></button>
                <button class="back-page" onclick="location='{{ url("/") }}'" type="button"></button>
            </div>
        </div>
    </section>
</form>