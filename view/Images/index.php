<article class="cups">

	<header>
        <h1>De Cups</h1>
    </header>

	<ul>
	<?php foreach ($bekers as $beker): ?>
		<li class="cup">
			<figure>
			  <img src="./images/bekers/<?php echo $beker['naam']; ?>.png" class="bekerfoto" alt="" />
			  <figcaption><p><?php echo $beker["naam"]; ?></p></figcaption>
			</figure>
		</li>

	<?php endforeach; ?>
	</ul>


</article>


<article class="stappenplan1">
<article class="stappenplan">

	<header>
        <h1>Wat moet je doen?</h1>
        <p>Volg deze stappen om een zelf samengestelde MAES CUP te winnen!</p>
    </header>


	
	<ul>
	<img src="./images/swirl.png" alt="" class="swirls">
	<img id="skrollr-body"src="./images/confetti.png" alt="" class="conf1"  data-1200="opacity:0;" data-1500="opacity:1;">
	<img id="skrollr-body" src="./images/confetti2.png" alt="" class="conf2" data-1200="opacity:0;" data-1500="opacity:1;">
	 <li>
	 	
		<figure data-500="" data-1200="">
		  <img src="./images/beer.png" alt="" width="200" >
		  <h2>Haal een pintje</h2>
		  <figcaption>Koop een pintje aan één van vele bars op het festivalterrein!</figcaption>
		</figure>
	 </li>
	 <li>
		
		<figure>
		  <img src="./images/pattern.png" alt="" width="200">
		  <h2>Personaliseer</h2>
		  <figcaption>Neem een foto en personaliseer jouw CUP!</figcaption>
		</figure>
	 </li>
	 <li>
		
		<figure data-500="" data-1200="">
		  <img src="./images/polaroid.png" alt="" width="200">
		  <h2>Speel en win!</h2>
		  <figcaption>Zoek je maat, en ga de strijd aan om jouw CUP te winnen!</figcaption>
		</figure>
	 </li>
	</ul>


</article>
</article>






<article class="promofilm">
	<header>
        <h1>Promovideo Maes &amp; Pukkelpop</h1>
    </header>
	
	<div class="divaroundmov">
		<video poster="./mov/postermov.jpg" id="video" height="auto" controls>
		  <source src="./mov/mov.mp4" type="video/mp4">
		  <source src="./mov/mov.ogv" type="video/ogg">
			   Sorry, your browser doesn't support embedded videos, 
		  but don't worry, you can <a href="./mov/mov.ogg">download it</a>
		  and watch it with your favorite video player!
		</video>
	</div>

</article>



<article class="appstore">



    <section class="imagesiphones">
    	<img src="./images/iphone1.png" alt="screen1" class="screen1" width="220"/>
		<img data-2000="-ms-transform: rotate(0deg); /* IE 9 */-webkit-transform: rotate(0deg); /* Chrome, Safari, Opera */transform: rotate(0deg);"  data-2800="-ms-transform: rotate(-13deg); /* IE 9 */-webkit-transform: rotate(-13deg); /* Chrome, Safari, Opera */transform: rotate(-13deg);" src="./images/iphone2.png" alt="screen2" class="screen2" width="250" height="400"/>
		<img data-2000="-ms-transform: rotate(0deg); /* IE 9 */-webkit-transform: rotate(0deg); /* Chrome, Safari, Opera */transform: rotate(0deg);"  data-2800="-ms-transform: rotate(13deg); /* IE 9 */-webkit-transform: rotate(13deg); /* Chrome, Safari, Opera */transform: rotate(13deg);" src="./images/iphone3.png" alt="screen3" class="screen3" width="250" height="400"/>
    </section>

    


	<section class="tekstappstore">
		<header>
        	<h1>Beschikbaar in de App Store</h1>
	    </header>

	    <p>Winnen of verliezen, meedoen is altijd even tof! Maak kans op een goodie bag van Maes. Download snel de app in de app store en wordt een maat van maes!</p>
		</br>
		<img src="./images/iphone1.png" alt="screen" class="screen_new hide" width="220"/>
		<a href="http://appstore.com/ocarina" target="_blank"><img src="./images/buttonapp.png" alt="" width="140"><span class="hide">Available in app store now!</span>
			
		</a>

	</section>
	

	
	

</article>
<div class="dummy">&nbsp;</div>

<article class="prijs">
	<header>
        <img src="./images/goodiegbag.png" alt="" width="370"> <h1>voor de winnaars!</h1>
    </header>
	
	<p>Als jij alle opdrachten hebt volbracht dan kan je vervolgens je gewonnen badges inruilen tegen een Maes-goodiebag. Hierin zitten verschillende coole hebbedingetjes! Download  nu de app en speel mee!</p>

	<a href="#" class="terugnaarboven" id="terug">terug naar boven</a>
</article>



