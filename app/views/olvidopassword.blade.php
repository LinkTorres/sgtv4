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
    {{ HTML::style('css/animate.css'); }}

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" />
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
    <div class="full-content-center animated fadeInDownBig">
            <a href="#fakelink"><img src="assets/img/logo-login.png" class="logo-login img-circle" alt="Logo"></a>
            <div class="login-wrap">
                <div class="box-info">
                <h2 class="text-center"><strong>¿Olvidaste tu password? </strong></h2>
                
                    <form role="form">
                        <div class="form-group login-input">
                        <i class="fa fa-user overlay"></i>
                        <input type="email" class="form-control text-input" placeholder="Tu correo eletronico">
                        </div>
                        
                        <button type="button" class="btn btn-success btn-block"><i class="fa fa-lock"></i> Enviar Password</button>
                    </form>
                </div>
                <p class="text-center"><a href="./login"><i class="fa fa-sign-in"></i> Volver al login</a></p>
            </div>
        </div>
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