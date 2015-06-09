<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/screen.css">
    <title>MAES &amp; PUKKELPOP</title>
    <link rel="stylesheet" href="./css/bebas.css" type="text/css" charset="utf-8" />
    <link rel="stylesheet" href="./css/bebaslight.css" type="text/css" charset="utf-8" />
    <link rel="stylesheet" href="./css/ashley.css" type="text/css" charset="utf-8" />
    
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

    
    <article class="intro">

        <header>
            <h1 class="hide">
            Pukkelpop 2015
            </h1>
        </header>
        
        <nav>
            <h1><span class="hide">Navigatie<span></h1>
            <ul>
                <li><a href="#" class="navcups">Cups</a></li>
                <li><a href="#" class="navweds">Wedstrijd</a></li>
                <li><a href="#" class="navapp">App Store</a></li>
                <li><a href="#" class="navpromo">Promofilm</a></li>
                <li><a href="#" class="navprijs">Prijzen</a></li>
            </ul>
        </nav>

    
        <header>
            <h1 class="logo">
            <span class="hide">Maes & Pukkelpop</span>
                <a href="">
                    <img src="./images/logo.png" alt="logo" width="400" height="300"/>
                </a>
            </h1>
        </header>

        <h2>Word maat van Maes en win jouw gepersonaliseerde beker!</h2>
        <p>Iedereen wil deze prestigieuze MAES CUP winnen. Zoek je tegenstander en strijd om de beker! Sprint, balanceer, en maak vrienden. Iedereen wil deze prestigieuze MAES CUP winnen. </p>
        
            <img src="./images/mannekes.png" alt="mannekes" class="mannekess" width="100" height="70"/>

        <form action="" method="post">
            <fieldset>
                <legend></legend>
                <label for="txtzoek" class="zoeklabel">Zoek jouw beker</label>
                <input type="text" name="txtzoek" required id="txtzoek" value="" />
                <input type="submit" name="btnzoek" id="btnzoek" value="Zoek" />
            </fieldset>
        </form>



    </article>

    
    <article class="container">
        <header>
            <h1 class="hide">Personaliseer jouw beker en win!</h1>
        </header>

    <?php echo $content; ?>



    </article>




    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="./js/script.dist.js" type="text/javascript"></script>
    <script type="text/javascript" src="./js/skrollr.min.js"></script>
    <script type="text/javascript">
    var s = skrollr.init();
    </script>
</body>
</html>