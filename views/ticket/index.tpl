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
                      <ul class='breadcrumb'>
                        <li>
                          <a href='index-2.html'>
                            <i class='icon-bar-chart'></i>
                          </a>
                        </li>
                        <li class='separator'>
                          <i class='icon-angle-right'></i>
                        </li>
                        <li>Components</li>
                        <li class='separator'>
                          <i class='icon-angle-right'></i>
                        </li>
                        <li class='active'>Chats</li>
                      </ul>
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
                              <!--<div class='scrollable' data-scrollable-height='300' data-scrollable-start='bottom'>-->
                              <div class="scrollable" data-scrollable-height="300" data-scrollable-start="bottom">

                                <ul class='list-unstyled list-hover list-striped' id="chat_messages">

                                </ul>
                              </div>
                                        <form class="new-message" method="post" action="#" accept-charset="UTF-8">
                                        <input type="hidden" id="authenticity_ticket" value="{Session::get('idticket')}" />
                                        <input name="authenticity_token" type="hidden" />
                                        <input id="authenticity_name" type="hidden" value="{$datos.name}"/>
                                        <input class='form-control' id='message_body' autocomplete="off" name='message[body]' placeholder='Type your message here...' type='text'>
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


<!-- login user mod -->
<div class="modal fade" id="modal-puntuacion" tabindex="-1" style="display: none;" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Se dio por resuelto el ticket. Ahora le toca a Ud. !</h4>
      </div>
      <div class="modal-body">

      <!-- error login -->
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
      </form>

    </div>
    <div class="modal-footer">
      <button class="btn btn-warning btn-block btn-lg" id="btn_guardar_star"><i class="icon-star"></i> Guardar Puntuacion !</button>
    </div>
  </div>
</div>
</div>