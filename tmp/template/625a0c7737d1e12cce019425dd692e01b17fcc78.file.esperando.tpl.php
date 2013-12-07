<?php /* Smarty version Smarty-3.1.15, created on 2013-12-06 17:39:01
         compiled from "C:\AppServ\www\helpdesk\views\index\esperando.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2098552a252054f5688-00658455%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '625a0c7737d1e12cce019425dd692e01b17fcc78' => 
    array (
      0 => 'C:\\AppServ\\www\\helpdesk\\views\\index\\esperando.tpl',
      1 => 1386291267,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2098552a252054f5688-00658455',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'segundos' => 0,
    'support' => 0,
    'online' => 0,
    'retro' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52a25205562325_86874252',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a25205562325_86874252')) {function content_52a25205562325_86874252($_smarty_tpl) {?><div class='col-sm-4 col-sm-offset-4'>
                <div id="total_count" style="display:none;"><?php echo $_smarty_tpl->tpl_vars['segundos']->value;?>
</div>
                <div class="col-sm-12">
                  <div class="box">
                    <div class="box-header">
                      <div class="title">
                        <i class="icon-group"></i>
                        Informaci&oacute;n Adicional
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="box-content box-statistic text-right">
                          <h3 class="title text-error"><?php echo $_smarty_tpl->tpl_vars['support']->value;?>
</h3>
                          <small>Support Asignado</small>
                          <div class="text-error icon-user align-left"></div>
                        </div>
                        <div class="box-content box-statistic text-right">
                          <h3 class="title text-success"><?php echo $_smarty_tpl->tpl_vars['online']->value;?>
</h3>
                          <small>Support online</small>
                          <div class="text-success icon-bug align-left"></div>
                        </div>
                        <div class="box-content box-statistic text-right">
                          <h3 class="title text-primary time-count"><?php echo $_smarty_tpl->tpl_vars['retro']->value;?>
</h3>
                          <small>Tiempo restante</small>
                          <div class="text-primary icon-time align-left"></div>
                        </div>
                        <!-- start Chat-->
                        <a id="start_chat" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['base_url'];?>
ticket" class="btn btn-success btn-block btn-lg disabled"><i class="icon-comment"></i> Comenzar Chat!</a>
                      </div>
                    </div>
                  </div>
                </div>
</div><?php }} ?>
