@extends('layouts.main')
@section('content')
@include('layouts.header')

<section id="preguntasFrecuentes" class="margin-top-50 animated fadeIn">
	
	<div class="row">
		<div class="col-sm-12">
			<h1 class="text-center margin-bottom-50"><b>PREGUNTAS FRECUENTES</b></h1>
      <div class="row bk-white panel-cont">
        <div class="container">
  			<div class="titulos_faqs ">CÓMO FUNCIONA ARGENPESOS</div>
              <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#faq1">
                        <span class="change_char">-</span>
                        ¿QUÉ ES ARGENPESOS Y CÓMO FUNCIONA?
                      </a>
                    </h4>
                  </div>
                  <div id="faq1" class="panel-collapse collapse in">
                    <div class="panel-body">
                      Somos una entidad de préstamos personales de dinero. Podés realizar el trámite online ingresando tus datos en: <a href="https://www.argenpesos.com.ar/micuenta/quiero-pagar.php" target="_blank">https://www.argenpesos.com.ar/micuenta/quiero-pagar.php</a> o a través de cualquiera de nuestros canales de contacto: <br />
            					- Tel: 0800-345-2733<br />
            					- WhatsApp: <a href="https://api.whatsapp.com/send?phone=01132414878&text=Hola!%20les%20consulto%20por%20los%20servicios%20vistos%20en%20www.argenpesos.com.ar" target="_blank">+54 9 11 3241-4878</a>  <br />
            					- Mail: <a href="mailTo:info@argenpesos.com.ar?subject=MAIL%20DESDE%20WEB" target="_blank" >info@argenpesos.com.ar</a><br />
            					- <a href="https://www.facebook.com/argenpesos" target="_blank">Facebook: Argenpesos</a><br />
            					- <a href="sucursales">Sucursales de Argenpesos</a><br />
                    </div>
                  </div>
                </div>

                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#faq2">
                        <span class="change_char">+</span>
                        ¿CUÁNTO SE PUEDE PEDIR Y EN CUÁNTAS CUOTAS? 
                      </a>
                    </h4>
                  </div>
                  <div id="faq2" class="panel-collapse collapse">
                    <div class="panel-body">
                      ARGENPESOS te ofrece préstamos desde $3.000 a $60.000 y hasta en 24 cuotas.  El monto final a otorgar, dependerá del análisis crediticio que la empresa realiza con los datos ingresados por el cliente en el formulario web o enviado a través de alguno de nuestros canales de comunicación.
                    </div>
                  </div>
                </div>

                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#faq3">
                        <span class="change_char">+</span>
                        ¿CUÁL ES LA TASA DE INTERÉS?
                      </a>
                    </h4>
                  </div>
                  <div id="faq3" class="panel-collapse collapse">
                    <div class="panel-body">
                      La tasa de interés varía según el tipo de préstamo y la cantidad de cuotas a la que haya accedido el cliente. Para conocer esto, podés ingresar a  <a href="saca_tu_prestamo" target="_blank">http://www.argenpesos.com.ar/solicitarprestamo/</a>
                    </div>
                  </div>
                </div>
              </div>
        </div>
      </div>

      <div class="row panel-cont">

        <div class="container">

            <div class="titulos_faqs">ARGENPESOS SUCURSALES</div>
            <div class="panel-group" id="accordion">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#faq4">
                      <span class="change_char">-</span>
                      ¿CUÁLES SON LOS PASOS PARA EL OTORGAMIENTO DEL PRÉSTAMO?
                    </a>
                  </h4>
                </div>
                <div id="faq4" class="panel-collapse collapse">
                  <div class="panel-body">
                    - 1º Acercate a nuestra sucursal con: DNI, último recibo de haberes, servicio, movimientos y cbu.<br />
                    - 2° Aprobamos o rechazamos tu solicitud<br />
                    - 3° Te llevás el dinero en el acto.<br />
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#faq5">
                      <span class="change_char">+</span>
                      ¿CUÁNDO Y CÓMO SE PAGAN LAS CUOTAS?
                    </a>
                  </h4>
                </div>
                <div id="faq5" class="panel-collapse collapse">
                  <div class="panel-body">
                    Dependiendo del plan otorgado, las cuotas se debitan de mensualmente de la cuenta bancaria o te acercás mensualmente a nuestras sucursales a abonar. 
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#faq6">
                      <span class="change_char">+</span>
                      ¿CÓMO HAGO PARA RENOVAR MI PRÉSTAMO?
                    </a>
                  </h4>
                </div>
                <div id="faq6" class="panel-collapse collapse">
                  <div class="panel-body">
                    Podés consultar tu renovación al <a href="https://api.whatsapp.com/send?phone=01132414878&text=Hola!%20les%20consulto%20por%20los%20servicios%20vistos%20en%20www.argenpesos.com.ar" target="_blank">+54 9 11 3241-4878</a> y/o a <a href="mailTo:info@argenpesos.com.ar?subject=MAIL%20DESDE%20WEB" target="_blank" >info@argenpesos.com.ar</a>  o acercarte a nuestras sucursales.
                  </div>
                </div>
              </div>
            </div>
            </div>
            </div>

            <div class="row bk-white panel-cont">
            <div class="container">
            <div class="titulos_faqs">ARGENPESOS ONLINE</div>
            <div class="panel-group" id="accordion">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#faq7">
                      <span class="change_char">-</span>
                      ¿CUÁLES SON LOS PASOS PARA EL OTORGAMIENTO DEL PRÉSTAMO?
                    </a>
                  </h4>
                </div>
                <div id="faq7" class="panel-collapse collapse">
                  <div class="panel-body">
                    - 1º - Envianos tu solicitud: completá el formulario de nuestra web o enviá sus datos a través de alguno de nuestros canales de comunicación. <br />
                    - 2º - Aprobación: Analizaremos los datos ingresados y pre-aprueba o rechaza la solicitud. <br />
                    - 3º - Contacto con el cliente: todos los clientes cuya solicitud fue preaprobada, reciben una llamada, whatsapp o mail de alguno de nuestros asesores de venta, quien realizará una verificación de identidad y completa los datos del cliente. <br />
                    - 4º - Confirmación del otorgamiento: una vez confirmado el préstamo, te enviamos la documentación necesaria para que seas nuestro cliente.<br />
                    - 5°- Transferencia: se realiza la transferencia del valor acordado a la cuenta bancaria del cliente.<br />
                    - 6º - Acreditación: el cliente recibe en su cuenta bancaria el dinero del préstamo otorgado.<br />
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#faq8">
                      <span class="change_char">+</span>
                      ¿CUÁNDO Y CÓMO RECIBO EL PRÉSTAMO?
                    </a>
                  </h4>
                </div>
                <div id="faq8" class="panel-collapse collapse">
                  <div class="panel-body">
                    <b>Una vez que el otorgamiento del préstamo fue confirmado, la acreditación (ver el dinero en la cuenta) demora  hasta 48 horas hábiles. El tiempo de acreditación depende del banco del cliente.  El dinero es depositado en la cuenta bancaria tipo sueldo que ingresaste en el formulario y confirmaste con el asesor de Ventas.</b>
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#faq9">
                      <span class="change_char">+</span>
                      ¿CUÁNDO Y CÓMO SE PAGAN LAS CUOTAS?
                    </a>
                  </h4>
                </div>
                <div id="faq9" class="panel-collapse collapse">
                  <div class="panel-body">
                    Las cuotas se debitan de mensualmente de la cuenta bancaria del cliente.
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#faq10">
                      <span class="change_char">+</span>
                      ¿CÓMO HAGO PARA RENOVAR MI PRÉSTAMO?
                    </a>
                  </h4>
                </div>
                <div id="faq10" class="panel-collapse collapse">
                  <div class="panel-body">
                    <b>Podés consultar tu renovación al <a href="https://api.whatsapp.com/send?phone=01132414878&text=Hola!%20les%20consulto%20por%20los%20servicios%20vistos%20en%20www.argenpesos.com.ar" target="_blank">+54 9 11 3241-4878</a> y/o a <a href="mailTo:info@argenpesos.com.ar?subject=MAIL%20DESDE%20WEB" target="_blank" >info@argenpesos.com.ar</a>  o acercarte a nuestras sucursales.</b>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>


          <div class="row  panel-cont">
          <div class="container">
            <div class="titulos_faqs">QUIERO SOLICITAR UN PRÉSTAMO ONLINE</div>
            <div class="panel-group" id="accordion">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#faq11">
                      <span class="change_char">-</span>
                      ¿QUÉ REQUISITOS NECESITO?
                    </a>
                  </h4>
                </div>
                <div id="faq11" class="panel-collapse collapse">
                  <div class="panel-body">
                    - Ser mayor de 18 años <br />
                    - DNI<br />
                    - Poseer recibo de haberes<br />
                    - Ser titular de una cuenta bancaria de tipo sueldo <br />
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#faq12">
                      <span class="change_char">+</span>
                      ESTOY EN EL VERAZ… ¿PUEDO ACCEDER A UN PRÉSTAMO?
                    </a>
                  </h4>
                </div>
                <div id="faq12" class="panel-collapse collapse">
                  <div class="panel-body">
                    Si, dependiendo del banco por el cual percibas tus haberes.
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#faq13">
                      <span class="change_char">+</span>
                      ¿CÓMO SÉ SI MI SOLICITUD FUE APROBADA O RECHAZADA?
                    </a>
                  </h4>
                </div>
                <div id="faq13" class="panel-collapse collapse">
                  <div class="panel-body">
                    En ambas ocasiones, recibirás un correo electrónico o llamada telefónica en la que se te informará.
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#faq14">
                      <span class="change_char">+</span>
                      ¿QUÉ SIGNIFICA QUE MI SOLICITUD ESTÁ EN "ANÁLISIS"?
                    </a>
                  </h4>
                </div>
                <div id="faq14" class="panel-collapse collapse">
                  <div class="panel-body">
                    Si tu solicitud está “en análisis”, significa que se está realizando la evaluación de los datos que nos brindaste para ver si es posible que accedas en este momento a algún préstamo. Deberás esperar la confirmación final en tu casilla de mail, vía telefónica, o Whatsapp.
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#faq15">
                      <span class="change_char">+</span>
                      ¿POR QUÉ MI SOLICITUD FUE RECHAZADA?
                    </a>
                  </h4>
                </div>
                <div id="faq15" class="panel-collapse collapse">
                  <div class="panel-body">
                    Hay diversos motivos por los cuales tu solicitud pudo haber sido rechazada. Una de ellas puede ser que no cumplas con todos o alguno de los requisitos antes  mencionados. Otra razón puede ser que, por tu situación actual crediticia, el sector de Análisis de ARGENPESOS considere que por el momento no estamos en condiciones de otorgarte un préstamo.
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#faq16">
                      <span class="change_char">+</span>
                      MI SOLICITUD FUE APROBADA, ¿Y AHORA?
                    </a>
                  </h4>
                </div>
                <div id="faq16" class="panel-collapse collapse">
                  <div class="panel-body">
                    Si tu solicitud fue aprobada, deberás esperar que un asesor de ventas se contacte con vos para contarte las opciones de préstamos disponibles que tenés y para combinar con vos el otorgamiento. Para ese momento, te recomendamos tener a mano tu DNI, CBU y movimientos*.
                    <br /><br />
                    *¿Qué es el CBU?: Es un número de 22 dígitos, que identifica una cuenta bancaria de manera única en todo el sistema financiero argentino. 
                    <br /><br />
                    *¿Cómo me entero del CBU de mi Cuenta Sueldo?:Podés obtener tu número de CBU desde el cajero automático, ingresando en “Consultas” → Número de CBU. También podés consultarlo desde la página web de Home Banking de tu banco.
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>

          <div class="row bk-white panel-cont">
          <div class="container">
            <div class="titulos_faqs">SOBRE MI PRÉSTAMO APROBADO ONLINE</div>
            <div class="panel-group" id="accordion">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#faq17">
                      <span class="change_char">-</span>
                      ¿EN CUÁNTO TIEMPO PUEDO VER EL DINERO ACREDITADO EN MI CUENTA?
                    </a>
                  </h4>
                </div>
                <div id="faq17" class="panel-collapse collapse">
                  <div class="panel-body">
                    Una vez que el otorgamiento del préstamo fue confirmado, la acreditación (ver el dinero en la cuenta) demora  hasta 48 horas hábiles. 
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#faq18">
                      <span class="change_char">+</span>
                      YA PASARON 48 HORAS HÁBILES Y AÚN NO RECIBÍ EL DINERO EN MI CUENTA, ¿QUÉ HAGO?
                    </a>
                  </h4>
                </div>
                <div id="faq18" class="panel-collapse collapse">
                  <div class="panel-body">
                    Si ya transcurrió el tiempo máximo de espera para la acreditación, comunicate a la brevedad con nosotros al 0800-345-2733 o via mail a info@argenpesos.com.ar informando esta situación, para que podamos revisar qué sucedió y para que podamos ayudarte a resolverlo cuanto antes.
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>


          <div class="row  panel-cont" id="consulta_tu_deuda">
          <div class="container">
            <div id="consulta_tu_cuenta" class="titulos_faqs">ACERCA DE CONSULTÁ TU CUENTA</div>
            <div class="panel-group" id="accordion">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#faq66">
                      <span class="change_char">-</span>
                      ¿POR QUÉ DEJAR DE SER DEUDOR?
                    </a>
                  </h4>
                </div>
                <div id="faq66" class="panel-collapse collapse collapse in">
                  <div class="panel-body">
                    La mora financiera ocasiona pérdida del crédito personal, intimaciones permanentes y problemas jurídicos. Diversas situaciones pueden conducirnos al incumplimiento a pesar de que tengamos el deseo de pagar. 
                    <br><br>
                  Por eso creamos <b>ArgenPagos</b>, para facilitarte la consulta de tu cuenta <b>más rápido y fácil que nunca.</b>
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#faq67">
                      <span class="change_char">+</span>
                      ¿CÓMO SE COMPONE UNA DEUDA ACTUALIZADA?
                    </a>
                  </h4>
                </div>
                <div id="faq67" class="panel-collapse collapse collapse in">
                  <div class="panel-body">
                    A la deuda inicial se le suma:
                    <br><br>
                    El interés compensatorio <b>"compensa"</b> al acreedor por el tiempo en que éste <b>"cede"</b> su dinero al deudor. Este interés sólo se debe si se ha pactado previamente, con excepción de los <b>"compensatorios legales"</b> (Artículos 466, 1950 y 2298 del Código Civil) y sólo es aplicable a la obligación contractual, a diferencia del Moratorio que es aplicable a todas las obligaciones.
                    <br><br>
                    Es el interés que se produce ante la falta de pago del capital en la fecha estipulada. En este caso el Acreedor (prestamista) tiene derecho <b>"a penar"</b> al deudor por no haberle abonado en término. Estos intereses aplican una tasa mayor que los intereses compensatorios. Es decir, es el interés causado por incumplimiento de la obligación pactada.
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>


          <div class="row bk-grey panel-cont">
          <div class="container">
            <div class="titulos_faqs">¿CÓMO PAGO MI PRÉSTAMO? ONLINE Y SUCURSALES</div>
            <div class="panel-group" id="accordion">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#faq19">
                      <span class="change_char">-</span>
                      ¿CUÁNDO Y CÓMO PAGO LAS CUOTAS DE MI PRÉSTAMO?
                    </a>
                  </h4>
                </div>
                <div id="faq19" class="panel-collapse collapse">
                  <div class="panel-body">
                    Las cuotas de tu préstamo serán debitadas de forma automática de la misma cuenta bancaria en la que te depositamos el dinero. Y la fecha de pago será la pactada al momento del otorgamiento. Si obtuviste un préstamo de pago voluntario, podrás acercarte del 1 al 10 a abonar en la sucuesal más cercana. Si te olvidaste el valor de las cuotas podrás consultar al 0800-345-2733 o por mail a <a href="mailto:cobranzas@argenpesos.com.ar">cobranzas@argenpesos.com.ar</a>
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#faq20">
                      <span class="change_char">+</span>
                      ¿QUÉ VENTAJAS TENGO AL PAGAR LAS CUOTAS A TÉRMINO?
                    </a>
                  </h4>
                </div>
                <div id="faq20" class="panel-collapse collapse">
                  <div class="panel-body">
                    <b>Teniendo tus cuotas al día participás automáticamente de diferentes sorteos y premios.</b>
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#faq21">
                      <span class="change_char">+</span>
                      ¿CÓMO SÉ SI LA CUOTA FUE DEBITADA CORRECTAMENTE DE MI CUENTA?
                    </a>
                  </h4>
                </div>
                <div id="faq21" class="panel-collapse collapse">
                  <div class="panel-body">
                    La forma más fácil y segura de confirmar si la cuota fue debitada correctamente de tu cuenta es revisar los movimientos bancarios a través del cajero o del home banking de tu banco. Si llegaras a identificar alguna irregularidad con el débito de tu cuota, por favor comunicate a la brevedad con nosotros al 0800-345-2733 o via mail a<a href="mailto:cobranzas@argenpesos.com.ar"> cobranzas@argenpesos.com.ar</a>
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#faq22">
                      <span class="change_char">+</span>
                      ¿QUÉ PASA SI LA CUOTA NO FUE DEBITADA EN TIEMPO Y FORMA DE MI CUENTA?
                    </a>
                  </h4>
                </div>
                <div id="faq22" class="panel-collapse collapse">
                  <div class="panel-body">
                    Una de las razones para que la cuota no haya podido ser debitada en tiempo y forma es la falta de fondos. Si estás seguro de contar con el dinero suficiente en tu cuenta para pagar la cuota y aun así ésta no fue debitada, por favor entrá en contacto a la brevedad con el sector de Cobranzas Argenpesos al 0800-345-2733 o via mail a <a href="mailto:cobranzas@argenpesos.com.ar" target="_blank">cobranzas@argenpesos.com.ar</a>
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#faq23">
                      <span class="change_char">+</span>
                      CREO QUE SE ME HICIERON DÉBITOS INCORRECTOS EN MI CUENTA, ¿QUÉ HAGO? 
                    </a>
                  </h4>
                </div>
                <div id="faq23" class="panel-collapse collapse">
                  <div class="panel-body">
                    Si creés que hubo algún error en los débitos realizados por ARGENPESOS en tu cuenta bancaria, por favor mandanos un mail <a href="mailto:cobranzas@argenpesos.com.ar" target="_blank">cobranzas@argenpesos.com.ar</a> con tu nombre y apellido, DNI y los comprobantes de esos débitos. Es importante que sea una imagen clara y nítida, donde se pueda ver: fecha, nombre de quien realiza el débito, valor, saldo y datos de la cuenta. El sector de Reclamos analizará tu situación y se pondrá en contacto con vos en cuanto tengan una respuesta para darte.
                  </div>
                </div>
              </div>
            </div>

          </div>

      </div>
		</div>
	</div>

	
</section>
@component('comp.contacto')
  @slot('class')
  bk-blue
  @endslot
  @slot('titleColor')
      blue
  @endslot
  @slot('color')
    color:white;
  @endslot
@component('comp.footer')
  @slot('class')
  @endslot
      @slot('terminos')
    @endslot
  
@endcomponent
@stop


@section('scripts')

<script>
  


    $(document).ready(function(){

      var help = {{$help}};

      if(help==true){
        $('html,body').animate({ scrollTop:$('#consulta_tu_deuda').offset().top-100  }, 'slow');

      }

      $("#content").addClass('bk-grey');

    });
</script>

@stop