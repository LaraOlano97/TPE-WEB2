<?php
/* Smarty version 4.2.1, created on 2022-10-13 22:40:04
  from 'C:\xampp\htdocs\TPE-WEB2\templates\jugadores.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634877a4e0d1f2_45777423',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f680278eafd5162c74e0dfe919eb2bce18c34457' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB2\\templates\\jugadores.tpl',
      1 => 1665693559,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634877a4e0d1f2_45777423 (Smarty_Internal_Template $_smarty_tpl) {
?>   <main class="container mt-5">
        <section class="equipos">
    
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['jugadores']->value, 'jugador');
$_smarty_tpl->tpl_vars['jugador']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['jugador']->value) {
$_smarty_tpl->tpl_vars['jugador']->do_else = false;
?>
            <div class="card">
                <div class="card-body">
                <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['jugador']->value->Nombre;?>
 </h5>
                <br>
                  <p class="card-text">Edad: <?php echo $_smarty_tpl->tpl_vars['jugador']->value->Edad;?>
</p>
                <p class="card-text">peso: <?php echo $_smarty_tpl->tpl_vars['jugador']->value->Peso;?>
kg</p>
            </div>
            </div>
     <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>     
        </section> 
    </main>
</div>
  <?php }
}
