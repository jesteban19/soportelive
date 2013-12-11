<section id='content'>
        <div class='container'>
          <div class='row' id='content-wrapper'>
            <div class='col-xs-12'>
              <div class='row'>
                <div class='col-sm-12'>
                  <div class='page-header'>
                    <h1 class='pull-left'>
                      <i class='icon-comments'></i>
                      <span>Chat - Sala #{Session::get('idticket')}</span>
                      
                    </h1>
                    <div class='pull-right'>
      
                    </div>
                  </div>
                </div>
              </div>
              <!-- MENSAJE DE AVISO O ALGO
              <div class='alert alert-info alert-dismissable'>
                <a class='close' data-dismiss='alert' href='#'>&times;</a>
                Chats can be placed in various containers. For example one below and one fixed on browser bottom.
              </div>-->

              <div class='row'>
                <div class='col-sm-12'>
                  <div class='box'>
                    <div class='row'>
                      <div class='chat'>
                        <div class='col-sm-12'>
                          <div class='box'>
                            <div class='box-content box-no-padding'>
                           
                              <div class="scrollable"  data-scrollable-height="300" data-scrollable-start="bottom">

                                <ul class='list-unstyled list-hover list-striped' id="chat_messages">

                                </ul>
                              </div>
                         
                              
                                        <form class="new-message" method="post" action="#" accept-charset="UTF-8">
                                        <input type="hidden" id="authenticity_ticket" value="{Session::get('idticket')}" />
                                        <input name="authenticity_token" type="hidden" />
                                        <input id="authenticity_name" type="hidden" value="{$datos.name}"/>
                                        <input class='form-control' id='message_body' autocomplete="off" name='message[body]' placeholder='Ingrese tu mensaje aqui...' type='text'>
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


<!-- este bloqueara el chat ,cuando haiga un soporte conectado -->
<div class="modal fade" id="modal-bloqued" tabindex="-1" style="display: none;" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel"><i class="icon-1x icon-spinner icon-spin"></i> Esperando Support...</h4>
      </div>
      <div class="modal-body">
        <p>Por favor sea paciente mientras el <b>support</b>  configura y entra al chat.Gracias!</p>
      </div>
         <div class="modal-footer">
          </div>
      </div>
    </div>
  </div>

<!-- este mostrara el mensaje de finalizacion -->
<div class="modal fade" id="modal-terminado" tabindex="-1" style="display: none;" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Ticket Terminado!</h4>
      </div>
      <div class="modal-body">
        <p>Gracias por utilizar el <b>Soporte Live de ZeusIntranet</b>. Para finalizar haga click en <b>“Finalizar Chat”</b> y déjenos sus comentarios.  Que tenga un buen día.</p>
      </div>
         <div class="modal-footer">
         <button id="btn-close-ticket" type="button" class="btn btn-primary">Aceptar</button>
        </div>
      </div>
    </div>
  </div>
<!-- login user mod -->
<div class="modal fade" id="modal-puntuacion" tabindex="-1" style="display: none;" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Se dio por resuelto el ticket. Ahora le toca a Ud. !</h4>
      </div>
      <div class="modal-body">


        <div class="alert alert-success alert-dismissable" id="success_puntos" style="display:none;">
          <!--<a class="close" data-dismiss="alert" href="#">×
          </a>-->
          <i class="icon-ok-sign"></i>
          Gracias por realizar la encuesta del chat, Regrese Pronto !
        </div>
      <!-- fin error login -->

      <form class="form validate-form" id="form-puntuacion" style="margin-bottom: 0;" id="form-login-index" method="post" action="" accept-charset="UTF-8">
        <div class="form-group">
          <label for="">Puntuaci&oacute;n</label>
          <input type="number" data-min="1"  data-max="10" name="star_point"  class="rating" />
        </div>
        <div class="form-group">
          <label for="inputComentario">Sugerencia / Comentario</label>
          <textarea class="form-control" rows="5" name="comentario" id="inputComentario" placeholder="Ingrese su comentario..."></textarea>
        </div>
        <div class="form-group">
          <label for="inputEmail">Enviar Conversaci&oacute;n</label>
          <input type="email" id="inputEmail" name="email" class="form-control" placeholder="tu.email@dominio.com" />
        </div>
      </form>

    </div>
    <div class="modal-footer">
      <button class="btn btn-warning btn-block btn-lg" id="btn_guardar_star"><i class="icon-star"></i> Guardar Puntuacion !</button>
    </div>
  </div>
</div>
</div>