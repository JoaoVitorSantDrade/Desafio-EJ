@props(['member'])
<div class="align-center">
    <div class="values-box2 transition margin-bottom margin-top">
        <div class="values">
            <div class="values-title">
                <h3>{{$member->name}}</h3>
                <img class="unselectable" src="assets/Icons/thoughts/no-thought.svg">
            </div>
            <div class="subtitle">
                <div class="values-subtitle">
                    <h3>{{$member->cargo}}</h3>
                </div>
            </div>
            <p>   
                <b>Placeholder de descrição</b><br><br>
                Adicione uma <b>descrição</b> ao seu banco de dados e ela aparecerá aqui!
            </p>
        </div>
    </div>
</div>

