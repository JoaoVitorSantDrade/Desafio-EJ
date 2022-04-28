

<!DOCTYPE html>
<html>

    <form name="novo_membro" method="post" action="/membro">
        @csrf
        <section>
            <div class="label-div">
                <label for="name">Nome</label>
                <input id="user_name" class="input-name"name="name" type="text" placeholder="Digite o nome" value="{{old('name')}}" required>
                @error('name')
                <p class="error">{{$message}}</p>
                @enderror
            </div>
            <div class="label-div">
                <label for="user-cargo">Cargo</label>
                <select class="input-cargo work placeholder-font" id="user-cargo" name="cargo" value="{{old('cargo')}}" required>
                    <option class="placeholder-font" value="" disabled selected hidden>Escolha o cargo</option>
                    <option class="diretor" id="diretor" value="Diretor">Diretor</option>
                    <option class="consultor" id="consultor" value="Consultor">Consultor</option>
                    <option class="membro" id="membro" value="Membro">Membro</option>
                    <option class="trainee" id="trainee" value="Trainee">Trainee</option>
                </select>
                @error('cargo')
                <p class="error">{{$message}}</p>
                @enderror
            </div>
            <div class="label-div">
                <button class="send-login" type="submit"></button>
                <button class="back-page" onclick="location='{{ url("/principal") }}'" type="button"></button>
            </div>
        </section>
    </form>
</html>