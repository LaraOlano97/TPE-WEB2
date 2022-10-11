<?php
function showEquipos(){
    require_once 'db.php';
    // require_once('libs/smarty/Smarty.class.php');
    $db = getEquipos(); 
    // $smarty = new Smarty();
    //   $smarty->assign('titulo',”Equipos”);
    //  $smarty->assign('equipos', $BBDD Equipos.sql);
      ?>
      <!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="CONTENT-TYPE" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="styles/style.css"/>
        <title>NBA||BASKET</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link rel="stylesheet" href="css/equipo.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">NBA||Page</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Equipos</a>
                  </li>
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Dropdown
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>

                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav>
      <div class="col-4"> 

          <div class="list-group" i	d="list-tab" role="tablist"> 

              <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Equipos</a> 

                 </body>
</html>
    <main class="container mt-5">
        <section class="equipos, flex">
            <?php foreach($db as $clave => $equipo){?>
            <div class="card">
                <div class="card-body">
                <h5 class="card-title"><?php echo $equipo->NombreDelEquipo?></h5>
                <!-- <p class="card-text">-->
                    <?php echo('Zona: '. $equipo->Zona.'<br>'); echo ('Capitan:  ' .$equipo->CapitanEquipo. "<br>")?>
          <!--  </p> -->
                <a class="btn btn-outline-primary" href="<?php echo 'equipo/'.$clave;?>">Leer más</a> 
            </div>
            </div>
            <?php } ?>       
        </section> 
    </main>
    <?php
   
}
showEquipos()
?>
