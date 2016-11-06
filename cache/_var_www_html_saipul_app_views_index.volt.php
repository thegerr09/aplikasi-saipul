<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>APLIKASI SAIPUL</title>
        <?= $this->tag->stylesheetLink('css/bootstrap.min.css') ?>
    </head>
    <body>
        <div class="container">
            <div id="info" style="position: absolute; right: 20px;top: 30px; z-index: 10000;"></div>
            <?= $this->getContent() ?>
        </div>
        <?= $this->tag->javascriptInclude('js/jquery.min.js') ?>
        <?= $this->tag->javascriptInclude('js/bootstrap.min.js') ?>
        <?= $this->tag->javascriptInclude('js/scripts.js') ?>
    </body>
</html>
