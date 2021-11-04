<?php 

$host = "localhost";
$name = "journal_tech";
$user = "root";
$pass = "";



    try 
    {
        $db = new PDO ("mysql:host=$host;dbname=$name", $user, $pass);

        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (PDOException $e) 
    {
        $error = "Erreur :" . $e->getMessage() . "<br>";
        print $error;
        die;
    }

?>
