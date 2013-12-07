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
	<body class='contrast-fb fixed-header fixed-navigation'>
	
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
          <li class='dropdown light only-icon'>
            <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
              <i class='icon-cog'></i>
            </a>
            <ul class='dropdown-menu color-settings'>
              <li class='color-settings-body-color'>
                <div class='color-title'>Change body color</div>
                <a data-change-to='assets/stylesheets/light-theme.css' href='#'>
                  Light
                  <small>(default)</small>
                </a>
                <a data-change-to='assets/stylesheets/dark-theme.css' href='#'>
                  Dark
                </a>
                <a data-change-to='assets/stylesheets/dark-blue-theme.css' href='#'>
                  Dark blue
                </a>
              </li>
              <li class='divider'></li>
              <li class='color-settings-contrast-color'>
                <div class='color-title'>Change contrast color</div>
                            <a data-change-to="contrast-red" href="#"><i class='icon-cog text-red'></i>
                Red
                <small>(default)</small>
                </a>
    
                            <a data-change-to="contrast-blue" href="#"><i class='icon-cog text-blue'></i>
                Blue
                </a>
    
                            <a data-change-to="contrast-orange" href="#"><i class='icon-cog text-orange'></i>
                Orange
                </a>
    
                            <a data-change-to="contrast-purple" href="#"><i class='icon-cog text-purple'></i>
                Purple
                </a>
    
                            <a data-change-to="contrast-green" href="#"><i class='icon-cog text-green'></i>
                Green
                </a>
    
                            <a data-change-to="contrast-muted" href="#"><i class='icon-cog text-muted'></i>
                Muted
                </a>
    
                            <a data-change-to="contrast-fb" href="#"><i class='icon-cog text-fb'></i>
                Facebook
                </a>
    
                            <a data-change-to="contrast-dark" href="#"><i class='icon-cog text-dark'></i>
                Dark
                </a>
    
                            <a data-change-to="contrast-pink" href="#"><i class='icon-cog text-pink'></i>
                Pink
                </a>
    
                            <a data-change-to="contrast-grass-green" href="#"><i class='icon-cog text-grass-green'></i>
                Grass green
                </a>
    
                            <a data-change-to="contrast-sea-blue" href="#"><i class='icon-cog text-sea-blue'></i>
                Sea blue
                </a>
    
                            <a data-change-to="contrast-banana" href="#"><i class='icon-cog text-banana'></i>
                Banana
                </a>
    
                            <a data-change-to="contrast-dark-orange" href="#"><i class='icon-cog text-dark-orange'></i>
                Dark orange
                </a>
    
                            <a data-change-to="contrast-brown" href="#"><i class='icon-cog text-brown'></i>
                Brown
                </a>
    
              </li>
            </ul>
          </li>
          <li class='dropdown medium only-icon widget'>
            <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
              <i class='icon-rss'></i>
              <div class='label'>5</div>
            </a>
            <ul class='dropdown-menu'>
              <li>
                <a href='#'>
                  <div class='widget-body'>
                    <div class='pull-left icon'>
                      <i class='icon-user text-success'></i>
                    </div>
                    <div class='pull-left text'>
                      John Doe signed up
                      <small class='text-muted'>just now</small>
                    </div>
                  </div>
                </a>
              </li>
              <li class='divider'></li>
              <li>
                <a href='#'>
                  <div class='widget-body'>
                    <div class='pull-left icon'>
                      <i class='icon-inbox text-error'></i>
                    </div>
                    <div class='pull-left text'>
                      New Order #002
                      <small class='text-muted'>3 minutes ago</small>
                    </div>
                  </div>
                </a>
              </li>
              <li class='divider'></li>
              <li>
                <a href='#'>
                  <div class='widget-body'>
                    <div class='pull-left icon'>
                      <i class='icon-comment text-warning'></i>
                    </div>
                    <div class='pull-left text'>
                      America Leannon commented Flatty with veeery long text.
                      <small class='text-muted'>1 hour ago</small>
                    </div>
                  </div>
                </a>
              </li>
              <li class='divider'></li>
              <li>
                <a href='#'>
                  <div class='widget-body'>
                    <div class='pull-left icon'>
                      <i class='icon-user text-success'></i>
                    </div>
                    <div class='pull-left text'>
                      Jane Doe signed up
                      <small class='text-muted'>last week</small>
                    </div>
                  </div>
                </a>
              </li>
              <li class='divider'></li>
              <li>
                <a href='#'>
                  <div class='widget-body'>
                    <div class='pull-left icon'>
                      <i class='icon-inbox text-error'></i>
                    </div>
                    <div class='pull-left text'>
                      New Order #001
                      <small class='text-muted'>1 year ago</small>
                    </div>
                  </div>
                </a>
              </li>
              <li class='widget-footer'>
                <a href='#'>All notifications</a>
              </li>
            </ul>
          </li>
          <li class='dropdown dark user-menu'>
            <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
              <img width="23" height="23" alt="{$datos.name}" src="{$_layoutParams.ruta_img}avatar.jpg" />
              <span class='user-name'>{$datos.name}</span>
              <b class='caret'></b>
            </a>
            <ul class='dropdown-menu'>
              <li>
                <a href='user_profile.html'>
                  <i class='icon-user'></i>
                  Profile
                </a>
              </li>
              <li>
                <a href='user_profile.html'>
                  <i class='icon-cog'></i>
                  Settings
                </a>
              </li>
              <li class='divider'></li>
              <li>
                <a href='sign_in.html'>
                  <i class='icon-signout'></i>
                  Sign out
                </a>
              </li>
            </ul>
          </li>
        </ul>
        <form action='http://www.bublinastudio.com/flattybs3/search_results.html' class='navbar-form navbar-right hidden-xs' method='get'>
          <button class='btn btn-link icon-search' name='button' type='submit'></button>
          <div class='form-group'>
            <input value="" class="form-control" placeholder="Search..." autocomplete="off" id="q_header" name="q" type="text" />
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
            <form action='http://www.bublinastudio.com/flattybs3/search_results.html' method='get'>
              <div class='search-wrapper'>
                <input value="" class="search-query form-control" placeholder="Search..." autocomplete="off" name="q" type="text" />
                <button class='btn btn-link icon-search' name='button' type='submit'></button>
              </div>
            </form>
          </div>
          <ul class='nav nav-stacked'>
            <li class=''>
              <a href='index-2.html'>
                <i class='icon-dashboard'></i>
                <span>Dashboard</span>
              </a>
            </li>
            
            <li>
              <a class='dropdown-collapse ' href='#'>
                <i class='icon-book'></i>
                <span>Example pages</span>
                <i class='icon-angle-down angle-down'></i>
              </a>
              <ul class='nav nav-stacked'>
                <li class=''>
                  <a href='invoice.html'>
                    <i class='icon-money'></i>
                    <span>Invoice</span>
                  </a>
              </ul>
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