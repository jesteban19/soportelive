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
    <link href="{$_layoutParams.ruta_css}plugins/select2/select2.css" media="all" rel="stylesheet" type="text/css" />
    <link href="{$_layoutParams.ruta_css}plugins/bootstrap_colorpicker/bootstrap-colorpicker.css" media="all" rel="stylesheet" type="text/css" />
    <link href="{$_layoutParams.ruta_css}plugins/bootstrap_daterangepicker/bootstrap-daterangepicker.css" media="all" rel="stylesheet" type="text/css" />
    <link href="{$_layoutParams.ruta_css}plugins/bootstrap_datetimepicker/bootstrap-datetimepicker.min.css" media="all" rel="stylesheet" type="text/css" />
    <link href="{$_layoutParams.ruta_css}plugins/bootstrap_switch/bootstrap-switch.css" media="all" rel="stylesheet" type="text/css" />
    <link href="{$_layoutParams.ruta_css}plugins/common/bootstrap-wysihtml5.css" media="all" rel="stylesheet" type="text/css" />
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
	<body class='contrast-green login contrast-background'>
	
	<!-- incluimos el contenido -->
	{include file=$_contenido}
	<!-- fin de la inclusion del template -->

       <!-- /CONFIGURACIONES [required] -->
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
    <script src="{$_layoutParams.ruta_js}plugins/fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
    <script src="{$_layoutParams.ruta_js}plugins/select2/select2.js" type="text/javascript"></script>
    <script src="{$_layoutParams.ruta_js}plugins/bootstrap_colorpicker/bootstrap-colorpicker.min.js" type="text/javascript"></script>
    <script src="{$_layoutParams.ruta_js}plugins/common/moment.min.js" type="text/javascript"></script>
    <script src="{$_layoutParams.ruta_js}plugins/bootstrap_daterangepicker/bootstrap-daterangepicker.js" type="text/javascript"></script>
    <script src="{$_layoutParams.ruta_js}plugins/bootstrap_datetimepicker/bootstrap-datetimepicker.js" type="text/javascript"></script>
    <script src="{$_layoutParams.ruta_js}plugins/input_mask/bootstrap-inputmask.min.js" type="text/javascript"></script>
    <script src="{$_layoutParams.ruta_js}plugins/bootstrap_maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>
    <script src="{$_layoutParams.ruta_js}plugins/charCount/charCount.js" type="text/javascript"></script>
    <script src="{$_layoutParams.ruta_js}plugins/autosize/jquery.autosize-min.js" type="text/javascript"></script>
    <script src="{$_layoutParams.ruta_js}plugins/bootstrap_switch/bootstrapSwitch.min.js" type="text/javascript"></script>
    <script src="{$_layoutParams.ruta_js}plugins/naked_password/naked_password-0.2.4.min.js" type="text/javascript"></script>
    <script src="{$_layoutParams.ruta_js}plugins/mention/mention.min.js" type="text/javascript"></script>
    <script src="{$_layoutParams.ruta_js}plugins/typeahead/typeahead.js" type="text/javascript"></script>
    <script src="{$_layoutParams.ruta_js}plugins/common/wysihtml5.min.js" type="text/javascript"></script>
    <script src="{$_layoutParams.ruta_js}plugins/common/bootstrap-wysihtml5.js" type="text/javascript"></script>
    <script src="{$_layoutParams.ruta_js}plugins/pwstrength/pwstrength.js" type="text/javascript"></script>

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
        var SERVER_NODE='{$_layoutParams.server_node}';
    </script>
  </body>
</html>