<form name="login" method="POST" action="/login">
    @csrf
    <section>
        <div class="label-div">
            <label for="nickname">Nome de usuário</label>
            <input id="user_name" class="input-user"name="nickname" type="text" placeholder="Digite seu nome de usuário" value="{{old('nickname')}}" required>
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
        <div>
            <div class="label-div">
                <button class="send-login" type="submit"></button>
                <button class="new-user" onclick="location='{{ url("/cadastro") }}'" type="button"></button>
            </div>
        </div>
    </section>
</form>