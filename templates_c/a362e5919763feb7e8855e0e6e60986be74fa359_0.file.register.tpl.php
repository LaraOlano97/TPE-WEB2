<?php
/* Smarty version 4.2.1, created on 2022-10-13 19:49:10
  from 'C:\xampp\htdocs\TPE-WEB2\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63484f967ce621_67070570',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a362e5919763feb7e8855e0e6e60986be74fa359' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB2\\templates\\register.tpl',
      1 => 1665682896,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63484f967ce621_67070570 (Smarty_Internal_Template $_smarty_tpl) {
?> <head>
        <meta http-equiv="CONTENT-TYPE" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="styles/style.css"/>
        <title>NBA||BASKET</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
            <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/cabecera.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
         </head>
<body>

   <form action="validar.php" method="post">

   <h1 class="animate__animated animate__backInLeft">Sistema de registro para administradores</h1>

   <p>Usuario <input type="text" placeholder="ingrese su nombre" name="usuario"></p>

   <p>Contraseña <input type="password" placeholder="ingrese su contraseña" name="contraseña"></p>
   
   <input type="submit" value="Ingresar">
   
   </form> 
</body>
</html><?php }
}
