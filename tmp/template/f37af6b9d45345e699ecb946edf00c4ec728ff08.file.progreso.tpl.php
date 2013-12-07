<?php /* Smarty version Smarty-3.1.15, created on 2013-12-06 18:04:05
         compiled from "C:\AppServ\www\helpdesk\views\panel\progreso.tpl" */ ?>
<?php /*%%SmartyHeaderCode:312852a2501247a103-97819435%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f37af6b9d45345e699ecb946edf00c4ec728ff08' => 
    array (
      0 => 'C:\\AppServ\\www\\helpdesk\\views\\panel\\progreso.tpl',
      1 => 1386371042,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '312852a2501247a103-97819435',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52a250124f0fe5_26046191',
  'variables' => 
  array (
    'data' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a250124f0fe5_26046191')) {function content_52a250124f0fe5_26046191($_smarty_tpl) {?> 
<?php if (count($_smarty_tpl->tpl_vars['data']->value)) {?>
<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
<div class="col-sm-2">
	<div class="box-content box-quick-link box-statistic has-popover green-background" data-content="<?php echo $_smarty_tpl->tpl_vars['val']->value['mensaje'];?>
" data-placement="bottom" data-title="#<?php echo $_smarty_tpl->tpl_vars['val']->value['idticket'];?>
 | <?php echo $_smarty_tpl->tpl_vars['val']->value['nombre'];?>
 Dice :" data-original-title="" title="">
		<h3 class="title text-muted"><?php echo $_smarty_tpl->tpl_vars['val']->value['segundos'];?>
 seg</h3>
		<small>Atendiendo</small>
		<div class="text-muted icon-ok align-right"></div>

		<a href="#" class="btn-progreso" data-ticket="<?php echo $_smarty_tpl->tpl_vars['val']->value['idticket'];?>
">
			<div class="header">
				<div class="icon-eye-open"></div>
			</div>
			<div class="content">CHATEAR</div>
		</a>
	</div>
</div>
<?php } ?>
<?php } else { ?>
<div class="col-sm-12">
	<div class="box-content box-statistic">
		<h3 class="title text-success">Buen trabajo sigue asi !</h3>
		<small>No hay tickets por el momento...</small>
		<div class="text-success icon-ok align-right"></div>
	</div>
</div>
<?php }?><?php }} ?>
