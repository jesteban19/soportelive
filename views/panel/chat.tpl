<!DOCTYPE html>
<html>

<head>
    <title>{$titulo|default:'Sin titulo'}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta content='text/html;charset=utf-8' http-equiv='content-type'>
    <meta content='Flat administration template for Twitter Bootstrap. Twitter Bootstrap 3 template with Ruby on Rails support.' name='description'>
    <link href='{$_layoutParams.ruta_img}meta_icons/favicon.ico' rel='shortcut icon' type='image/x-icon'>
    <link href='{$_layoutParams.ruta_img}meta_icons/apple-touch-icon.png' rel='apple-touch-icon-precomposed'>
    <link href='{$_layoutParams.ruta_img}meta_icons/apple-touch-icon-57x57.png' rel='apple-touch-icon-precomposed' sizes='57x57'>
    <link href='{$_layoutParams.ruta_img}meta_icons/apple-touch-icon-72x72.png' rel='apple-touch-icon-precomposed' sizes='72x72'>
    <link href='{$_layoutParams.ruta_img}meta_icons/apple-touch-icon-114x114.png' rel='apple-touch-icon-precomposed' sizes='114x114'>
    <link href='{$_layoutParams.ruta_img}meta_icons/apple-touch-icon-144x144.png' rel='apple-touch-icon-precomposed' sizes='144x144'>
    <!-- / START - page related stylesheets [optional] -->
    
    <!-- / END - page related stylesheets [optional] -->
    <!-- / bootstrap [required] -->
    <link href="{$_layoutParams.ruta_css}bootstrap/bootstrap.css" media="all" rel="stylesheet" type="text/css" />
    <!-- / theme file [required] -->
    <link href="{$_layoutParams.ruta_css}light-theme.css" media="all" id="color-settings-body-color" rel="stylesheet" type="text/css" />
    <!-- / coloring file [optional] (if you are going to use custom contrast color) -->
    <link href="{$_layoutParams.ruta_css}theme-colors.css" media="all" rel="stylesheet" type="text/css" />
    <!--[if lt IE 9]>
      <script src="{$_layoutParams.ruta_js}ie/html5shiv.js" type="text/javascript"></script>
      <script src="{$_layoutParams.ruta_js}ie/respond.min.js" type="text/javascript"></script>
    <![endif]-->
  </head>
    <body class='contrast-green fixed-header fixed-navigation'>
    <!-- COMIENZO DEL HEADER -->
    <header>
      <nav class='navbar navbar-default navbar-fixed-top'>
        <a class='navbar-brand' href='index-2.html'>
          <img width="81" height="21" class="logo" alt="Flatty" src="{$_layoutParams.ruta_img}logo_zeus.svg" />
          <img width="81" height="21" class="logo-xs" alt="Flatty" src="{$_layoutParams.ruta_img}logo_zeus.svg" />
        </a>
        <a class=' btn btn-danger pull-left' id="btn_close_ticket" href='#'>
          <i class='icon-remove'></i> Terminar ticket
        </a>
        
      </nav>
    </header>
    <!-- FIN DEL HEADER -->
    <!-- COMIENZO DEL CUERPO -->
 
 <div id="wrapper">
    <!-- COMIENZO DEL NAV -->
      <div id="main-nav-bg"></div>


  <!-- incluimos el contenido -->
  <section id="content">
        <div class="container">
          <div class="row" id="content-wrapper">
            <div class="col-xs-12">
              <div class="row">
                <div class="col-sm-12">
                  <div class="page-header">
                    <h1 class="pull-left">
                      <i class="icon-comments"></i>
                      <span>Chat - Sala #{$ticket}</span>
                      
                    </h1>
                  </div>
                </div>
              </div>
              <!-- MENSAJE DE AVISO O ALGO-->
              <div class='alert alert-info alert-dismissable'>
              {assign var=time value=$data.tiempo/60}
              <p>Tiempo Estimado
                 <select id="tiempo_estimado">
                  <option value="10" {if $time==10} selected {/if}>10 minutos</option>
                  <option value="15" {if $time==15} selected {/if}>15 minutos</option>
                  <option value="30" {if $time==30} selected {/if}>30 minutos</option>
                  <option value="45" {if $time==45} selected {/if}>45 minutos</option>
                  <option value="60" {if $time==60} selected {/if}>60 minutos</option>
                </select>
              </p>
              <p><strong>Problema : </strong>{$data.mensaje}</p>
               
              </div>

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
                                        <input type="hidden" id="authenticity_ticket" value="{$ticket}" />
                                        <input name="authenticity_token" type="hidden" />
                                        <input id="authenticity_name" type="hidden" value="{$login.nombre}"/>
                                        <input class='form-control' id='message_body' autocomplete="off" name='message[body]' placeholder='Ingrese su mensaje aqui...' type='text'>
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

    
  <!-- fin de la inclusion del template -->
    
    <!-- COMIENZO DEL FOOTER-->

        </div>
      </section>
    </div>
    <!-- FIN DE CUERPO -->

