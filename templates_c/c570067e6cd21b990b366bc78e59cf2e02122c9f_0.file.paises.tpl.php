<?php
/* Smarty version 4.3.0, created on 2023-06-06 19:36:56
  from 'C:\xampp\htdocs\TPE_WEB2\templates\paises.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_647f6eb84c14a3_44788121',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c570067e6cd21b990b366bc78e59cf2e02122c9f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB2\\templates\\paises.tpl',
      1 => 1686072675,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_647f6eb84c14a3_44788121 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container mt-5">
    <section class="mb-3">
        <?php if ($_smarty_tpl->tpl_vars['logueado']->value == true) {?>
            <!--BOTÓN PARA REDIRIGIR AL FORMULARIO DE AGREGAR PAIS -->
            <button class="btn btn-block mb-4">
                <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
formPais/add" class="btn-a">Agregar Nuevo</a>
            </button>
        <?php }?>
    </section>
    <section class="paises">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['paises']->value, 'pais');
$_smarty_tpl->tpl_vars['pais']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pais']->value) {
$_smarty_tpl->tpl_vars['pais']->do_else = false;
?>
            <section class="card">
                <img src="<?php echo $_smarty_tpl->tpl_vars['pais']->value->bandera;?>
" class="card-img-top" alt="Bandera de <?php echo $_smarty_tpl->tpl_vars['pais']->value->nombre;?>
">
                <div class="card-body">
                    <h2 class="card-title"><?php echo $_smarty_tpl->tpl_vars['pais']->value->nombre;?>
</h2>
                    <p class="card-text">Continente: <?php echo $_smarty_tpl->tpl_vars['pais']->value->continente;?>
</p>
                    <p class="card-text"> Clasificación: <?php echo $_smarty_tpl->tpl_vars['pais']->value->clasificacion;?>
</p>
                    <button class="btn btn-block mb-4"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
jugadores/<?php echo $_smarty_tpl->tpl_vars['pais']->value->nombre;?>
" class="btn-a">Ver
                            más</a></button>
                    <?php if ($_smarty_tpl->tpl_vars['logueado']->value == true) {?>
                        <button class="btn btn-block mb-4"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
formPais/editar/<?php echo $_smarty_tpl->tpl_vars['pais']->value->id;?>
"
                                class="btn-a">Editar</a></button>
                        <button class="btn btn-block mb-4"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
paises/msgBorrar/<?php echo $_smarty_tpl->tpl_vars['pais']->value->id;?>
"
                                class="btn-a">Borrar</a></button>
                    <?php }?>
                </div>
            </section>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </section>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
