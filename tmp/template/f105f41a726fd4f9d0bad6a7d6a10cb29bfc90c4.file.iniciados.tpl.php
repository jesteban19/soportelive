<?php /* Smarty version Smarty-3.1.15, created on 2013-12-06 18:03:55
         compiled from "C:\AppServ\www\helpdesk\views\panel\iniciados.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1376052a250121f8e41-00856582%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f105f41a726fd4f9d0bad6a7d6a10cb29bfc90c4' => 
    array (
      0 => 'C:\\AppServ\\www\\helpdesk\\views\\panel\\iniciados.tpl',
      1 => 1386371032,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1376052a250121f8e41-00856582',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52a25012276522_20947346',
  'variables' => 
  array (
    'data' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a25012276522_20947346')) {function content_52a25012276522_20947346($_smarty_tpl) {?> 
 <?php if (count($_smarty_tpl->tpl_vars['data']->value)) {?>
 <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
  <div class="col-sm-2">
    <div class="box-content box-quick-link box-statistic has-popover <?php if ($_smarty_tpl->tpl_vars['val']->value['segundos']==0) {?>red<?php } else { ?>muted<?php }?>-background"
    data-content="<?php echo $_smarty_tpl->tpl_vars['val']->value['mensaje'];?>
" data-placement="bottom" data-title="#<?php echo $_smarty_tpl->tpl_vars['val']->value['idticket'];?>
 | <?php echo $_smarty_tpl->tpl_vars['val']->value['nombre'];?>
 Dice :" data-original-title="" title="">
    	<h3 class="title text-muted"><?php echo $_smarty_tpl->tpl_vars['val']->value['segundos'];?>
 seg</h3>
    	<small><?php if ($_smarty_tpl->tpl_vars['val']->value['segundos']==0) {?>TERMINADO<?php } else { ?>ESPERANDO<?php }?></small>
    	<div class="text-muted icon-time align-right"></div>

    	<a href="#" class="btn-iniciado" data-ticket="<?php echo $_smarty_tpl->tpl_vars['val']->value['idticket'];?>
">
    		<div class="header">
    			<div class="<?php if ($_smarty_tpl->tpl_vars['val']->value['segundos']==0) {?>icon-comments<?php } else { ?>icon-refresh<?php }?>"></div>
    		</div>
    		<div class="content">ATENDER #<?php echo $_smarty_tpl->tpl_vars['val']->value['idticket'];?>
</div>
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
 <?php }?>
<?php }} ?>
