<?php
    function saveToDB(){
        $servername = "localhost";
        $username = "KP23";
        $password = "Kyuss879.";
        $dbname = "test";

         //create connection
         $conn  = new mysqli($servername, $username, $password, $dbname);

         // Check connection
         if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
         }

        $sql = "INSERT INTO tbl_wedstrijd(NAAM, ADRES, POSTCODE, GEMEENTE, TELEFOONNUMMER, `E-MAILADRES`, GEBOORTEDATUM, `TITEL FOTO`, CAMERA, LENS, `BESCHRIJVING FOTO`)
        VALUES ('".$_POST["naam"]."','".$_POST["adres"]."','".$_POST["postcode"]."','".$_POST["gemeente"]."','".$_POST["telefoonnummer"]."','".$_POST["e-mailadres"]."','".$_POST["geboortedatum"]."','".$_POST["fotoTitel"]."','".$_POST["camera"]."','".$_POST["lens"]."','".$_POST["fotoBeschrijving"]."');";

        if($conn->query($sql) === true){
            echo "New record created!";
        }
        else{
            echo "ERROR: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }

    function printDB(){
        $servername = "localhost";
        $username = "KP23";
        $password = "Kyuss879.";
        $dbname = "test";

         //create connection
         $conn  = new mysqli($servername, $username, $password, $dbname);

         // Check connection
         if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
         }
         
    }
?>