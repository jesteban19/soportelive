

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{$titulo|default:'Sin titulo'}</title>

	<!-- Bootstrap core CSS -->
	<link href="{$_layoutParams.ruta_css}bootstrap.css" rel="stylesheet">
	
	
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

    
  </head>

  <body>
		
		<div class="masthead">
        <h3 class="text-muted">{$_layoutParams.config.app_name}</h3>
        <ul class="nav nav-justified">
          {if isset($_layoutParams.menu) }
          {foreach item=menu from=$_layoutParams.menu }
            <li><a href="{$menu.enlace}">{$menu.titulo}</a></li>
          {/foreach}
          {/if}
        </ul>
      </div>
      
    	<div class="container">
		{if isset($_error) }
		<div id="error">	 	
			{$_error}
		</div>
		{/if}
		
		{if isset($_mensaje) }
		<div id="mensaje">	 	
			{$_mensaje}
		</div>
		{/if}
		
		

		<!-- show content view -->		
		{include file=$_contenido}

      <!-- Site footer -->
      <div class="footer">
        <p>&copy; {$_layoutParams.config.app_company} 2013</p>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script type="text/javascript" src="{$_layoutParams.site_url}public/js/jquery.js"></script>
	<script type="text/javascript" src="{$_layoutParams.site_url}public/js/jquery.validate.js"></script>
	<script src="{$_layoutParams.ruta_js}bootstrap.js"></script>
    <!-- Placed at the end of the document so the pages load faster -->
  </body>

</html>

		