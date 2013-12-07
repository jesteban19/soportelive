<?php /* Smarty version Smarty-3.1.15, created on 2013-12-06 17:38:39
         compiled from "C:\AppServ\www\helpdesk\views\index\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1410552a251efe420e0-09525824%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eeb5c9d8be92726819734174038a5c84ae3edfe5' => 
    array (
      0 => 'C:\\AppServ\\www\\helpdesk\\views\\index\\index.tpl',
      1 => 1386359136,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1410552a251efe420e0-09525824',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
    'data' => 0,
    'col' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52a251efe64532_12559338',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a251efe64532_12559338')) {function content_52a251efe64532_12559338($_smarty_tpl) {?><div class='middle-container'>
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
                  <h1 class='text-center title'>Sistema Chat en Vivo</h1>
                  <form action='' class='validate-form' id="generating_ticket" method='post'>
                  <div class='form-group'>
                      <div class='controls with-icon-over-input'>
                        <input value="" placeholder="Tu Nombre" autocomplete="off" class="form-control" data-rule-required="true" name="nombre" type="text" />
                        <i class='icon-user text-muted'></i>
                      </div>
                    </div>

                     <div class='controls with-icon-over-input'>                        
                        <select name="sistema" class="select2 form-control" data-rule-required="true">
                        <option value="">-- Selecciona el Sistema --</option>
                        <?php  $_smarty_tpl->tpl_vars['col'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['col']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['sistema']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['col']->key => $_smarty_tpl->tpl_vars['col']->value) {
$_smarty_tpl->tpl_vars['col']->_loop = true;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['col']->value['idsistemas'];?>
"><?php echo $_smarty_tpl->tpl_vars['col']->value['nombre'];?>
</option>
                        <?php } ?>                        
                        </select>
                    </div>
                    <br/>
                    <div class='form-group'>
                      <div class='controls with-icon-over-input'>
                        <textarea class="form-control" name="mensaje" data-rule-required="true" placeholder="¿Qué le gustaría discutir?" rows="3"></textarea>
                      </div>
                    </div>                    
                    <button class='btn btn-block' id="btn_next">Continuar</button>
                  </form>
                  <div class='text-center'>
                    <hr class='hr-normal'>
                    <a class="" data-toggle="modal" href="#modal-login" role="button">Acceder con mi cuenta</a>
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
    </div>

<!-- login user mod -->
<div class="modal fade" id="modal-login" tabindex="-1" style="display: none;" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button aria-hidden="true" class="close" data-dismiss="modal" type="button">×</button>
        <h4 class="modal-title" id="myModalLabel">Login </h4>
      </div>
      <div class="modal-body">

      <!-- error login -->
        <div class="alert alert-danger alert-dismissable" id="error_login" style="display:none;">
          <!--<a class="close" data-dismiss="alert" href="#">×
          </a>-->
          <i class="icon-remove-sign"></i>
          Ha ocurrido un error con tu Usuario y/o Password.
        </div>
      <!-- fin error login -->

      <form class="form validate-form" style="margin-bottom: 0;" id="form-login-index" method="post" action="" accept-charset="UTF-8">
        <div class="form-group">
          <label for="inputText1">Usuario</label>
          <input class="form-control" autocomplete="off" name="usuario" data-rule-required="true" id="inputText1" placeholder="@TuUsuario" type="text">
        </div>
        <div class="form-group">
          <label for="inputPassword4">Password</label>
          <input class="form-control"  name="password" data-rule-required="true" id="inputPassword4" placeholder="Password field" type="password">
        </div>
       
        <hr class="hr-normal">
      </form>

    </div>
    <div class="modal-footer">
      <button class="btn btn-default" data-dismiss="modal" type="button">Cancelar</button>
      <button class="btn btn-primary" type="button" id="confirm-login">Entrar</button>
    </div>
  </div>
</div>
</div><?php }} ?>
