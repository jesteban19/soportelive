<?php /* Smarty version Smarty-3.1.15, created on 2013-12-06 17:38:34
         compiled from "C:\AppServ\www\helpdesk\views\ticket\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:377052a251ea14f077-00650955%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '596ffd86301308fedd5ce2b10264f666a8ea8f04' => 
    array (
      0 => 'C:\\AppServ\\www\\helpdesk\\views\\ticket\\index.tpl',
      1 => 1386367997,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '377052a251ea14f077-00650955',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52a251ea1670e8_83021125',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a251ea1670e8_83021125')) {function content_52a251ea1670e8_83021125($_smarty_tpl) {?><section id='content'>
        <div class='container'>
          <div class='row' id='content-wrapper'>
            <div class='col-xs-12'>
              <div class='row'>
                <div class='col-sm-12'>
                  <div class='page-header'>
                    <h1 class='pull-left'>
                      <i class='icon-comments'></i>
                      <span>Chat - Sala #<?php echo Session::get('idticket');?>
</span>
                      
                    </h1>
                    <div class='pull-right'>
                      <ul class='breadcrumb'>
                        <li>
                          <a href='index-2.html'>
                            <i class='icon-bar-chart'></i>
                          </a>
                        </li>
                        <li class='separator'>
                          <i class='icon-angle-right'></i>
                        </li>
                        <li>Components</li>
                        <li class='separator'>
                          <i class='icon-angle-right'></i>
                        </li>
                        <li class='active'>Chats</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <!-- MENSAJE DE AVISO O ALGO
              <div class='alert alert-info alert-dismissable'>
                <a class='close' data-dismiss='alert' href='#'>&times;</a>
                Chats can be placed in various containers. For example one below and one fixed on browser bottom.
              </div>-->

              <div class='row'>
                <div class='col-sm-12'>
                  <div class='box'>
                    <div class='row'>
                      <div class='chat'>
                        <div class='col-sm-12'>
                          <div class='box'>
                            <div class='box-content box-no-padding'>
                              <div class='scrollable' data-scrollable-height='300' data-scrollable-start='bottom'>
                                <ul class='list-unstyled list-hover list-striped' id="chat_messages">

                                </ul>
                              </div>
                                        <form class="new-message" method="post" action="#" accept-charset="UTF-8">
                                        <input type="hidden" id="authenticity_ticket" value="<?php echo Session::get('idticket');?>
" />
                                        <input name="authenticity_token" type="hidden" />
                                        <input id="authenticity_name" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['name'];?>
"/>
                                        <input class='form-control' id='message_body' autocomplete="off" name='message[body]' placeholder='Type your message here...' type='text'>
                              <button class='btn btn-success' type='submit'>
                                <i class='icon-plus'></i>
                              </button>
                              </form>
                              <div id="writing"></div>

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      

    <?php }} ?>
