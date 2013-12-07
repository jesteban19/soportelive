<div class='col-sm-4 col-sm-offset-4'>
                <div id="total_count" style="display:none;">{$segundos}</div>
                <div class="col-sm-12">
                  <div class="box">
                    <div class="box-header">
                      <div class="title">
                        <i class="icon-group"></i>
                        Informaci&oacute;n Adicional
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="box-content box-statistic text-right">
                          <h3 class="title text-error">{$support}</h3>
                          <small>Support Asignado</small>
                          <div class="text-error icon-user align-left"></div>
                        </div>
                        <div class="box-content box-statistic text-right">
                          <h3 class="title text-success">{$online}</h3>
                          <small>Support online</small>
                          <div class="text-success icon-bug align-left"></div>
                        </div>
                        <div class="box-content box-statistic text-right">
                          <h3 class="title text-primary time-count">{$retro}</h3>
                          <small>Tiempo restante</small>
                          <div class="text-primary icon-time align-left"></div>
                        </div>
                        <!-- start Chat-->
                        <a id="start_chat" href="{$_layoutParams.base_url}ticket" class="btn btn-success btn-block btn-lg disabled"><i class="icon-comment"></i> Comenzar Chat!</a>
                      </div>
                    </div>
                  </div>
                </div>
</div>