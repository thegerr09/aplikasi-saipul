<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>APLIKASI SAIPUL</title>
        {{ stylesheet_link("css/bootstrap.min.css") }}
    </head>
    <body>
        <div class="container">
            <div id="info" style="position: absolute; right: 20px;top: 30px; z-index: 10000;"></div>
            {{ content() }}
        </div>
        {{ javascript_include("js/jquery.min.js") }}
        {{ javascript_include("js/bootstrap.min.js") }}
        {{ javascript_include("js/scripts.js") }}
    </body>
</html>
