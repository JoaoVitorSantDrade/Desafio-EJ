<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ ('assets/css/main.css') }}" rel="stylesheet"> <!--Lembrar de colocar {{ }}-->        <!--Fonts-->
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@300;400;700;900&display=swap');
        </style>
        <title>navbar</title>
        <!--<link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.min.css')}}">
        <script type="text/javascript" src="{{URL::asset('assets/js/jquery.min.js')}}"></script>-->
    </head>
    <div class="values-box transition">
        <div class="values">
            <div class="values-title">
                <h3>$title</h3>
                <img class="unselectable" <?php echo "src='{{ asset('assets/Icons/{$icon_id}.svg') }}'";?>
            </div>
            <p>   
                $content
            </p>
        </div>
    </div>
</html>