<?php /* Smarty version Smarty-3.1.15, created on 2013-12-06 18:43:34
         compiled from "C:\AppServ\www\helpdesk\views\panel\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1880652a250129acea9-75482966%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1389db9f4bc8a6263c644e06673a2024938bd81f' => 
    array (
      0 => 'C:\\AppServ\\www\\helpdesk\\views\\panel\\index.tpl',
      1 => 1386373413,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1880652a250129acea9-75482966',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52a250129b7f68_35050879',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a250129b7f68_35050879')) {function content_52a250129b7f68_35050879($_smarty_tpl) {?><section id='content'>
	<div class='container'>
		<div class='row' id='content-wrapper'>
			<div class='col-xs-12'>
				<div class='row'>
					<div class='col-sm-12'>
						<div class='page-header'>
							<h1 class='pull-left'>
								<i class='icon-windows'></i>
								<span>Panel de Control | Tickets Live 2.0 !</span>

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

			<!-- INICIADOS -->
            <div class='row'>
            	<div class="col-sm-12">
                  <div class="box">
                    <div class="box-header">
                      <div class="title">
                        <div class="icon-question-sign"></div>
                        Iniciados
                      </div>
                      <div class="actions">                     
                        <a class="btn box-collapse btn-xs btn-link" href="#"><i></i>
                        </a>
                      </div>
                    </div>
                    <div class="row" id="iniciados">
                     	
                    </div>
                  </div>
                </div>
            </div>
			
			<!-- PROGRESO -->
            <div class='row'>
            	<div class="col-sm-12">
                  <div class="box">
                    <div class="box-header">
                      <div class="title">
                        <div class="icon-beer"></div>
                        Progreso
                      </div>
                      <div class="actions">                     
                        <a class="btn box-collapse btn-xs btn-link" href="#"><i></i>
                        </a>
                      </div>
                    </div>
                    <div class="row" id="progreso">
                    </div>
                  </div>
                </div>
            </div>


            <!-- OTROS -->
            <div class='row'>
            	<div class="col-sm-12">
                  <div class="box">
                    <div class="box-header">
                      <div class="title">
                        <div class="icon-pushpin"></div>
                        Asignados a otro
                      </div>
                      <div class="actions">                  
                        <a class="btn box-collapse btn-xs btn-link" href="#"><i></i>
                        </a>
                      </div>
                    </div>
                    <div class="row" id="globales">
                    </div>
                  </div>
                </div>
            </div>


        </div>
    </div>

<?php }} ?>
