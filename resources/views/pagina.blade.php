<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0edce41d7a.js" crossorigin="anonymous"></script>


    <title>SSP!</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Arimo:wght@400;500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@200;300&family=Roboto:wght@100;300;400;700;900&display=swap" rel="stylesheet">

    <!-- Inteli -->
    <link rel="stylesheet" href="{{asset('assets/css/intlTelInput.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('assets/css/demo.css')}}"> --}}

  </head>
  <body>
      <div class="box">
    <nav class="navbar navbar-expand-lg navbar-light bg-purple">
        <div class="container">
            <a class="navbar-brand" href="https://iexe.edu.mx">
                <img src="assets/img/Logo_IEXE-B.png" alt="">
              </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav justify-content-end justify-content-center">
                <li class="nav-item active">
                <a class="nav-link" href="#">Becas <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Nosotros</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Otros Programas</a>
                </li>
                <button class="boton-top" type="button">Contacta a un asesor
            </ul>
            </div>
        </div>
      </nav>
      <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-7 offset-5 offset-md-7 mt-5">
                <img style="margin-left: -15px" class="img-fluid" src="assets/img/texto_es_momento.png" alt="">
            </div>     

        </div>
      </div>
      <div class="container">
        <div class="row">
            <div class="col-12 mt-5 extra-buffer tarjeta d-none d-lg-block">
                
                <div class="container datos">
                    <form id="lead" method="POST" action="">
                <div class="form-group">
                    <div class="col-10 offset-1">
                        
                        <div class="row">
                            <input name="nombre" id="nombre" type="text" class="form-control" placeholder="Nombre Completo" minlength="3" required>
                            <div class="valid-feedback feedback-icon">
                                <i class="fa fa-check"></i>
                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="row">
                        <div class="col-5 offset-1">
                            <input type="text" id="correo" name="correo" class="form-control" placeholder="Correo electr??nico" minlength="3" required>
                            <div class="valid-feedback feedback-icon">
                                <i class="fa fa-check"></i>
                            </div>
                        </div>
                        <div class="col-5">
                            
                            <input name="telefono" id="phone" type="tel" class="form-control" placeholder="Celular(obligatorio)" minlength="8" required>
                            <div class="valid-feedback feedback-icon">
                                <i class="fa fa-check"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5 offset-1">
                            <input type="text" name="codigo" class="form-control is-valid" value="LSP0721" placeholder="C??digo de la promoci??n" readonly="readonly">
                            <div class="valid-feedback feedback-icon">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="invalid-feedback feedback-icon">
                                <i class="fa fa-times"></i>
                            </div>
                        </div>
                        <div class="col-5">
                            <input name="programa" type="text" class="form-control is-valid" value="Programa: Lic. Seguridad P??blica" readonly="readonly">
                            <div class="valid-feedback feedback-icon">
                                <i class="fa fa-check"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mt-2 offset-1 zona-premio">
                            <p class="monto">Monto Asignado:</p>
                            <p class="premio">$2,340.00 <span>MN/MX*</span></p>
                        </div>
                        <div class="col-md-5 mt-2">
                            <button id="lead" type="button" class="btn btn-primary btn-sm el-boton">Enviar y canjear</button>
                        </div>
                    </div>
                    </form>
                </div>
                </div>
                <img class="img-fluid tarjeta-descuento" src="assets/img/tarjetaTexto.png" alt="">
            </div>     

        </div>
      </div>
      <div class="container d-lg-none d-gd-none">
          <div class="row">
              <div class="col tarjeta-bg">
                  <h1 class="tarjeta-regalo">TARJETA DE REGALO</h1>
                <p class="felicidades">??Felicidades acabas de desbloquear las barreras hacia TU ??xito profesional! Reg??strate para hacer v??lido el monto asignado a esta tarjeta de regalo y canj??alos para tu nuevo ingreso a la Licenciatura en Seguridad P??blica.</p>
                <form id="lead-mo">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <input type="text" name="nombre" class="form-control" id="nombre_mo" placeholder="Nombre completo" minlength="3" required>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <input type="email" name="correo" class="form-control" id="email_mo" placeholder="Correo electr??nico" minlength="3" required>
                            </div>
                        </div>
                        
                    </div>

                    <div class="row">
                        <div class="col-5">
                            <div class="form-group">
                                <input type="text" name="codigo" value="LSP0721" class="form-control" id="codigo_promo_mo" placeholder="Codigo promo" readonly>
                            </div>  
                            
                        </div>
                        <div class="col-7">
                            <div class="form-group">
                                <input type="tel" name="telefono" class="form-control" id="tel_mo" placeholder="Celular">
                              </div>
                              
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" name="programa" value="Programa: Lic. Seguridad P??blica"  class="form-control" id="programa_mo" placeholder="Programa" readonly>
                    </div>
                    <div class="valid-feedback feedback-icon">
                        <i class="fa fa-check"></i>
                    </div>
                      <div class="row banda">
                          <div class="col-6">
                            <p class="previo ">Monto asignado:</p>
                            <p class="premio">$2,340.00<span>MN/MX*</span></p>
                          </div>
                          <div class="col-6 no-gutters">
                                <button id="lead_mo" type="button" class="btn btn-primary btn-sm el-boton">Enviar y canjear</button>
                          </div>
                          
                      </div>
                      <div class="row">
                        <div class="col">
                            <img class="center mx-auto d-block" src="assets/img/logo-tarjeta.png" alt="">
                        </div>
                    </div>
                      
                      
                  </form>
                
              </div>
              <div class="row">
                <div class="col">
                    <p class="disclaimer">V??lido ??nicamente para inscritos de nuevo ingreso a la Licenciatura en Seguridad P??blica. El monto asignado por $2,340 aplica ??nicamente para el pago de colegiaturas y sobre el precio de lista base, el cual, se mantendr?? vigente durante todo el programa. Se interrumpir?? el beneficio ??nicamente si se presenta adeudo o atraso de pago. El monto a pagar en colegiaturas tiene un incremento del 5% anual. No aplica con otras promociones, descuentos o beneficios y se encuentra sujeto a cambio sin previo aviso.</p>
                </div>
            </div>
          </div>
      </div>

    </div>
    <section id="licenciatura">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mt-9">
                    <h1 class="nombre-licenciatura">LICENCIATURA EN L??NEA SEGURIDAD PUBLICA</h1>
                </div>
            </div>
            <div class="row mt-5" >
                <div class="col-md-6">
                    <div class="row first" data-aos="fade-up" data-aos-duration="1000">
                        <div class="col-2 col-sm-1">
                        <img src="assets/img/checkbox.png"  alt="">
                        </div>
                        <div class="col-10 col-sm-10">
                            <p class="principal">T??tulo y c??dula profesional con validez oficial</p>
                            <p class="info">R.V.O.E. SEP-SES 21/114/01/2042/2017.</p>
                        </div>
                    </div>
                    <div class="row" data-aos="fade-up" data-aos-duration="1000"> 
                        <div class="col-2 col-sm-1">
                            <img src="assets/img/checkbox.png"  alt="">
                        </div>
                        <div class="col-10 col-sm-10">
                            <p class="principal">Atenci??n y seguimiento excepcional</p>
                            <p class="info">Lo puedes comprobar, ninguna otra instituci??n de educaci??n en l??nea te atender?? como nosotros.</p>
                        </div>
                    </div>
                    <div class="row" data-aos="fade-up" data-aos-duration="1000">
                        <div class="col-2 col-sm-1">
                            <img src="assets/img/checkbox.png"  alt="">
                        </div>
                        <div class="col-10 col-sm-10">
                            <p class="principal">Nosotros vamos contigo</p>
                            <p class="info">Podr??s estudiar totalmente en l??nea, en donde t?? quieras y cuando t?? quieras, las 24 horas, los 7 d??as. No ir??s a la escuela, la escuela ira contigo.</p>
                        </div>
                    </div>
                    <div class="row" data-aos="fade-up" data-aos-duration="1000">
                        <div class="col-2 col-sm-1">
                            <img src="assets/img/checkbox.png" alt="">
                        </div>
                        <div class="col-10 col-sm-10">
                            <p class="principal">Descarga nuestro plan de estudios</p>
                            <p class="info">Aprender??s herramientas pr??cticas que podr??s utilizar de inmediato en tu vida laboral.</p>
                        </div>    
                    </div>
                </div>
                <div class="col-12 col-md-6 mt-3">
                    <div class="row">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/qSnbNZpD0tQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="row">
                        <div class="col float-right mt-3">
                            <div class="contenedor-img">
                                <img class="logos float-right" src="assets/img/SEP_logo.png" alt=""><img class="logos float-right mar" src="assets/img/progama_en_linea.svg" alt=""><img class="logos float-right mar" src="assets/img/RVOE.png" alt="">
                            </div>
                            
                        </div>
                    </div>
                    

                </div>
            </div>
        </div>
    </section>
    <section class="mt-5" id="footer">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <img src="assets/img/Logo-IEXE_full.svg" alt="">
                    </div>
                    <div class="col-12 col-sm d-none d-sm-block">
                        <ul class="menu-inferior">
                            <li class="titulo">Adminisiones</li>
                            <li><a href="https://www.iexe.edu.mx/becas-2">Becas</a></li>
                            <li><a href="https://www.iexe.edu.mx/admision">Admisiones</a></li>
                            <li><a href="https://www.iexe.edu.mx/contacto-2">Atenci??n a alumnos</a></li>
                            <li><a href="https://www.iexe.edu.mx/politica-privacidad">Pol??tica de privacidad</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm d-none d-sm-block">
                        <ul>
                            <li class="titulo">Acerca de IEXE</li>
                            <li><a href="https://www.iexe.edu.mx/editorial">IEXE editorial</a></li>
                            <li><a href="https://www.iexe.edu.mx/investigacion">Investigaci??n IEXE</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm mt-8">
                        <ul>
                            <li class="titulo">Contacto</li>
                            <li><a href="https://goo.gl/maps/nFaq551U71P4vRsNA">Blvd. Esteban de Antu??ano # 2702 ciudad de Puebla C.P 72160</a></li>
                            <li><a href="tel:8002868464">Tel??fono: 800-286-84-64</a></li>
                            <li><a href="mailto:posgrados@iexe.mx">posgrados@iexe.mx</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row social">
                    <div class="col-0 col-md-8"></div>
                    <div class="col-12 col-md-4 mp">
                        <ul class="social_link">
                            <li><a class="facebook hasTooltip" href="https://www.facebook.com/IEXE.Universidad" target="" rel="noopener"><i class="fa fa-facebook"></i></a></li><li><a class="twitter hasTooltip" href="https://twitter.com/IEXE_Uni" target="" rel="noopener"><i class="fa fa-twitter"></i></a></li><li><a class="linkedin hasTooltip" href="https://www.linkedin.com/company/iexe-escuela-de-pol-ticas-p-blicas/" target="" rel="noopener"><i class="fa fa-linkedin"></i></a></li><li><a class="instagram hasTooltip" href="https://www.instagram.com/iexe_universidad/" target="" rel="noopener"><i class="fa fa-instagram"></i></a></li><li><a class="youtube hasTooltip" href="https://www.youtube.com/channel/UCrpLCwD_H0N-3l0nhhHJyYg" target="" rel="noopener"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                     
                </div>
            </div>
        </div>
    </section>


