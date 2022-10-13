<?php
/* Smarty version 4.2.1, created on 2022-10-13 03:43:08
  from 'C:\xampp\htdocs\TPE-WEB2\templates\equipo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63476d2c0903e1_82236669',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db3de85fade9992a90e78e65489869a4116a01f4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB2\\templates\\equipo.tpl',
      1 => 1665625385,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headNav.tpl' => 1,
  ),
),false)) {
function content_63476d2c0903e1_82236669 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:headNav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div>
          <h2><?php echo $_smarty_tpl->tpl_vars['equipo']->value->NombreDelEquipo;?>
</h2>
          <h3><?php echo $_smarty_tpl->tpl_vars['equipo']->value->Zona;?>
</h3>
         
        </div>
    </div><?php }
}
