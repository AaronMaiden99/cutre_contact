<?php 
    if($_POST){
        $conn = mysqli_connect("127.0.0.1", "root", "", "cutre_contacts");
        $id = $_POST["id"];
        mysqli_query($conn, "delete from contacts where id=$id;");
        header("Location: index.php");
    }
?>