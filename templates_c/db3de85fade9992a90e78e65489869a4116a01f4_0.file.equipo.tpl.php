<?php
/* Smarty version 4.2.1, created on 2022-10-13 20:17:46
  from 'C:\xampp\htdocs\TPE-WEB2\templates\equipo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6348564ae81ea6_50702507',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db3de85fade9992a90e78e65489869a4116a01f4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB2\\templates\\equipo.tpl',
      1 => 1665684976,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headNav.tpl' => 1,
    'file:jugadores.tpl' => 1,
  ),
),false)) {
function content_6348564ae81ea6_50702507 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:headNav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="jumbotron">
  <h1 class="display-4"><?php echo $_smarty_tpl->tpl_vars['equipo']->value->NombreDelEquipo;?>
</h1>
  <p class="lead">El capitan del equipo es:  <?php echo $_smarty_tpl->tpl_vars['equipo']->value->CapitanEquipo;?>
</p>
  <hr class="my-4">
  <p> El equipo es de la zona:  <?php echo $_smarty_tpl->tpl_vars['equipo']->value->Zona;?>
</p>

  <h2>Jugadores de <?php echo $_smarty_tpl->tpl_vars['equipo']->value->NombreDelEquipo;?>
</h2>

  <?php $_smarty_tpl->_subTemplateRender('file:jugadores.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
