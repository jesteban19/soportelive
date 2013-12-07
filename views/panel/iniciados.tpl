 
 {if count($data)}
 {foreach item=val from=$data}
  <div class="col-sm-2">
    <div class="box-content box-quick-link box-statistic has-popover {if $val.segundos==0 }red{else}muted{/if}-background"
    data-content="{$val.mensaje}" data-placement="bottom" data-title="#{$val.idticket} | {$val.nombre} Dice :" data-original-title="" title="">
    	<h3 class="title text-muted">{$val.segundos} seg</h3>
    	<small>{if $val.segundos==0}TERMINADO{else}ESPERANDO{/if}</small>
    	<div class="text-muted icon-time align-right"></div>

    	<a href="#" class="btn-iniciado" data-ticket="{$val.idticket}">
    		<div class="header">
    			<div class="{if $val.segundos==0}icon-comments{else}icon-refresh{/if}"></div>
    		</div>
    		<div class="content">ATENDER #{$val.idticket}</div>
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
