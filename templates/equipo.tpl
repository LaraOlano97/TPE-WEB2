{include 'headNav.tpl'}
<div class="jumbotron">
  <h1 class="display-4">{$equipo->NombreDelEquipo}</h1>
  <p class="lead">El capitan del equipo es:  {$equipo->CapitanEquipo}</p>
  <hr class="my-4">
  <p> El equipo es de la zona:  {$equipo->Zona}</p>

  <h2>Jugadores de {$equipo->NombreDelEquipo}</h2>

  {include 'jugadores.tpl'}
