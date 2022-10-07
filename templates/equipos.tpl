   (include file 'headNav.tpl')
   <main class="container mt-5">
        <section class="equipos">
            <?php foreach($db as $clave => $equipo){?>
            <div class="card">
                <div class="card-body">
                <h5 class="card-title"><?php echo $equipo->Zona?></h5>
                <p class="card-text"><?php echo $equipo->Nombre del Equipo?></p>
                < <a class="btn btn-outline-primary" href="<?php echo 'equipo/'.$clave;?>">Leer más</a> 
            </div>
            </div>
            <?php } ?>       
        </section> 
    </main>