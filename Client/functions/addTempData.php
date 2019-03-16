<?php
require_once("./DB-config.php");
if(isset($_GET['otp']) && isset($_GET['volume']) && isset($_GET['mass'])){
    $otp = $_GET['otp'];
    $volume = $_GET['volume'];
    $mass = $_GET['mass'];
    try{
        $sql = "INSERT INTO temp (otp,volume,mass) VALUES ($otp,$volume,$mass) ";   
        $pdo->exec($sql);
        echo "Records inserted successfully.";
    } catch(PDOException $e){
        die("ERROR: Could not able to execute $sql. " . $e->getMessage());
    }
}
// Close connection
unset($pdo);
?>