 
{if count($data)}
{foreach item=val from=$data}
<div class="col-sm-2">
	<div class="box-content box-quick-link box-statistic has-popover green-background" data-content="{$val.mensaje}" data-placement="bottom" data-title="#{$val.idticket} | {$val.nombre} Dice :" data-original-title="" title="">
		<h3 class="title text-muted">{$val.segundos} seg</h3>
		<small>Atendiendo</small>
		<div class="text-muted icon-ok align-right"></div>

		<a href="#" class="btn-progreso" data-ticket="{$val.idticket}">
			<div class="header">
				<div class="icon-eye-open"></div>
			</div>
			<div class="content">CHATEAR</div>
		</a>
	</div>
</div>
{/foreach}
{else}
<div class="col-sm-12">
	<div class="box-content box-statistic">
		<h3 class="title text-success">Buen trabajo sigue asi !</h3>
		<small>No hay tickets por el momento...</small>
		<div class="text-success icon-ok align-right"></div>
	</div>
</div>
{/if}