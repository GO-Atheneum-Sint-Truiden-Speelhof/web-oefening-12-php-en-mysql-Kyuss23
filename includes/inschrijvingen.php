<?php 
    include("scripts/function.php");
?>

<div class="jumbotron">
	<h1 class="display-4">Deelnemers Wedstrijd:</h1>
</div>
<div class="row">
    <div id="table">
        <table class="table table-bordered table-sm table-dark table-striped">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Naam</td>
                    <td>Adres</td>
                    <td>Postcode</td>
                    <td>Gemeente</td>
                    <td>Telefoonnummer</td>
                    <td>E-mailadres</td>
                    <td>Geboortedatum</td>
                    <td>Titel foto</td>
                    <td>Camera</td>
                    <td>Lens</td>
                    <td>Beschrijving foto</td>
                </tr>
            </thead>
            <tbody>
                <?php 
                    printDB();
                ?>
            </tbody>
        </table>
    </div>
</div>