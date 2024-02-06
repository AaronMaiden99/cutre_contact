<?php 
    if($_POST){
        $id = $_POST["id"];

        $conn =  new PDO("mysql:host=127.0.0.1;dbname=cutre_contacts", "root", "");

        $statement = $conn->prepare("delete from contacts where id = :id");
        // $statement->bindParam(":id", $id);
        $statement->execute([":id"=>$id]);//le pasamos parametros directamente


        header("Location: index.php");
    }
?>