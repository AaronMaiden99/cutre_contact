<?php 
    $contacts = [];

    $conn = new PDO("mysql:host=127.0.0.1;dbname=cutre_contacts", "root", "");
    
    if($_POST){
        
        $filter = "%".$_POST["filter"]."%"; //no podemos meter % en el prepare, por lo que lo metemos directamente aquí
        $result = $conn->prepare('select* from contacts where name like :filter');
      
        $result->execute([":filter"=>$filter]);
        //no hay bind_result 
      
        while($contact = $result->fetch(PDO::FETCH_ASSOC)){
            $contacts[] = $contact;
        }
    }else{
        //Aqui no hace falta preparar la consulta porque no está paramaetrizada, pero sí puede ponerse con estilo POO
        $result = $conn->query("select * from contacts");
              
        while($contact = $result->fetch(PDO::FETCH_ASSOC)){ //PDO::FETCH_ASSOC es para que devuelva un array asociatio
             $contacts[] = $contact;
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.3.2/darkly/bootstrap.min.css" integrity="sha512-JjQ+gz9+fc47OLooLs9SDfSSVrHu7ypfFM7Bd+r4dCePQnD/veA7P590ovnFPzldWsPwYRpOK1FnePimGNpdrA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="styles/app.css">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-md bg-warning-subtle">
  <div class="container-fluid">
    <img width="60" src="img/logo.jpeg" alt="">
    <a class="navbar-brand ms-3" href="index.php">Cutre_contacts</a>
    <!-- boton desplegable -->
    <button class="navbar-toggler bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Contenido desplegable -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto ">
            <!-- Boton añadir contacto-->
            <li class="nav-item me-3 my-2">
                <a href="add.php" class="btn btn-outline-primary">Add Contact</a>
            </li>
             <!-- Buscar contacto-->
            <form action="index.php" method="POST" class="d-flex my-2" role="search">
                <input name="filter" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <input value="Search" class="btn btn-outline-success" type="submit">
             </form>
       
      </ul>
     
    </div>
  </div>
</nav>

<main class="container">
    <div class="row">
        
        <?php foreach($contacts as $contact): ?>
        <!-- Contacto -->
        <div class="col-md-4">
            <div class="card px-3 mt-4">
                <div class="card-body  text-center">
                    <h5 class="card-title fs-2"><?= $contact["name"] ?></h5>
                    <p class="card-text"><?= $contact["phone"] ?></p>
                    <div class="row">
                        <!-- Eliminar contacto -->
                        <form class="col me-3 p-0" action="delete.php" method="POST">
                            <input class="dont-show" name="id" value="<?= $contact["id"] ?>">
                            <input type="submit" value="Delete" class="btn btn-danger w-100">
                        </form>
                         <!-- Editar contacto -->
                         <form class="col p-0" action="edit.php" method="GET">
                             <input class="dont-show" name="id" value="<?= $contact["id"] ?>">
                             <input class="dont-show" name="name" value="<?= $contact["name"] ?>">
                             <input class="dont-show" name="phone" value="<?= $contact["phone"] ?>">
                             <input type="submit" value="Edit" class="btn btn-warning w-100">
                         </form>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach ?>
    </div>
</main>
    
</body>
</html>