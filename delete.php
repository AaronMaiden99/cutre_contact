<?php 
    if($_POST){
        $conn = mysqli_connect("127.0.0.1", "root", "", "cutre_contacts");
        $id = $_POST["id"];
      
        $statement = mysqli_prepare($conn, 'delete from contacts where id=?' );
        mysqli_stmt_bind_param($statement, 'i', $id);
        mysqli_stmt_execute($statement);
       
        header("Location: index.php");
    }
?>