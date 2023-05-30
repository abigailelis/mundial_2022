<?php
/* Smarty version 4.3.0, created on 2023-05-30 10:25:01
  from 'C:\xampp\htdocs\mundial_2022\mundial_2022\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6475b2dd761d89_29341141',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5764e9bc9c3137de40df94854f2e7e1fcd85d4d2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mundial_2022\\mundial_2022\\templates\\header.tpl',
      1 => 1685435025,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6475b2dd761d89_29341141 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <base href="BASE_URL", BASE_URL>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="home">Mundial 2022</a>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="paises">Paises</a></li>
          <li class="nav-item"><a class="nav-link" href="jugadores">Jugadores</a></li>
          <li class="nav-item"><a class="nav-link" href="login">Log in</a></li>
          <li class="nav-item"><a class="nav-link" href="logout">Log out</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>
<?php }
}
