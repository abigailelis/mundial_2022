<?php
/* Smarty version 4.3.0, created on 2023-05-30 22:43:46
  from 'C:\xampp\htdocs\TPE_WEB2\templates\jugadoresByPais.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_647660027383b6_88200168',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ffd8942b0f711a08f8ddebe68230bea8423b806' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB2\\templates\\jugadoresByPais.tpl',
      1 => 1685479326,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_647660027383b6_88200168 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<table class="table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Posición</th>
            <th>Pais</th>
            <th>Ver más</th>
            <th>Editar</th>
            <th>Borrar</th>
        </tr>
    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['jugadores']->value, 'jugador');
$_smarty_tpl->tpl_vars['jugador']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['jugador']->value) {
$_smarty_tpl->tpl_vars['jugador']->do_else = false;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['jugador']->value->nombre;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['jugador']->value->apellido;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['jugador']->value->posicion;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['pais']->value->nombre;?>
</td>
                <td><a href="jugador/ver/<?php echo $_smarty_tpl->tpl_vars['jugador']->value->id;?>
">Ver más</a></td>
                <td><a href="jugador/editar/<?php echo $_smarty_tpl->tpl_vars['jugador']->value->id;?>
">Editar</a></td>
                <td><a href="jugador/borrar/<?php echo $_smarty_tpl->tpl_vars['jugador']->value->id;?>
">Borrar</a></td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