<!-- Modal ??xito -->
  <div class="modal fade" id="modalExito" tabindex="-1" role="dialog" aria-labelledby="modalExito" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="titulo">Gracias por enviarnos sus datos</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <p style="text-align:center"><i style="color: #28a745;font-size: 42px;" class="fas fa-check-circle" aria-hidden="true"></i></p>
            <p>Hemos recibido su solicitud para hacer v??lida la promoci??n, nuestro equipo se pondr?? en contacto con usted</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success mx-auto" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal Fracaso -->
  <div class="modal fade" id="modalFracaso" tabindex="-1" role="dialog" aria-labelledby="modalFracaso" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="titulo">Hubo un error al mandar su solicitud</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <p style="text-align:center"><i style="color: red;font-size: 42px;" class="fas fa-times"></i></p>
            <p>Por favor vuelva a intentarlo y asegurese que los campos son llenados con informaci??n v??lida</p>
            <div id="error-alerta" class="alert alert-danger" role="alert">
                
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger mx-auto" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
    <style>
        body{
            font-family: 'Arimo', sans-serif;
        }
        .navbar {
            height: 16vh;
            width: 100%;
        }
        @media screen and (max-width: 600px) {
            .navbar{
                height: 13vh;
            }
        }
        
        .box{
            height: 100vh;
            width: 100%;
            display: table;
            background-size: auto ;
            background-image: url(assets/img/hombreBg.png) , linear-gradient(to bottom, #9DB0B9 0%, #264862 24%);
            background-repeat: no-repeat;
        }
        nav.navbar.bg-purple {
            background: linear-gradient(
        83deg
        , rgba(41,188,206,0.55) 0%, rgba(27,85,162,0.55) 21%);
            background-blend-mode: revert;
        }
        .navbar-light a.nav-link {
            color: #fff!important;
        }
        .circulo{
            background: url('assets/img/realce.png');
        }

        .extra-buffer {
            margin-top: 11rem!important;
        }
        /* .tarjeta input[type="text"] {
            width: 100%;
            height: 50px;
            margin-top: 17px;
            background: none;
            border: none;
            outline: none;
            font-weight: 600;
            color: #3B4246;
        } */
        .tarjeta input[type="text"] {
            width: 88%;
            height: 40px;
            margin-top: 25px;
            background: none;
            border: none;
            outline: none;
            font-weight: 600;
            color: #3B4246;
        }
        .tarjeta input[type="email"] {
            width: 88%;
            height: 40px;
            margin-top: 25px;
            background: none;
            border: none;
            outline: none;
            font-weight: 600;
            color: #3B4246;
        }
        .tarjeta input[type="tel"] {
            width: 88%;
            height: 40px;
            margin-top: 25px;
            background: none;
            border: none;
            outline: none;
            font-weight: 600;
            color: #3B4246;
        }
        .tarjeta input[type="text"]:focus-visible {
            border: none!important;
            /* background: rebeccapurple; */
        }
        .container.datos {
            position: absolute;
            top: 142px;
        }
        p.premio {
            font-family: 'Roboto Mono', monospace;
            font-size: 54px;
            color: #fff;
        }
        .premio span {
            font-size: 21px;
        }
        p.monto {
            margin-top: 38px;
            margin-bottom: 1px;
            color: #FFF;
            font-weight: 600;
        }
        input:disabled {
            cursor: not-allowed;
            pointer-events: all !important;
        }
        button.el-boton {
            padding: 8px;
            border-radius: 35px;
            padding-right: 34px;
            padding-left: 34px;
            border: none;
            background: #B7DCE4;
            color: #368DAF;
            margin-top: 78px;
            font: normal normal normal 25px/41px Roboto;
            font-weight: 600;
        }
        img.img-fluid.tarjeta-descuento {
            margin-bottom: 50px;
        }
        h1.nombre-licenciatura {
            font-family: 'Roboto';
            font-weight: 900;
            color: #1B4668;
            font-size: 39px;
            line-height: 64px;
            /* border-bottom: 5px solid #BF023B; */
        }
        h1.nombre-licenciatura::after {
            content: "";
            width: 68%;
            height: 5px;
            background: #BF023B;
            position: absolute;
            bottom: 0px;
            left: 15px;
        }
        @media screen and (max-width: 600px) {
            h1.nombre-licenciatura {
            font-size: 26px;
            line-height: 40px;
            }
            p.principal{
                font-size: 14px;
            }
            p.info{
                font-size: 14px
            }
        }
        p.principal {
            font-weight: bold;
            font-size: 19px;
            font-family: 'Roboto';
            color: #1B4668;
            margin-bottom: 0;
            margin-top: -5px;
            margin-left: 10px;
        }
        p.info {
            size: 19px;
            font-family: 'Roboto';
            font-size: 19px;
            color: #1B4668;
            margin-top: -5px;
            margin-left: 10px;
        }
        @media screen and (max-width: 600px) {
            h1.nombre-licenciatura {
            font-size: 26px;
            line-height: 40px;
            }
            p.principal{
                font-size: 14px;
            }
            p.info{
                font-size: 14px
            }
        }
         @media screen and (max-width: 1200px){
            .container.datos{
                top: 105px;
            }
         }

        #licenciatura .row {
            margin-bottom: 10px;
        }
        #licenciatura .row.first {
            margin-bottom: 24px;
        }
        img.img-fluid.logos {
            height: 100%;
        }
        img.logos.float-right.mar {
            margin-right: 68px;
        }
        #footer{
            background: #1B4768;
            padding-top: 25px;
        }
        #footer .row {
            margin-top: 60px;
            color: #FFF;
        }
        #footer ul{
            list-style: none;
        }
        ul.menu-inferior {
            list-style: none;
        }
        #footer li.titulo {
            color: #7690a4;
            font-size: 16px;
            font-weight: 700;
        }
        #footer li {
            font-size: 13px;
            line-height: 30px;
            font-weight: 400;
        }
        #footer i.fa {
            float: left;
            color: #fff;
            /* margin-right: 10px; */
            width: 40px;
            font-size: 25px;
        }
        .row.social {
            margin-top: 20px!important;
            padding-bottom: 30px;
            border-top: 1px solid;
            padding-top: 20px;
        }
        #footer a {
            color: #fff;
        }
        .mt-9{
            margin-top: 6em;
        }
        button.boton-top {
            border: none;
            border-radius: 10px;
            padding: 0px 20px;
            background: #839DBB;
            color: #fff;
            height: 35px;
        }
        button.boton-top:hover {
            background: aqua;
            color: #000;
        }
        li.nav-item {
            margin-right: 42px;
        }
        @media screen and (min-width: 1500px) {
        .box {
            background-size: contain;
            }
        }
        .valid-feedback.feedback-icon,
        .invalid-feedback.feedback-icon {
            position: absolute;
            width: auto;
            bottom: 10px;
            right: 80px;
            margin-top: 0;
        }
        .form-control.is-valid, .was-validated .form-control:valid {
            outline: none!important;
        }
        .form-control.is-valid:focus, .was-validated .form-control:valid:focus {
            border-color: #28a745;
            box-shadow: none!important;
        }
        label#nombre-error {
            position: absolute;
            top: 26px;
            width: 110px;
            font-size: 12px;
            right: 10%;
            color: red;
        }
        label#correo-error {
            position: absolute;
            top: 28px;
            width: 110px;
            font-size: 12px;
            right: 15%;
            color: red;
        }
        label#phone-error {
            position: absolute;
            top: 8px;
            width: 110px;
            font-size: 12px;
            color: red;
            right: -15%;
        }
        .iti {
            position: relative;
            display: inline-block;
            margin-top: 25px;
        }
        @media only screen and (max-width: 600px) {
            .box {
                background-size: contain;
                background-position-y: 13vh;
            }
        }
        @media only screen and (max-width: 600px) {
            nav.navbar.bg-purple {
                background: linear-gradient( 
            83deg
            , rgba(41,188,206,1) 0%, rgba(27,85,162,1) 21%);
                background-blend-mode: revert;
            }
        }
        @media only screen and (max-width: 1350px) {
            .box {
                background-size: contain;
                background-position-y: 13vh;
            }
        }


        p.previo {
            position: absolute;
            top: -30px;
            color: #fff;
            padding-left: 7px;
        }
        .row.banda {
            background:rgba(157, 176, 185, 0.86);
            height: 45px;
            margin: 46px -15px;
            margin-bottom: 15px;
        }
        h1.tarjeta-regalo {
            text-align: center;
            color: #fff;
            font-family: 'Roboto';
            font-size: 18px;
            margin-top: 13px;
            font-weight: 600px
        }
        #lead-mo button.el-boton {
            padding: 0px;
            border-radius: 35px;
            padding-right: 20px;
            padding-left: 20px;
            border: none;
            background: #B7DCE4;
            color: #368DAF;
            margin-top: 7px;
            font: normal normal normal 12px/32px Roboto;
            font-weight: 600;
        }
        #lead-mo p.premio {
            font-size: 22px;
            margin-top: 8px;
            padding-left: 7px;
        }
        #lead-mo .premio span{
            font-size: 9px;
        }
        p.felicidades {
            color: #fff;
            font-size: 13px;
            text-align: center;
            font-family: 'Roboto';
        }
        p.disclaimer {
            color: #fff;
            text-align: center;
            font-size: 12px;
            font-family: 'Roboto';
            font-weight: 300;
            padding: 0 25px;
            line-height: 17px;

        }
        img.center.mx-auto.d-block {
            margin-bottom: 15px;
        }
        
        input:-webkit-autofill,
        input:-webkit-autofill:hover, 
        input:-webkit-autofill:focus, 
        input:-webkit-autofill:active
        {
        -webkit-box-shadow: 0 0 0 30px rgba(255, 255, 255, 0.2) inset !important;
        }
        .col.tarjeta-bg {
            background: linear-gradient(
        323deg
        , rgba(58,104,139,1) 0%, rgba(59,106,140,1) 100%, rgba(126,174,189,1) 100%);
            border-radius: 40px;
            margin: 15px;
        }
        @media only screen and (max-width: 600px) {
            .col.tarjeta-bg {
                border-radius: 8px;
            }
            img.logos.float-right.mar {
                margin-right: 20px;
            }
            .contenedor-img .float-right{
                float:unset!important;
                margin-left: 20px;
            }
        }
        .contenedor-img {
            width: 100%;
            text-align: center;
        }
        ul.social_link {
            width: 250px;
        }
        @media screen and (min-width: 605px) {
        .mp{
            text-align: -webkit-right;
        }

        }
        
        @media screen and (max-width: 1319px) {
            button.el-boton {
                margin-top: 40px;
            }
            p.monto{
                margin-top: 0px;
            }

        }

        @media only screen and (max-width: 1486px) {
            .navbar {
                height: 13vh;
            }
        }
        
        @media only screen and (max-width: 990px) {
            div#navbarNav {
                background: #1B55A2;
                padding: 15px;
                /* text-align: center; */
                z-index: 99;
            }
            .navbar-collapse a.nav-link {
            border-bottom: 1px solid;
            margin-bottom: 11px;
            }
            .col.tarjeta-bg {
                border-radius: 8px;
            }
        }
        @media screen and (max-width: 600px) {
            .box{
                background-image: url(assets/img/yaesviernes.png) , linear-gradient(to bottom, #9DB0B9 0%, #264862 24%);
                background-size: contain;
            }
            .mt-9{
                margin-top: 2em;
            }
            .mt-8{
                margin-top: 2em;
            }
            ul.social_link {
                margin: 0 auto;
            }
            .iti{
                margin-top: 0px;
            }
            .form-control.is-valid {
                /* background: #000!important; */
                color: green!important;
            }
        }
    </style>
        <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{asset('assets/js/intlTelInput.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>

    <script>
        // $("#submitButton").click(function() {

        // //Fetch form to apply custom Bootstrap validation
        // var form = $("lead")
        // //alert(form.prop('id')) //test to ensure calling form correctly

        // if (form[0].checkValidity() === false) {
        //     event.preventDefault()
        //     event.stopPropagation()
        // }
        // form.addClass('was-validated')
        // });

    </script>
    <script>
        var input = document.querySelector("#phone");
        var iti = window.intlTelInput(input, {
          // allowDropdown: false,
          // autoHideDialCode: false,
          // autoPlaceholder: "off",
          // dropdownContainer: document.body,
          // excludeCountries: ["us"],
          // formatOnDisplay: false,
          geoIpLookup: function(callback) {
            $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
              var countryCode = (resp && resp.country) ? resp.country : "";
              callback(countryCode);
            });
          },
          hiddenInput: "telefone",
          initialCountry: "auto",
          // localizedCountries: { 'de': 'Deutschland' },
          // nationalMode: false,
          // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
          // placeholderNumberType: "MOBILE",
          preferredCountries: ['mx' , 'ec', 'co', 'us', 'ar' , 'pa' , 'do'],
          // separateDialCode: true,
          utilsScript: "assets/js/utils.js",
        });

    </script>
        <script>
            var inputmo = document.querySelector("#tel_mo");
            var itin = window.intlTelInput(inputmo, {
              // allowDropdown: false,
              // autoHideDialCode: false,
              // autoPlaceholder: "off",
              // dropdownContainer: document.body,
              // excludeCountries: ["us"],
              // formatOnDisplay: false,
              geoIpLookup: function(callback) {
                $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
                  var countryCode = (resp && resp.country) ? resp.country : "";
                  callback(countryCode);
                });
              },
              initialCountry: "auto",
              // localizedCountries: { 'de': 'Deutschland' },
              // nationalMode: false,
              // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
              // placeholderNumberType: "MOBILE",
              preferredCountries: ['mx' , 'ec', 'co', 'us', 'ar' , 'pa' , 'do'],
              // separateDialCode: true,
              utilsScript: "assets/js/utils.js",
            });
    
          </script>
    <script>
        $(document).ready(function(){

            $('button#lead').click(function(){                
                var forma = document.getElementById('lead');
                var formData = new FormData(forma);
            	formData.append('telefono', String(iti.getNumber(crossOriginIsolated)));
                $.ajax({
                url: 'http://referidos.test/api/lead',
                type: 'POST',
                dataType: 'json',
                processData: false,
                contentType: false,
                data: formData,
                success: function(data){
                    if(data[0]['saved'] == true){
                        $("#modalExito").modal('show');
                        console.log(data[0]);
                        //console.log(data);
                        console.log(data[0]['fields'])
                    }else {
                        $("#modalFracaso").modal('show');
                        $("#error-alerta").html(data[0]['reason']);
                        console.log(data[0]['reason']);
                        console.log(data[0]['fields'])

                    }
                    
                    //
                },
                error: function(){
                    $("#modalFracaso").modal('show');
                    $("#error-alerta").html("El servidor remoto no se pudo contactar, por favor intente m??s tarde");
                }
            });

            });

            

        });
    </script>
    <script>
        $(document).ready(function() {
              $("#lead").validate({
                  debug: true,
                  rules: {
                      nombre : "required",
                      apellido: "required",
                      email: "required"
                  },
                  messages: {
                  nombre: {
                      required: "Por favor rellene su nombre",
                      minlength: jQuery.validator.format("Se requieren al menos {0} letras")
                      },
                      correo: {
                      required: "Por favor rellene su correo electr??nico",
                      minlength: jQuery.validator.format("Se requieren al menos {0} letras")
                      }
                  
                  },
                  
                  validClass: "is-valid",
              });
          });
    </script>
    <script>
        $(document).ready(function(){

            $('button#lead_mo').click(function(){                
                var leade = document.getElementById('lead-mo');
                var formData = new FormData(leade);
            	formData.append('telefono', String(itin.getNumber(crossOriginIsolated)));
                $.ajax({
                url: 'http://143.110.230.150/api/lead',
                type: 'POST',
                dataType: 'json',
                processData: false,
                contentType: false,
                data: formData,
                success: function(data){
                    if(data[0]['saved'] == true){
                        $("#modalExito").modal('show');
                        console.log(data[0]);
                        //console.log(data);
                        console.log(data[0]['fields'])
                    }else {
                        $("#modalFracaso").modal('show');
                        $("#error-alerta").html(data[0]['reason']);
                        console.log(data[0]['reason']);
                        console.log(data[0]['fields'])

                    }
                    
                    //
                },
                error: function(){
                    $("#modalFracaso").modal('show');
                    $("#error-alerta").html("El servidor remoto no se pudo contactar, por favor intente m??s tarde");
                }
            });

            });

            

        });
    </script>
    <script>
        $(document).ready(function() {
              $("#lead-mo").validate({
                  debug: true,
                  rules: {
                      nombre : "required",
                      apellido: "required",
                      email: "required"
                  },
                  messages: {
                  nombre: {
                      required: "Por favor rellene su nombre",
                      minlength: jQuery.validator.format("Se requieren al menos {0} letras")
                      },
                      correo: {
                      required: "Por favor rellene su correo electr??nico",
                      minlength: jQuery.validator.format("Se requieren al menos {0} letras")
                      }
                  
                  },
                  
                  validClass: "is-valid",
              });
          });
    </script>
    

    
    

    <script>
        AOS.init();
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>