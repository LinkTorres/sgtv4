<!DOCTYPE html>
<html>
    <head>
    <title>Lanceng - Responsive Admin Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="description" content="">
    <meta name="keywords" content="admin, bootstrap,admin template, bootstrap admin, simple, awesome">
    <meta name="author" content="">

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" />
    
    <!-- LANCENG CSS -->
    {{ HTML::style('css/style.css'); }}
    {{ HTML::style('css/style-responsive.css'); }}

    <!-- VENDOR -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" />
    {{ HTML::style('css/animate.css'); }}    
    {{ HTML::style('third/weather-icon/css/weather-icons.min.css'); }}
    {{ HTML::style('third/morris/morris.css'); }}
    {{ HTML::style('third/nifty-modal/css/component.css'); }}
    {{ HTML::style('third/sortable/sortable-theme-bootstrap.css'); }}
    {{ HTML::style('third/icheck/skins/minimal/grey.css'); }}
    {{ HTML::style('third/select/bootstrap-select.min.css'); }}
    {{ HTML::style('third/summernote/summernote.css'); }}
    {{ HTML::style('third/magnific-popup/magnific-popup.css'); }}
    {{ HTML::style('third/datepicker/css/datepicker.css'); }}


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js'); }}

    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js'); }}

    <![endif]-->
    
    <!-- FAVICON -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">
    </head>
    
    
    
    <!-- BODY -->
    <body class="tooltips full-content">
    
    
    <!-- BEGIN PAGE -->
    <div class="container">
        
        <!-- Begin Login Page -->
        <div class=" animated fadeInDownBig">
           
            <div class="login-wrap">
                <div class="box-info">
                <h2 class="text-center"><strong>Registro</strong></h2>
                    {{-- Preguntamos si hay algún mensaje de error y si hay lo mostramos  --}}
                <div class="box-info full">
                    <!-- FOrm selector #myWizard -->
                    
                    {{ Form::open(array('url' => '/Registro','id' => 'myWizard')); }}
                        <!-- First step -->
                        <section class="step" data-step-title="Primera Parte">
                            @if(Session::has('error'))
                                <div class="alert alert-danger">{{ Session::get('error') }}</div>
                                      @endif
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="inputUsername">Boleta</label>
                                        {{ Form::text('boleta', '', array('class' => 'form-control','placeholder' => 'Cédula','required')); }}
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword">Trabajo Terminal</label>
                                        {{ Form::text('tt', '', array('class' => 'form-control','placeholder' => 'Cédula','required')); }}
                                    </div>
                                </div><!-- End div. col-sm-6 -->
                                <div class="col-sm-6">
                                    <div class="notes">
                                    <div class="form-group">
                                        <label for="inputUsername"> Contraseña</label>
                                        {{ Form::text('password', '', array('class' => 'form-control','placeholder' => 'Cédula','required')); }}
                                    </div>
                                    <div class="form-group">
                                        <label for="inputUsernam2">Confirma tu contraseña</label>
                                        {{ Form::text('password2', '', array('class' => 'form-control','placeholder' => 'Cédula','required')); }}
                                    </div>
                                </div><!-- End div. col-sm-6 -->
                            </div>
                                º
                            </div><!-- End div .row -->
                        </section>
                        <!-- End first step -->
                        
                        
                        <!-- Second step -->
                        <section class="step" data-step-title="Segunda Parte">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="inputUsername">Nombre</label>
                                        {{ Form::text('nombre', '', array('class' => 'form-control','placeholder' => 'Cédula','required')); }}
                                    </div>
                                    <div class="form-group">
                                        <label for="inputUsername">Apellido Paterno</label>
                                        {{ Form::text('ap', '', array('class' => 'form-control','placeholder' => 'Cédula','required')); }}
                                    </div>
                                    <div class="form-group">
                                        <label for="inputUsername">Apellido Materno</label>
                                        {{ Form::text('am', '', array('class' => 'form-control','placeholder' => 'Cédula','required')); }}                                    </div>
                                </div><!-- End div .col-sm-6 -->
                                <div class="col-sm-6">
                                    <!-- Wizard notes -->
                                    <div class="notes">
                                        <div class="form-group">
                                        <label for="inputUsername">Correo Electronico</label>
                                        {{ Form::text('mail', '', array('class' => 'form-control','placeholder' => 'Cédula','required')); }}
                                    </div>
                                    <div class="form-group">
                                        <label for="inputUsername">Verificar Correo Electronico</label>
                                        {{ Form::text('mail2', '', array('class' => 'form-control','placeholder' => 'Cédula','required')); }}
                                    </div>
                                    <div class="form-group">
                                        <label for="inputUsername">Genero</label>
                                        {{ Form::text('genero', '', array('class' => 'form-control','placeholder' => 'Cédula','required')); }}
                                    </div>
                                    </div><!-- End div .notes -->
                                </div><!-- End div .col-sm-6 -->
                            </div><!-- End div .row -->
                        </section>
                        <!-- End second step -->
                        
                        
                        <!-- Third step -->
                        <section class="step" data-step-title="Tercera Parte">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="inputFirstname">Carrera</label>
                                        {{ Form::text('carrera', '', array('class' => 'form-control','placeholder' => 'Cédula','required')); }}
                                    </div>
                                    <div class="form-group">
                                        <label for="inputCity">Opción de Titulación</label>
                                        {{ Form::text('opcion', '', array('class' => 'form-control','placeholder' => 'Cédula','required')); }}
                                    </div>
                                </div><!-- End div .col-sm-6 -->
                                <div class="col-sm-6">
                                    <!-- Wizard notes -->
                                    <div class="notes">
                                        <div class="form-group">
                                        <label for="inputCity">Año de Inicio</label>
                                        {{ Form::text('inicio', '', array('class' => 'form-control','placeholder' => 'Cédula','required')); }}
                                      </div>
                                    </div><!-- End div .notes -->
                                </div><!-- End div .col-sm-6 -->
                            </div><!-- End div .row -->
                        </section>
                        <!-- End third step -->
                    </form>
                </div><!-- End div .box-info -->
                       
                  
                    
                </div>

                {{ Form::close() }}
            </div>
        </div>
        <!-- End Login Page -->
        
    </div><!-- End div .container -->
    <!-- END PAGE -->

    <!--
    ================================================
    JAVASCRIPT
    ================================================
    -->
    <!-- Basic Javascripts (Jquery and bootstrap) -->
    {{ HTML::script('js/jquery.js'); }}

    {{ HTML::script('js/bootstrap.min.js'); }}

    
    <!-- VENDOR -->
    
    <!-- Slimscroll js -->
    {{ HTML::script('third/slimscroll/jquery.slimscroll.min.js'); }}

    
    <!-- Morris js -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    {{ HTML::script('third/morris/morris.js'); }}

    <!-- Nifty modals js -->
    {{ HTML::script('third/nifty-modal/js/classie.js'); }}
    {{ HTML::script('third/nifty-modal/js/modalEffects.js'); }}

    <!-- Sortable js -->
    {{ HTML::script('third/sortable/sortable.min.js'); }}
 
    <!-- Bootstrao selectpicker js -->
    {{ HTML::script('third/select/bootstrap-select.min.js'); }}
 
    <!-- Summernote js -->
    {{ HTML::script('third/summernote/summernote.js'); }}
  
    <!-- Magnific popup js -->
    {{ HTML::script('third/magnific-popup/jquery.magnific-popup.min.js'); }}
   
    <!-- Bootstrap file input js -->
    {{ HTML::script('third/input/bootstrap.file-input.js'); }}
 
    <!-- Bootstrao datepicker js -->
    {{ HTML::script('third/datepicker/js/bootstrap-datepicker.js'); }}
  
    <!-- Icheck js -->
    {{ HTML::script('third/icheck/icheck.min.js'); }}
 
    <!-- Form wizard js -->
    {{ HTML::script('third/wizard/jquery.snippet.min.js'); }}
    {{ HTML::script('third/wizard/jquery.easyWizard.js'); }}
    {{ HTML::script('third/wizard/scripts.js'); }}
  
    <!-- LANCENG TEMPLATE JAVASCRIPT -->
    {{ HTML::script('js/lanceng.js'); }}

    </body>
</html>