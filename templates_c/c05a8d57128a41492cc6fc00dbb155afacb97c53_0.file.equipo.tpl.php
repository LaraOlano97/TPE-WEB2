<?php
/* Smarty version 4.2.1, created on 2022-10-13 22:50:36
  from 'D:\xampp\htdocs\TPE-WEB2\templates\equipo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63487a1c4f77d7_75088727',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c05a8d57128a41492cc6fc00dbb155afacb97c53' => 
    array (
      0 => 'D:\\xampp\\htdocs\\TPE-WEB2\\templates\\equipo.tpl',
      1 => 1665693765,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headNav.tpl' => 1,
    'file:jugadores.tpl' => 1,
  ),
),false)) {
function content_63487a1c4f77d7_75088727 (Smarty_Internal_Template $_smarty_tpl) {
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
