@props(['page'])
<head>
    <link href="{{ ('assets/css/main.css') }}" rel="stylesheet">
    <link href="{{ ('assets/css/form.css') }}" rel="stylesheet">
    <script src="{{ ('assets/js/create-user.js') }}"></script> <!--Passar pro laravel depois-->
</head>

<div class="card">
    <div class="card-modal card-login card-default unselectable">
        <div class="align-center">
            <h2>{{$page["title"]}}</h2>
        </div>
        @if($page['type'] == 'login')
            <x-login-user />
        @elseif($page['type'] == 'new_user')
            <x-new-user />
        @elseif($page['type'] == 'new_member')
            <x-new-member/>
        @endif
    </div>
</div> 
