<?php

    include("scripts/function.php");

    $bericht = 
    "NAAM: ".$_POST["naam"]."
    ADRES: ".$_POST["adres"]."
    POSTCODE: ".$_POST["postcode"]."
    GEMEENTE: ".$_POST["gemeente"]."
    TELEFOONNUMMER: ".$_POST["telefoonnummer"]."
    E-MAILADRES: ".$_POST["e-mailadres"]."
    GEBOORTEDATUM: ".$_POST["geboortedatum"]."
    TITEL FOTO: ".$_POST["fotoTitel"]."
    CAMERA: ".$_POST["camera"]."
    LENS: ".$_POST["lens"]."
    BESCHRIJVING FOTO: ".$_POST["fotoBeschrijving"];

    $verzender = "FROM: ".$_POST["naam"]." <".$_POST["e-mailadres"]."> ";

    if (mail("KP23@localhost", "Deelname Wedstrijd", $bericht, $verzender)){
        echo "BERICHT VERZONDEN <br>";
    }
    else{
        echo "BERICHT NIET VERZONDEN <br>";
    }

    savetoDB();
?>

<div class="jumbotron">
	<h1 class="display-4">Jouw gegevens</h1>
</div>
<div class="row">
    <div class="col-md-12 invoer">
        <?php 
            echo '<p>Naam: '.$_POST["naam"].'</p>';
            echo '<p>Adres: '.$_POST["adres"].'</p>';
            echo '<p>Postcode: '.$_POST["postcode"].'</p>';
            echo '<p>Gemeente: '.$_POST["gemeente"].'</p>'; 
            echo '<p>Telefoonnummer: '.$_POST["telefoonnummer"].'</p>'; 
            echo '<p>E-mailadres: '.$_POST["e-mailadres"].'</p>'; 
            echo '<p>Geboortedatum: '.$_POST["geboortedatum"].'</p>'; 
            echo '<p>Titel foto: '.$_POST["fotoTitel"].'</p>'; 
            echo '<p>Camera: '.$_POST["camera"].'</p>'; 
            echo '<p>Lens: '.$_POST["lens"].'</p>'; 
            echo '<p>Beschrijving foto: '.$_POST["fotoBeschrijving"].'</p>'; 
        ?>
    </div>
</div>