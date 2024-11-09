<?php
    function connectToDB(){
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
         return $conn;

    }
    function saveToDB(){
        $conn = connectToDB();
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
        $conn = connectToDB();
        $sql = "SELECT * FROM `tbl_wedstrijd`";
        
        $result = $conn->query($sql);
        while ($row = $result->fetch_row()){
            echo '<tr>';
            for ($i = 0; $i < count($row); $i++){
                echo "<td>";
                echo "$row[$i]";
                echo "</td>";
            }
            echo "</tr>";
        }
    }  
    
    function login(){
        $conn = connectToDB();
        $user = $_POST['username'];  
        $pwd = $_POST['password'];  

        $sql = "SELECT * FROM `tbl_gebruikers` WHERE Naam = '$user' AND Passwoord = '$pwd'";
        $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<p>Login succesvol!</p>";
        header("refresh: 3; URL=begin.php?page=inschrijvingen");
    }

    $conn->close();
    }
?>