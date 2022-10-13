<?php
/* Smarty version 4.2.1, created on 2022-10-13 03:34:38
  from 'C:\xampp\htdocs\TPE-WEB2\templates\equipos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63476b2e133606_22280437',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9131a167d9ebd82ea50f36552093912bfa366e63' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB2\\templates\\equipos.tpl',
      1 => 1665624876,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headNav.tpl' => 1,
  ),
),false)) {
function content_63476b2e133606_22280437 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:headNav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
   <main class="container mt-5">
        <section class="equipos">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['equipos']->value, 'equipo');
$_smarty_tpl->tpl_vars['equipo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['equipo']->value) {
$_smarty_tpl->tpl_vars['equipo']->do_else = false;
?>
            <div class="card">
                <div class="card-body">
                <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['equipo']->value->NombreDelEquipo;?>
 </h5>
                <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['equipo']->value->Zona;?>
</p>
                 <a class="btn btn-outline-primary" href="equipos/<?php echo $_smarty_tpl->tpl_vars['equipo']->value->id_equipo;?>
" >Leer más</a> 
            </div>
            </div>
     <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>     
        </section> 
    </main><?php }
}
