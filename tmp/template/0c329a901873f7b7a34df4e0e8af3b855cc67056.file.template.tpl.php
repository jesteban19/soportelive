<?php /* Smarty version Smarty-3.1.15, created on 2013-12-03 00:56:42
         compiled from "C:\AppServ\www\helpdesk\views\layout\bootstrap\template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25320529d729a49c916-55584447%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c329a901873f7b7a34df4e0e8af3b855cc67056' => 
    array (
      0 => 'C:\\AppServ\\www\\helpdesk\\views\\layout\\bootstrap\\template.tpl',
      1 => 1386044326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25320529d729a49c916-55584447',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'titulo' => 0,
    '_layoutParams' => 0,
    'js' => 0,
    'menu' => 0,
    '_error' => 0,
    '_mensaje' => 0,
    '_contenido' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_529d729a5f8a30_43335258',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529d729a5f8a30_43335258')) {function content_529d729a5f8a30_43335258($_smarty_tpl) {?>

<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from getbootstrap.com/examples/justified-nav/ by HTTrack Website Copier/3.x [XR&CO'2013], Thu, 05 Sep 2013 00:10:30 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">

    <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['titulo']->value)===null||$tmp==='' ? 'Sin titulo' : $tmp);?>
</title>

	<!-- Bootstrap core CSS -->
	<link href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
bootstrap.css" rel="stylesheet">
	
	
	<!-- load Js -->
	<?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['js'])&&count($_smarty_tpl->tpl_vars['_layoutParams']->value['js'])) {?>
	<?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_layoutParams']->value['js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value) {
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
"></script>
	<?php } ?>
	<?php }?>

	<!-- load Plugins -->
	<?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['jsPlug'])&&count($_smarty_tpl->tpl_vars['_layoutParams']->value['jsPlug'])) {?>
	<?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_layoutParams']->value['jsPlug']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value) {
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
"></script>
	<?php } ?>
	<?php }?>

    
  </head>

  <body>
		
		<div class="masthead">
        <h3 class="text-muted"><?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['config']['app_name'];?>
</h3>
        <ul class="nav nav-justified">
          <?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['menu'])) {?>
          <?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_layoutParams']->value['menu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->_loop = true;
?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['menu']->value['enlace'];?>
"><?php echo $_smarty_tpl->tpl_vars['menu']->value['titulo'];?>
</a></li>
          <?php } ?>
          <?php }?>
        </ul>
      </div>
      
    	<div class="container">
		<?php if (isset($_smarty_tpl->tpl_vars['_error']->value)) {?>
		<div id="error">	 	
			<?php echo $_smarty_tpl->tpl_vars['_error']->value;?>

		</div>
		<?php }?>
		
		<?php if (isset($_smarty_tpl->tpl_vars['_mensaje']->value)) {?>
		<div id="mensaje">	 	
			<?php echo $_smarty_tpl->tpl_vars['_mensaje']->value;?>

		</div>
		<?php }?>
		
		

		<!-- show content view -->		
		<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['_contenido']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


      <!-- Site footer -->
      <div class="footer">
        <p>&copy; <?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['config']['app_company'];?>
 2013</p>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['site_url'];?>
public/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['site_url'];?>
public/js/jquery.validate.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
bootstrap.js"></script>
    <!-- Placed at the end of the document so the pages load faster -->
  </body>

</html>

		<?php }} ?>
