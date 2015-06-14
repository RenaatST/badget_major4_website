<div id="formm" class="formdiv">
    <form action="" method="post">  
        <fieldset>
            <legend></legend>
            <label for="txtzoek" class="zoeklabel">Zoek jouw beker</label>
            <input type="text" name="txtzoek" required id="txtzoek" value="" />
            <input type="submit" name="btnzoek" id="btnzoek" value="Zoek" />
        </fieldset>
    </form>
</div>


    <ol>
        <?php foreach($zoekbekers as $zoekbeker): ?>                
           <li>
           <img src="./images/bekers/<?php echo $zoekbeker['naam']; ?>.png" class="bekerfoto" alt="" width="200" />
            <p><?php echo $zoekbeker['naam']; ?></p>
            </li>
        <?php endforeach; ?>
    </ol>