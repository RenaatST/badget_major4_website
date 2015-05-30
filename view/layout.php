<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/screen.css">
    <title>MAES &amp; PUKKELPOP</title>
    <link rel="stylesheet" href="css/bebas.css" type="text/css" charset="utf-8" />
    <link rel="stylesheet" href="css/bebaslight.css" type="text/css" charset="utf-8" />
    <link rel="stylesheet" href="css/ashley.css" type="text/css" charset="utf-8" />
    <meta property="og:image" content="./images/bg.jpg"/>
    <link rel="image_src" href="./images/bg.jpg"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
    <script>
        WebFontConfig = {
            custom: {
                families: ['dosis'],
            }
        };
        (function() {
            var wf = document.createElement('script');
            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
            '://ajax.googleapis.com/ajax/libs/webfont/1.5.6/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
    </script>

        
</head>
<body>
    <header>
        <h1 class="logo">Maes &amp; Pukkelpop</h1>
    </header>

    <article id="container">

    <?php echo $content; ?>

    </article>


    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="js/script.dist.js" type="text/javascript"></script>
</body>
</html>