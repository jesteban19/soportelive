<!DOCTYPE html>
<html>

<head>
    <!--http://www.bublinastudio.com/flattybs3/-->
    <title>{$titulo|default:'Sin titulo'}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta content='text/html;charset=utf-8' http-equiv='content-type'>
    <meta content='Flat administration template for Twitter Bootstrap. Twitter Bootstrap 3 template with Ruby on Rails support.' name='description'>
    <link href='{$_layoutParams.ruta_img}meta_icons/favicon.ico' rel='shortcut icon' type='image/x-icon'>

    <!-- / START - page related stylesheets [optional] -->
    <link href='{$_layoutParams.ruta_css}plugins/jgrowl/jquery.jgrowl.min.css' media="all" rel="stylesheet" type="text/css">
    <!-- / END - page related stylesheets [optional] -->
    <!-- / bootstrap [required] -->
    <link href="{$_layoutParams.ruta_css}bootstrap/bootstrap.css" media="all" rel="stylesheet" type="text/css" />
    <!-- / theme file [required] -->
    <link href="{$_layoutParams.ruta_css}light-theme.css" media="all" id="color-settings-body-color" rel="stylesheet" type="text/css" />
    <!-- / coloring file [optional] (if you are going to use custom contrast color) -->
    <link href="{$_layoutParams.ruta_css}theme-colors.css" media="all" rel="stylesheet" type="text/css" />
    <link href="{$_layoutParams.ruta_css}demo.css" media="all" rel="stylesheet" type="text/css" />
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
          <img width="21" height="21" class="logo-xs" alt="Flatty" src="{$_layoutParams.ruta_img}logo_xs.svg" />
        </a>
        <a class='toggle-nav btn pull-left' href='#'>
          <i class='icon-reorder'></i>
        </a>
        <ul class='nav'>
          <li class='dropdown dark user-menu'>
            <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
              <img width="23" height="23" alt="{$datos.name}" src="{$_layoutParams.ruta_img}avatar.jpg" />
              <span class='user-name'>{$datos.name}</span>
              <b class='caret'></b>
            </a>
            <ul class='dropdown-menu'>
              <li>
                <a href='#'>
                  <i class='icon-cog'></i>
                  Foro
                </a>
              </li>
              <li class='divider'></li>
              <li>
                <a href='{$_layoutParams.base_url}index/logout'>
                  <i class='icon-signout'></i>
                  Cancelar Chat
                </a>
              </li>
            </ul>
          </li>
        </ul>
        <form action='{$_layoutParams.base_url}/foro' class='navbar-form navbar-right hidden-xs' method='get'>
          <button class='btn btn-link icon-search' name='button' type='submit'></button>
          <div class='form-group'>
            <input value="" class="form-control" placeholder="Buscar en el foro" autocomplete="off" id="q_header" name="q" type="text" />
          </div>
        </form>
      </nav>
    </header>
    <!-- FIN DEL HEADER -->
    <!-- COMIENZO DEL CUERPO -->
    <div id='wrapper'>
    <!-- COMIENZO DEL NAV -->
      <div id='main-nav-bg'></div>
      <nav class='main-nav-fixed' id='main-nav'>
        <div class='navigation'>
          <div class='search'>
            <form action='{$_layoutParams.base_url}/foro' method='get'>
              <div class='search-wrapper'>
                <input value="" class="search-query form-control" placeholder="Buscar en el foro" autocomplete="off" name="q" type="text" />
                <button class='btn btn-link icon-search' name='button' type='submit'></button>
              </div>
            </form>
          </div>
          <ul class='nav nav-stacked'>
            <li class=''>
              <a href='{$_layoutParams.base_url}foro'>
                <i class='icon-bullhorn'></i>
                <span>Buscar en el foro</span>
              </a>
            </li>
            <li class=''>
              <a href='{$_layoutParams.base_url}index/logout'>
                <i class='icon-signout'></i>
                <span>Cancelar Chat</span>
              </a>
            </li>
          </ul>
        </div>
      </nav>

	<!-- incluimos el contenido -->
	{include file=$_contenido}
	<!-- fin de la inclusion del template -->
    
    <!-- COMIENZO DEL FOOTER-->
        <footer id='footer'>
            <div class='footer-wrapper'>
              <div class='row'>
                <div class='col-sm-6 text'>
                  Copyright © 2013 {$_layoutParams.config.app_company}
                </div>
                <div class='col-sm-6 buttons'>
                  <a class="btn btn-link" href="#">ZeusIntranet</a>
                  <a class="btn btn-link" href="#">Soporte</a>
                </div>
              </div>
            </div>
          </footer>
        </div>
      </section>
    </div>

   
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
    <script type="text/javascript" src="{$_layoutParams.ruta_js}plugins/rating/bootstrap-rating-input.min.js"></script>
    <script type="text/javascript" src="{$_layoutParams.ruta_js}plugins/jgrowl/jquery.jgrowl.min.js"></script>
    
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
    
    <script type="text/javascript">
        var BASE_URL='{$_layoutParams.base_url}';
        var SITE_URL='{$_layoutParams.site_url}';
    </script>

  </body>
</html>