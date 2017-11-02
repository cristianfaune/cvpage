<div class="container-fluid">
  <div class="row">
    <div class="section-background col-xs-12 col-sm-6 col-sm-push-6" data-mh="match-contact">
      <h2>Contáctame</h2>
      <ul class="info">
        <li>
          <i class="fa fa-map-marker"></i>
          <span>Santiago, Región Metropolitana</span>
        </li>
        <li>
          <i class="fa fa-envelope"></i>
          <span>cristianfaune.t@gmail.com</span>
        </li>
        <li>
          <i class="fa fa-phone"></i>
          <span>+(56) 981364710</span>
        </li>
      </ul>
      {!! Form::open(['url' => 'contact', 'id'=>'contactform']) !!}
        <div class="input-style">
          {{Form::text('name',null, array('id'=>'name',
            'name'=>'name', 'placeholder'=>'Nombre'))}}
        </div>
        <div class="input-style">
          {{Form::text('email',null, array('id'=>'email',
             'name'=>'email', 'placeholder'=>'E-Mail'))}}
        </div>
        <div class="text-style">
          {{Form::textarea('message',null, array(
          'name'=>'message', 'id'=>'message', 'placeholder'=>'Mensaje'))}}
        </div>
        <div class="g-recaptcha" data-sitekey="6Lc6ozYUAAAAAG2odHWXmJefY1eeVVwvm2didNAw"></div>
        {{Form::submit('Enviar', array('class'=>'submit-style','id'=>'submit',
        'name'=>'submit'))}}
        <div class="submit-result">
          <p id="success">Tu mensaje fue enviado!</p>
          <p id="error">Algo salió mal, ingresa todos los datos correctamente por favor!</p>
        </div>
      {!! Form::close() !!}
    </div>
    <div class="google-maps col-xs-12 col-sm-6 col-sm-pull-6">
      <div id="map-canvas">
      </div>
    </div>
  </div><!-- end row -->
</div><!-- end container -->
