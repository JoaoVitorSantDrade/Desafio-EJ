@props(['members'])

<section class="values-container">
    <h1>Membros da equipe</h1> <!--Depende da pagina-->
    <div class="flex-column">
        <div id="member-search" class="card">
            <div class="card-modal card-login card-default unselectable">
                <div class="align-center">
                    <h2>Pesquisa de membros</h2>
                </div>
                <div class="label-div ">
                    <form action="/equipe">
                        <input name="search" type="text" class="input-member">
                        <button class="visibility-icon search pointer" type="submit"></button>
                    </form>
                </div>
            </div>
        </div>
        @unless(count($members) == 0)

        @foreach($members as $member)
        <!--Membros-->
        <x-member-component :member="$member" />
        @endforeach
        @else
        <x-member-not-found/>
        @endunless
    </div>
</section>