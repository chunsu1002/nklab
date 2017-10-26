<!DOCTYPE html>
<html lang="ja">
<head>
    <title>NkLab</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    //bootstrap関連付け
    Asset::add_path('assets/bootstrap/css/', 'css');
    Asset::add_path('assets/bootstrap/js/', 'js');
    Asset::add_path('assets/bootstrap/img/', 'img');
    ?>
    <?php echo Asset::css('bootstrap.css'); ?>
    <?php echo Asset::css('top.css'); ?>
</head>
<body>
    <header>
        <?php echo $header; ?>
    </header>
    <div class="container">
        <?php echo $content; ?>
    </div>
    <footer>
        <?php echo $footer; ?>
    </footer>
    <?php
    //js読み込み
    echo Asset::js('jquery.js');
    echo Asset::js('bootstrap.js');
    //追加jsグループ
    echo Asset::render('add_js');
    ?>
</body>
</html>