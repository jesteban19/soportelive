<section id='content'>
	<div class='container'>
		<div class='row' id='content-wrapper'>
			<div class='col-xs-12'>
				<div class='row'>
					<div class='col-sm-12'>
						<div class='page-header'>
							<h1 class='pull-left'>
								<i class='icon-table'></i>
								<span>Historial</span>

							</h1>
							<div class='pull-right'>

							</div>
						</div>
					</div>
				</div>

				<div class="row">
				<div class="box bordered-box orange-border">
					<div class="box-header orange-background">
                      <div class="title">Historial de Tickets</div>
                      <div class="actions">
                        <a class="btn box-collapse btn-xs btn-link" href="#"><i></i>
                        </a>
                      </div>
                    </div>

                    <div class="box-content box-no-pading">
                    	<div class="responsive-table">
                    		<table class="data-table table table-bordered table-striped dataTable">
                    		<thead>
                    			<th>Nro</th>
                    			<th>Sistema</th>
                    			<th>Nombre</th>
                    			<th>Support</th>
                    			<!--<th>Problema</th>-->
                    			<th>Fecha</th>
                    			<th>Time</th>
                    			<th>Estado</th>
                    			<th>Calificaci&oacute;n</th>
                    		</thead>
                    		<tbody>
                    			{foreach item=row from=$data}
                    			<tr>
                    				<td>{$row.idticket}</td>
                    				<td><small>{$row.colegio}</small></td>
                    				<td><small>{$row.nombre}</small></td>
                    				<td><small>{$row.usuario}</small></td>
                    				<!--<td>{$row.problema}</td>-->
                    				<td>{$row.fecha}</td>
                    				<td>{$row.tiempo} Min</td>
                    				<td>
                    					<span class=
                    					"{if $row.estado=='Cerrado'}label label-success{/if}"
                    					/>{$row.estado}</span>

                    				</td>
                    				<td>
                    				{if $row.puntos==-1}<span class="label label-default"> No disponible</span>{else}
                    				<div class="btn-group">
                    					{for $foo=1 to $row.puntos}
					                        <button class="btn btn-warning btn-xs">
					                          <i class="icon-star"></i>
					                        </button>
                    					{/for}
                    					</div>
                    				{/if}
                    				</td>
                    			</tr>
                    			{/foreach}
                    		</tbody>
                    		</table>

                    	</div>
                    </div>

					 
				</div>
					 

				</div>


        </div>
    </div>

