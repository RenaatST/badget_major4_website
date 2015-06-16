<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/screen.css">
    <title>MAES &amp; PUKKELPOP</title>
    <link rel="stylesheet" href="./css/bebas.css" type="text/css" charset="utf-8" />
    <link rel="stylesheet" href="./css/bebaslight.css" type="text/css" charset="utf-8" />
    
    <meta property="og:image" content="./images/bg.jpg"/>
    <link rel="image_src" href="./images/bg.jpg"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
        
</head>
<body>
    
    
    <article class="intro">

        <img data-0="-ms-transform: rotate(7deg); /* IE 9 */-webkit-transform: rotate(7deg); /* Chrome, Safari, Opera */transform: rotate(7deg);" data-500="-ms-transform: rotate(14deg); /* IE 9 */-webkit-transform: rotate(14deg); /* Chrome, Safari, Opera */transform: rotate(14deg);" class="bekertopp" src="./images/bekertop.png" alt="" height="600"/>
        

        <header>
            <h1 class="hide">
            Pukkelpop 2015
            </h1>
        </header>


        <div class="menu-collapsed">
          <div class="bar"></div>
        <nav>
            <h1><span class="hide">Navigatie<span></h1>
            <ul>
                <li><a href="#" class="home">Home</a></li>
                <li><a href="#" class="navcups">Cups</a></li>
                <li><a href="#" class="navweds">Wedstrijd</a></li>
                <li><a href="#" class="navpromo">Promofilm</a></li>
                <li><a href="#" class="navapp">App Store</a></li>
                <li><a href="#" class="navprijs">Prijzen</a></li>
            </ul>
        </nav>
        </div>

    
        <header>
            <h1 class="logo">
            <span class="hide">Maes & Pukkelpop</span>
                <a href="#">
                    <img src="./images/logo.png" alt="logo" class="logoimage" width="300"/>
                </a>
            </h1>

        </header>

        <h2>Word maat van Maes en win jouw gepersonaliseerde beker!</h2>
        <p>Iedereen wil deze prestigieuze MAES CUP winnen. Zoek je tegenstander en strijd om de beker! Sprint, balanceer, en maak vrienden. Iedereen wil deze prestigieuze MAES CUP winnen. </p>
        <!--<img class="bekertopklein" src="./images/kleinebekertop.png" alt="" height="150"/>-->
            <img src="./images/mannekes.png" alt="mannekes" class="mannekess" width="70"/>
        

    
        <?php echo file_get_contents("./view/images/zoek.php"); ?>

        
    </article>

    
    <article class="container">
        <header>
            <h1 class="hide">Personaliseer jouw beker en win!</h1>
        </header>
    

    <?php echo $content; ?>



    </article>
    <script type="text/javascript" src="./js/skrollr.min.js"></script>
    <script type="text/javascript" src="./js/vendor/modernizr.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="./js/script.dist.js" type="text/javascript"></script>
 

</body>
</html>