<!DOCTYPE html>
<html>
<head>
	<title>{$titulo|default:'Sin titulo'}</title>
	<!--<link rel="stylesheet" type="text/css" href="{$_layoutParams.ruta_css}estilos.css">-->
	<script type="text/javascript" src="{$_layoutParams.site_url}public/js/jquery.js"></script>
	<script type="text/javascript" src="{$_layoutParams.site_url}public/js/jquery.validate.js"></script>	
	
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

	<h1>{$_layoutParams.config.app_name}</h1>

	<div id="menu">
		<ul>
			{if isset($_layoutParams.menu) }
			{foreach item=menu from=$_layoutParams.menu }
			<li><a href="{$menu.enlace}">{$menu.titulo}</a></li>
			{/foreach}
			{/if}
		</ul>
	</div>

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

		{include file=$_contenido}
</body>
</html>