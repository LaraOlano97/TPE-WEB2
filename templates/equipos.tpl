{include 'headNav.tpl'}

   <main class="container mt-5">
        <section class="equipos">
            {foreach $equipos as $equipo}
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">{$equipo->NombreDelEquipo} </h5>
                <br>
                  <p class="card-text">Capitán del equipo: {$equipo->CapitanEquipo}</p>
                <p class="card-text">Zona del equipo: {$equipo->Zona}</p>
                 <a class="btn btn-outline-primary" href="equipos/{$equipo->id_equipo}" >Leer más</a> 
            </div>
            </div>
     {/foreach}     
        </section> 
    </main>