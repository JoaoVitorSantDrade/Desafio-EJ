@props(['thought'])

<div class="values-box transition">
    <div class="values">
        <div class="values-title">
            <h3>{{$thought->title}}</h3>
            <img class="unselectable" src="assets/Icons/thoughts/<?="{$thought['id-icon']}-icon.svg" ;?>" >
        </div>
        <p>   
            {{$thought->content}}
        </p>
    </div>
</div>


