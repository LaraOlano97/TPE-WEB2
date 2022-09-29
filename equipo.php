<?php
function showEquipos(){
    require_once 'DB.php';
    $DB = getequipos(); 
      ?>
    <main class="container mt-5">
        <section class="equipos">
            <?php foreach($DB as $clave => $equipo){?>
            <div class="card">
            <img src="<?php echo $equipo->img?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $equipo->title?></h5>
                <p class="card-text"><?php echo $equipo->text?></p>
                <!-- <a class="btn btn-outline-primary" href="<?php echo 'equipo/'.$clave;?>">Leer más</a> -->
            </div>
            </div>
            <?php } ?>       
        </section> 
    </main>
    <?php
    require_once 'templates/footer.html';
}

// function showEquipo ($id){
//     require_once 'DB.php'; 
//     if (!isset($id)){
//         echo '<div class="alert alert-danger">No se especificó el equipo.</div>';
//     }
//     else if ($id<0 || $id>=count($DB)){
//         echo '<div class="alert alert-danger">No existe un equipo con ese id.</div>';
//     }
//     else{
//         $equipo = $DB[$id]; 
//     ?> 

//     <section class="equipo">
//         <div class="card">
//             <img src="<?php echo $equipo->img?>" class="card-img-top" alt="...">
//             <div class="card-body">
//             <h5 class="card-title"><?php echo $equipo->title?></h5>
//             <p class="card-text"><?php echo $equipo->text?></p>    
//             </div>
//         </div>
//     </section>
//     <?php }
//     require_once 'templates/footer.html';
// }?>
