<?php 
    if($_POST){
        $id = $_POST["id"];

        $conn =  new mysqli("127.0.0.1", "root", "", "cutre_contacts");

        $statement = $conn->prepare("delete from contacts where id = ?");
        $statement->execute([$id]);

        header("Location: index.php");
    }
?>