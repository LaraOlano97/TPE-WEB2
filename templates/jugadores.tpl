   <main class="container mt-5">
        <section class="equipos">
    
            {foreach $jugadores as $jugador}
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">{$jugador->Nombre} </h5>
                <br>
                  <p class="card-text">Edad: {$jugador->Edad}</p>
                <p class="card-text">peso: {$jugador->Peso}kg</p>
            </div>
            </div>
     {/foreach}     
        </section> 
    </main>
</div>
  