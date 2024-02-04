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
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
            <form class="d-flex my-2" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
             </form>
       
      </ul>
     
    </div>
  </div>
</nav>

<main class="container">
    <form class="d-flex justify-content-center">
            <div class="card mt-4">
                <div class="card-header text-center">New Contact</div>
                <div class="card-body  px-5 text-center">
                      <input class="form-control" type="text" placeholder="Full name">
                      <input class="form-control mt-3" type="text" placeholder="Phone number">
                     <div class="row mt-3">
                          <a href="#" class="btn btn-danger col me-3">Cancel</a>
                          <a href="#" class="btn btn-primary col">Add</a>
                     </div>
                </div>
            </div>
    </form>
</main>
    
</body>
</html>