<!-- este bloqueara el chat ,cuando haiga un soporte conectado -->
<div class="modal fade" id="modal-bloqued" tabindex="-1" style="display: none;" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel"><i class="icon-1x icon-spinner icon-spin"></i> Esperando Cliente...</h4>
      </div>
      <div class="modal-body">
        <p>Espere un tiempo determinado al  <b>Cliente</b>, si no se conecta cierre el ticket!</p>
        <p class="text-center">&oacute;</p>
        <p>El cliente puede haber <span class="label label-danger">Terminado</span> el ticket.</p>
      </div>
         <div class="modal-footer">
          </div>
      </div>
    </div>
  </div>


    <!-- Variables globales javascript -->
    <script type="text/javascript">
        var BASE_URL='{$_layoutParams.base_url}';
        var SITE_URL='{$_layoutParams.site_url}';
        var SERVER_NODE='{$_layoutParams.server_node}';
    </script>
<!-- / jquery [required] -->
    <script src="{$_layoutParams.ruta_js}jquery/jquery.min.js" type="text/javascript"></script>
    <!-- / jquery mobile (for touch events) -->
    <script src="{$_layoutParams.ruta_js}jquery/jquery.mobile.custom.min.js" type="text/javascript"></script>
    <!-- / jquery migrate (for compatibility with new jquery) [required] -->
    <script src="{$_layoutParams.ruta_js}jquery/jquery-migrate.min.js" type="text/javascript"></script>
    <!-- / jquery ui -->
    <script src="{$_layoutParams.ruta_js}jquery/jquery-ui.min.js" type="text/javascript"></script>
    <!-- / jQuery UI Touch Punch -->
    <script src="{$_layoutParams.ruta_js}plugins/jquery_ui_touch_punch/jquery.ui.touch-punch.min.js" type="text/javascript"></script>
    <!-- / bootstrap [required] -->
    <script src="{$_layoutParams.ruta_js}bootstrap/bootstrap.js" type="text/javascript"></script>
    <!-- / modernizr -->
    <script src="{$_layoutParams.ruta_js}plugins/modernizr/modernizr.min.js" type="text/javascript"></script>
    <!-- / retina -->
    <script src="{$_layoutParams.ruta_js}plugins/retina/retina.js" type="text/javascript"></script>
    <!-- / theme file [required] -->
    <script src="{$_layoutParams.ruta_js}theme.js" type="text/javascript"></script>
    <!-- / demo file [not required!] -->
    <script src="{$_layoutParams.ruta_js}demo.js" type="text/javascript"></script>
    <!-- / START - page related files and scripts [optional] -->
    <script src="{$_layoutParams.ruta_js}plugins/validate/jquery.validate.min.js" type="text/javascript"></script>
    <script src="{$_layoutParams.ruta_js}plugins/validate/additional-methods.js" type="text/javascript"></script>
    <!-- / END - page related files and scripts [optional] -->
    <!-- / START - page related files and scripts [optional] -->
    <script src="{$_layoutParams.ruta_js}plugins/bootstrap_daterangepicker/bootstrap-daterangepicker.js" type="text/javascript"></script>
    <script src="{$_layoutParams.ruta_js}plugins/slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="{$_layoutParams.ruta_js}plugins/timeago/jquery.timeago.js" type="text/javascript"></script>
    
    <!-- load Js -->
    {if isset($_layoutParams.js) && count($_layoutParams.js)}
    {foreach item=js from=$_layoutParams.js}
        <script type="text/javascript" src="{$js}"></script>
    {/foreach}
    {/if}

    <!-- load Plugins -->
    {if isset($_layoutParams.jsPlug) && count($_layoutParams.jsPlug)}
    {foreach item=js from=$_layoutParams.jsPlug}
        <script type="text/javascript" src="{$js}"></script>
    {/foreach}
    {/if}
    

  </body>
</html>