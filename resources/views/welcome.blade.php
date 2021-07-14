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
            <div class="col-4 offset-md-7 mt-5">
                <img src="assets/img/texto_es_momento.png" alt="">
            </div>     

        </div>
      </div>
      <div class="container">
        <div class="row">
            <div class="col-12 mt-5 extra-buffer tarjeta">
                
                <div class="container datos">
                    <form id="lead" method="POST" action="">
                <div class="form-group">
                    <div class="col-10 offset-1">
                        
                        <div class="row">
                            <input name="nombre" type="text" class="form-control is-valid" placeholder="Nombre Completo" required>
                            <div class="valid-feedback feedback-icon">
                                <i class="fa fa-check"></i>
                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="row">
                        <div class="col-5 offset-1">
                            <input type="text" name="correo" class="form-control is-valid" placeholder="Correo electrónico" required>
                            <div class="valid-feedback feedback-icon">
                                <i class="fa fa-check"></i>
                            </div>
                        </div>
                        <div class="col-5">
                            
                            <input name="telefone" id="phone" type="tel" class="form-control is-valid" placeholder="Celular(obligatorio)" required>
                            <div class="valid-feedback feedback-icon">
                                <i class="fa fa-check"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5 offset-1">
                            <input type="text" name="codigo" class="form-control is-valid" value="VERANOCOOL2007" placeholder="Código de la promoción" readonly="readonly">
                            <div class="valid-feedback feedback-icon">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="invalid-feedback feedback-icon">
                                <i class="fa fa-times"></i>
                            </div>
                        </div>
                        <div class="col-5">
                            <input name="programa" type="text" class="form-control is-valid" value="Programa: Lic. Seguridad Pública" readonly="readonly">
                            <div class="valid-feedback feedback-icon">
                                <i class="fa fa-check"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5 mt-2 offset-1 zona-premio">
                            <p class="monto">Monto Asignado:</p>
                            <p class="premio">$2,340.00 <span>MN/MX*</span></p>
                        </div>
                        <div class="col-6 mt-2">
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


    </div>
    <section id="licenciatura">
        <div class="container">
            <div class="row">
                <div class="col-6 mt-9">
                    <h1 class="nombre-licenciatura">LICENCIATURA EN LÍNEA SEGURIDAD PUBLICA</h1>
                </div>
            </div>
            <div class="row mt-5" >
                <div class="col-sm-6">
                    <div class="row first" data-aos="fade-up" data-aos-duration="1000">
                        <div class="col-sm-1">
                        <img src="assets/img/checkbox.png"  alt="">
                        </div>
                        <div class="col-sm-10">
                            <p class="principal">Título y cédula profesional con validez oficial</p>
                            <p class="info">R.V.O.E. SEP-SES 21/114/01/2042/2017.</p>
                        </div>
                    </div>
                    <div class="row" data-aos="fade-up" data-aos-duration="1000"> 
                        <div class="col-sm-1">
                            <img src="assets/img/checkbox.png"  alt="">
                        </div>
                        <div class="col-sm-10">
                            <p class="principal">Atención y seguimiento excepcional</p>
                            <p class="info">Lo puedes comprobar, ninguna otra institución de educación en línea te atenderá como nosotros.</p>
                        </div>
                    </div>
                    <div class="row" data-aos="fade-up" data-aos-duration="1000">
                        <div class="col-sm-1">
                            <img src="assets/img/checkbox.png"  alt="">
                        </div>
                        <div class="col-sm-10">
                            <p class="principal">Nosotros vamos contigo</p>
                            <p class="info">Podrás estudiar totalmente en línea, en donde tú quieras y cuando tú quieras, las 24 horas, los 7 días. No irás a la escuela, la escuela ira contigo.</p>
                        </div>
                    </div>
                    <div class="row" data-aos="fade-up" data-aos-duration="1000">
                        <div class="col-sm-1">
                            <img src="assets/img/checkbox.png" alt="">
                        </div>
                        <div class="col-sm-10">
                            <p class="principal">Descarga nuestro plan de estudios</p>
                            <p class="info">Aprenderás herramientas prácticas que podrás utilizar de inmediato en tu vida laboral.</p>
                        </div>    
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/qSnbNZpD0tQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="row">
                        <div class="col float-right mt-3">
                            <img class="logos float-right" src="assets/img/SEP_logo.png" alt=""><img class="logos float-right mar" src="assets/img/progama_en_linea.svg" alt=""><img class="logos float-right mar" src="assets/img/RVOE.png" alt="">
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
                    <div class="col">
                        <ul class="menu-inferior">
                            <li class="titulo">Adminisiones</li>
                            <li><a href="https://www.iexe.edu.mx/becas-2">Becas</a></li>
                            <li><a href="https://www.iexe.edu.mx/admision">Admisiones</a></li>
                            <li><a href="https://www.iexe.edu.mx/contacto-2">Atención a alumnos</a></li>
                            <li><a href="https://www.iexe.edu.mx/politica-privacidad">Política de privacidad</a></li>
                        </ul>
                    </div>
                    <div class="col">
                        <ul>
                            <li class="titulo">Acerca de IEXE</li>
                            <li><a href="https://www.iexe.edu.mx/editorial">IEXE editorial</a></li>
                            <li><a href="https://www.iexe.edu.mx/investigacion">Investigación IEXE</a></li>
                        </ul>
                    </div>
                    <div class="col">
                        <ul>
                            <li class="titulo">Contacto</li>
                            <li><a href="https://goo.gl/maps/nFaq551U71P4vRsNA">Blvd. Esteban de Antuñano # 2702 ciudad de Puebla C.P 72160</a></li>
                            <li><a href="tel:8002868464">Teléfono: 800-286-84-64</a></li>
                            <li><a href="mailto:posgrados@iexe.mx">posgrados@iexe.mx</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row social">
                    <div class="col-9"></div>
                    <div class="col-3">
                        <ul class="social_link">
                            <li><a class="facebook hasTooltip" href="https://www.facebook.com/IEXE.Universidad" target="" rel="noopener"><i class="fa fa-facebook"></i></a></li><li><a class="twitter hasTooltip" href="https://twitter.com/IEXE_Uni" target="" rel="noopener"><i class="fa fa-twitter"></i></a></li><li><a class="linkedin hasTooltip" href="https://www.linkedin.com/company/iexe-escuela-de-pol-ticas-p-blicas/" target="" rel="noopener"><i class="fa fa-linkedin"></i></a></li><li><a class="instagram hasTooltip" href="https://www.instagram.com/iexe_universidad/" target="" rel="noopener"><i class="fa fa-instagram"></i></a></li><li><a class="youtube hasTooltip" href="https://www.youtube.com/channel/UCrpLCwD_H0N-3l0nhhHJyYg" target="" rel="noopener"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                     
                </div>
            </div>
        </div>
    </section>


<!-- Modal Éxito -->
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
            <p>Hemos recibido su solicitud para hacer válida la promoción, nuestro equipo se pondrá en contacto con usted</p>
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
            <p>Por favor vuelva a intentarlo y asegurese que los campos son llenados con información válida</p>
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
        .box{
            height: 100vh;
            width: 100%;
            display: table;
            background-size: auto ;
            background-image: url(assets/img/hombreBg.png) , linear-gradient(to top, #264862 0%, #9DB0B9 24%);
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
            margin-top: 6em!important;
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
            background-size: cover;
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
        .iti {
            position: relative;
            display: inline-block;
            margin-top: 25px;
        }
        input:-webkit-autofill,
        input:-webkit-autofill:hover, 
        input:-webkit-autofill:focus, 
        input:-webkit-autofill:active
        {
        -webkit-box-shadow: 0 0 0 30px rgba(255, 255, 255, 0.2) inset !important;
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
                    $("#error-alerta").html("El servidor remoto no se pudo contactar, por favor intente más tarde");
                }
            });

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