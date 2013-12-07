<?php /* Smarty version Smarty-3.1.15, created on 2013-12-06 17:46:31
         compiled from "C:\AppServ\www\helpdesk\views\index\generado.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1809252a253c77e5c77-80087553%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1736b16f03f05b777b2b21d3c239fb3a7e3323df' => 
    array (
      0 => 'C:\\AppServ\\www\\helpdesk\\views\\index\\generado.tpl',
      1 => 1386291286,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1809252a253c77e5c77-80087553',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
    'segundos' => 0,
    'support' => 0,
    'online' => 0,
    'retro' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52a253c7861b24_07766045',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a253c7861b24_07766045')) {function content_52a253c7861b24_07766045($_smarty_tpl) {?><div class='middle-container'>
      <div class='middle-row'>
        <div class='middle-wrapper'>
          <div class='login-container-header'>
            <div class='container'>
              <div class='row'>
                <div class='col-sm-12'>
                  <div class='text-center'>
                    <img width="150" height="50" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_img'];?>
logo_zeus.svg" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class='login-container'>
            <div class='container'>
              <div class='row' id="loading_next">
              <div class='col-sm-4 col-sm-offset-4'>
                <div id="total_count" style="display:none;"><?php echo $_smarty_tpl->tpl_vars['segundos']->value;?>
</div>
                <div id="persitenteIndex"></div>
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
              </div>
              </div>
            </div>
          </div>
          
          <div class='login-container-footer'>
            <div class='container'>
              <div class='row'>
                <div class='col-sm-12'>
                  <div class='text-center'>
                    <a href='#'>
                      <i class='icon-user'></i>
                      Nuevo en Soporte Live? 
                      <strong>Ver Manual</strong>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><?php }} ?>
