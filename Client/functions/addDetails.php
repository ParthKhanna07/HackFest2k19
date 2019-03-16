<?php
require_once("./DB-config.php");
if(isset($_POST['volume']) && isset($_GET['mass']) && isset($_GET['address'])&& isset($_GET['inputAmount'])){
    $output = $_GET['volume'];
    $input = $_GET['inputAmount'];
    $address = $_GET['address'];    
    $mass = $_GET['mass'];
    try{
        $sql = "INSERT INTO transactions (input,output,address,mass) VALUES ($input,$output,$address,$mass) ";   
        $pdo->exec($sql);
        header('Location: http://www.driller.000webhostapp.com/client/');
    } catch(PDOException $e){
        die("ERROR: Could not able to execute $sql. " . $e->getMessage());
    }
}
// Close connection
unset($pdo);
?>