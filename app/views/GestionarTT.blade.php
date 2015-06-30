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
			    <link rel="stylesheet" href="https://cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.css" />
			    <!-- LANCENG CSS -->
			    {{ HTML::style('css/style.css'); }}
			    {{ HTML::style('css/style-responsive.css'); }}

			    <!-- VENDOR -->
			    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" />
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
				<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
				<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
				<![endif]-->
				
				<!-- FAVICON -->
				<link rel="shortcut icon" href="assets/img/favicon.ico">

				
				</head>
				
				
				
				<!-- BODY -->
				<body class="tooltips">
				
				<!-- BEGIN PAGE -->
				<div class="container">
						
					<!-- Your logo goes here -->
					<div class="logo-brand header sidebar rows">
						<div class="logo">
							<h1><a href="./"><img src="images/logo.png" alt="Logo" > SGT ADMIN</a></h1>
						</div>
					</div><!-- End div .header .sidebar .rows -->
				
					<!-- BEGIN SIDEBAR -->
					<div class="left side-menu">
						
						
			            <div class="body rows scroll-y">
							
							<!-- Scrolling sidebar -->
			                <div class="sidebar-inner slimscroller">
							
								<!-- User Session -->
								<div class="media">
									<a class="pull-left" href="#fakelink">
										<img src="images/sgt.png" alt="Logo" width='70' height='70'>
										</a>
									<div class="media-body">
										Bienvenido,
										<h4 class="media-heading"><strong>ADMIN</strong></h4>
									</div><!-- End div .media-body -->
								</div><!-- End div .media -->
								
								
								
								
							
								<!-- Sidebar menu -->
								<div id="sidebar-menu">
									<ul>
										<li><a href="./"><i class="fa fa-home"></i> Dashboard</a></li>
										<li><a href="./gestionProfesores"><i class="fa fa-users"></i> Gestionar Profesores</a></li>
										<li class="active"><a href="./gestionartt"><i class="fa fa-university"></i> Gestionar TT</a></li>
										<li><a href="./registrott"><i class="fa fa-list"></i> Registros de TT</a></li>
										<li><a href="./gestionPasantes"><i class="fa fa-graduation-cap"></i>Pasantes</a></li>
										<li><a href="#"><i class="fa fa-angle-double-down i-right"></i><i class="fa fa-calendar"></i> Gestionar Protestas</a>
											<ul>
												<li><a href="./gestionProtestas"><i class="fa fa-angle-right"></i><i class=""></i> Registrar Protestas</a></li>
												<li><a href="./asignarProtesta"><i class="fa fa-angle-right"></i><i class=""></i> Asignar Fechas de Protestas</a></li>
											</ul>
										</li>
										<li><a href="./generarActa"><i class="fa fa-file-o"></i> Generar Actas</a></li>
										<li><a href="./generarOficio"><i class="fa fa-file-text-o	"></i> Generar Oficios</a></li>
										<li><a href="./estadisticas"><i class="fa fa-bar-chart"></i>Estadísticas</a></li>
									</ul>
									<div class="clear"></div>
								</div><!-- End div #sidebar-menu -->				
							</div><!-- End div .sidebar-inner .slimscroller -->
			            </div><!-- End div .body .rows .scroll-y -->
						
						
			        </div>
					<!-- END SIDEBAR -->
					
					
					
					<!-- BEGIN CONTENT -->
			        <div class="right content-page">
					
						<!-- BEGIN CONTENT HEADER -->
			            <div class="header content rows-content-header">
						
							<!-- Button mobile view to collapse sidebar menu -->
							<button class="button-menu-mobile show-sidebar">
								<i class="fa fa-bars"></i>
							</button>
							
							<!-- BEGIN NAVBAR CONTENT-->				
							<div class="navbar navbar-default" role="navigation">
								<div class="container">
									<!-- Navbar header -->
									<div class="navbar-header">
										<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
											<i class="fa fa-angle-double-down"></i>
										</button>
									</div><!-- End div .navbar-header -->
									
									<!-- Navbar collapse -->	
									<div class="navbar-collapse collapse">
																						
										<!-- Right navbar -->
										<ul class="nav navbar-nav navbar-right top-navbar">
											
											<!-- Dropdown notifications -->
											<li class="dropdown">
												<a href="#fakelink" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i><span class="label label-danger absolute">24</span></a>
												<ul class="dropdown-menu dropdown-message animated half flipInX">
													<!-- Dropdown notification header -->
													<li class="dropdown-header notif-header">New Notifications</li>
													<li class="divider"></li>
													
													<!-- Dropdown notification body -->
													<li class="unread">
														<a href="#fakelink">
														<p><strong>John Doe</strong> Uploaded a photo <strong>&#34;DSC000254.jpg&#34;</strong>
														<br /><i>2 minutes ago</i></p>
														</a>
													</li>
													<li class="unread">
														<a href="#fakelink">
														<p><strong>John Doe</strong> Created an photo album  <strong>&#34;Indonesia Tourism&#34;</strong>
														<br /><i>8 minutes ago</i></p>
														</a>
													</li>
													<li>
														<a href="#fakelink">
														<p><strong>Annisa</strong> Posted an article  <strong>&#34;Yogyakarta never ending Asia&#34;</strong>
														<br /><i>an hour ago</i></p>
														</a>
													</li>
													<li>
														<a href="#fakelink">
														<p><strong>Ari Rusmanto</strong> Added 3 products
														<br /><i>3 hours ago</i></p>
														</a>
													</li>
													<li>
														<a href="#fakelink">
														<p><strong>Hana Sartika</strong> Send you a message  <strong>&#34;Lorem ipsum dolor...&#34;</strong>
														<br /><i>12 hours ago</i></p>
														</a>
													</li>
													<li>
														<a href="#fakelink">
														<p><strong>Johnny Depp</strong> Updated his avatar
														<br /><i>Yesterday</i></p>
														</a>
													</li>
													
													<!-- Dropdown notification footer -->
													<li class="dropdown-footer"><a href="#fakelink"><i class="fa fa-refresh"></i> Refresh</a></li>
												</ul>
											</li>
											<!-- End Dropdown notifications -->
										
											
											<!-- Dropdown Messages -->
											<li class="dropdown">
												<a href="#fakelink" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="label label-danger absolute">24</span></a>
												<ul class="dropdown-menu dropdown-message animated half flipInX">
													<!-- Dropdown Messages header -->
													<li class="dropdown-header notif-header">New Messages</li>
													
													<!-- Dropdown messages body -->
													<li class="divider"></li>
													<li class="unread">
														<a href="#fakelink">
														<img src="assets/img/avatar/2.jpg" class="xs-avatar ava-dropdown" alt="Avatar">
														<strong>John Doe</strong><br />
														<p>Duis autem vel eum iriure dolor in hendrerit ...</p>
														<p><i>5 minutes ago</i></p>
														</a>
													</li>
													<li class="unread">
														<a href="#fakelink">
														<img src="assets/img/avatar/1.jpg" class="xs-avatar ava-dropdown" alt="Avatar">
														<strong>Annisa Rusmanovski</strong><br />
														<p>Duis autem vel eum iriure dolor in hendrerit ...</p>
														<p><i>2 hours ago</i></p>
														</a>
													</li>
													<li>
														<a href="#fakelink">
														<img src="assets/img/avatar/3.jpg" class="xs-avatar ava-dropdown" alt="Avatar">
														<strong>Ari Rusmanto</strong><br />
														<p>Duis autem vel eum iriure dolor in hendrerit ...</p>
														<p><i>5 hours ago</i></p>
														</a>
													</li>
													
													<!-- Dropdown messages footer -->
													<li class="dropdown-footer"><a href="#fakelink"><i class="fa fa-share"></i> See all messages</a></li>
												</ul>
											</li>
											<!-- End Dropdown messages -->
										
											<!-- Dropdown User session -->
											<li class="dropdown">
												<a href="#fakelink" class="dropdown-toggle" data-toggle="dropdown">Admin, <strong>CATT</strong> <i class="fa fa-chevron-down i-xs"></i></a>
												<ul class="dropdown-menu animated half flipInX">
													<li><a href="#fakelink">Mi Perfil</a></li>
													<li><a href="#fakelink">Cambiar Password</a></li>
													<li><a href="./BloquearPantalla"><i class="fa fa-lock"></i> Bloquear Pantalla</a></li>
													<li class="divider"></li>
													<li><a href="#fakelink"><i class="fa fa-cog"></i> Configuración</a></li>
													<li><a href="./logout" data-modal="logout-modal"> Cerrar Sesión</a></li>
												</ul>
											</li>
											<!-- End Dropdown User session -->
										</ul>
									</div><!-- End div .navbar-collapse -->
								</div><!-- End div .container -->
							</div>
							<!-- END NAVBAR CONTENT-->
			            </div>
						<!-- END CONTENT HEADER -->
						
						
						
						
						<!-- ============================================================== -->
						<!-- START YOUR CONTENT HERE -->
						<!-- ============================================================== -->
			            <div class="body content rows scroll-y">
							
							<!-- Page header -->
							<div class="page-heading">
								<h1><i class="fa fa-users"></i> Gestionar Profesores</h1>
							</div>
							<!-- End page header -->
							
							
							<!-- Begin info box -->
							@if(Session::has('correcto'))
			                <div class="alert alert-success">{{ Session::get('correcto') }}</div>
			                    @endif
							<div class="box-info">
								<h2><i class="fa fa-user-plus"></i><strong>Registrar TT</strong></h2>
										<!-- Additional button -->
										<div class="additional-btn">
											<a class="additional-icon"  data-toggle="collapse" data-target="#basic-form"><i class="fa fa-chevron-down"></i></a>
										</div>

										<!-- Basic form body -->
										<div id="basic-form" class="collapse in">
											
											{{-- Preguntamos si hay algún mensaje de error y si hay lo mostramos  --}}
			                             	@if(Session::has('error'))
			                            		<div class="alert alert-danger">{{ Session::get('error') }}</div>
			                                @endif
											{{ Form::open(array('url' => '/gestionartt')); }}
											<div class="form-group">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Número de TT </label>
												<div class="col-sm-9">
												{{ Form::text('numtt', '', array('placeholder' => 'Ej. 2014-A038', 'class'=> 'form-control col-xs-10 col-sm-5')); }}
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nombre del TT </label>
												<div class="col-sm-9">
													{{ Form::text('nombrett', '', array('placeholder' => 'Introduzca el Nombre', 'class'=> 'form-control')); }}
												</div>	
											</div>													
											<br> <h4>Información de los pasantes</h4>
											<!--Pasante1-->
											<div class="form-group">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-8">Pasante 1</label>
												<div class="col-sm-9">
													<span class="input-icon">
														{{ Form::text('pasante1', '', array('placeholder' => 'Boleta', 'class'=> 'form-control')); }}
													</span>
												</div>
											</div>															
											<!--Pasante2-->
											<div class="form-group">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-8">Pasante 2</label>
												
												<div class="col-sm-9">
													<span class="input-icon">
														{{ Form::text('pasante2', '', array('placeholder' => 'Boleta', 'class'=> 'form-control')); }}
														 

													</span>													
												</div>
											</div>
											<!--Pasante3-->
											<div class="form-group">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-8">Pasante 3</label>
												
												<div class="col-sm-9">
													<span class="input-icon">
														{{ Form::text('pasante3', '', array('placeholder' => 'Boleta', 'class'=> 'form-control')); }}
														 

													</span>
												</div>
											</div>
											<!--Pasante4-->
											<div class="form-group">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-8">Pasante 4</label>
												
												<div class="col-sm-9">
													<span class="input-icon">
														{{ Form::text('pasante4', '', array('placeholder' => 'Boleta', 'class'=> 'form-control')); }}
														 

													</span>
												</div>
											</div>
											<!--Pasanteo5-->
											<div class="form-group">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-8">Pasante 5</label>
												
												<div class="col-sm-9">
													<span class="input-icon">
														{{ Form::text('pasante5', '', array('placeholder' => 'Boleta', 'class'=> 'form-control')); }}
														 

													</span>
												</div>
											</div>
											<br> <h4>Información del jurado</h4>
											<div class="form-group">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-8">Director 1  </label>
												<select class="form-control col-xs-10 col-sm-5" name="director1">
													@foreach($Profes as $item)
														<option value="{{ $item->Cedula }}">{{ $item->Nombre }} {{ $item->ApellidoP }} {{ $item->ApellidoM }}</option>
													@endforeach
														
												</select>		
											</div>			
											<div class="form-group">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-8">Director 2  </label>
												<select class="form-control col-xs-10 col-sm-5" name="director2">
													@foreach($Profes as $item)
														<option value="{{ $item->Cedula }}">{{ $item->Nombre }} {{ $item->ApellidoP }} {{ $item->ApellidoM }}</option>
													@endforeach
													<option value="0">Ninguno</option>
												</select>	
											</div>	

											<h3><br><br>Sinodales</h3>
											<div class="form-group">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-8">Sinodal 1  </label>
												<select class="form-control col-xs-10 col-sm-5" name="sinodal1">
													@foreach($Profes as $item)
														<option value="{{ $item->Cedula }}">{{ $item->Nombre }} {{ $item->ApellidoP }} {{ $item->ApellidoM }}</option>
													@endforeach
												</select>	
												<label> 
													<input name="asis" class="ace ace-switch ace-switch-6" type="checkbox" />
													<span class="lbl"></span>Asistencia
												</label>
											</div>
											
											<div class="form-group">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-8">Sinodal 2  </label>
												<select class="form-control col-xs-10 col-sm-5" name="sinodal2">
													@foreach($Profes as $item)
														<option value="{{ $item->Cedula }}">{{ $item->Nombre }} {{ $item->ApellidoP }} {{ $item->ApellidoM }}</option>
													@endforeach
												</select>	
												<label> 
													<input name="asis2" class="ace ace-switch ace-switch-6" type="checkbox" />
													<span class="lbl"></span>Asistencia
												</label>
											</div>
											<div class="form-group">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-8">Sinodal 3  </label>
												<select class="form-control col-xs-10 col-sm-5" name="sinodal3">
													@foreach($Profes as $item)
														<option value="{{ $item->Cedula }}">{{ $item->Nombre }} {{ $item->ApellidoP }} {{ $item->ApellidoM }}</option>
													@endforeach
												</select>	
												<label> 
													<input name="asis3" class="ace ace-switch ace-switch-6" type="checkbox" />
													<span class="lbl"></span>Asistencia
												</label>
											</div>			
								

											

											<div class="clearfix form-actions ">
																		
												{{ Form::submit('Registrar', array('class' => 'btn btn-info')); }}
												{{ Form::close() }}								
											</div>
										
										</div><!-- End div #basic-form -->
									
							</div><!-- End div .box-info -->
							
			            	<div class="box-info">
					<h2><i class="fa fa-cogs"></i><strong> Administrar Profesores</strong> Form</h2>
							<!-- Additional button -->
							<div class="additional-btn">
								<a class="additional-icon"  data-toggle="collapse" data-target="#basic-form2"><i class="fa fa-chevron-down"></i></a>
							</div>

							<!-- Basic form body -->
							<div id="basic-form2" class="collapse in">
							<div class="table-responsive">
							<table id="profesores"  class="table table-striped table-bordered table-hover">
							<thead>
								<tr>
									<!--<th width="100px">Editar</th>-->
									<th width="120px">Num. TT</th>
                                    <th width="200px">Director 1</th>
                                    <th width="200px">Director 2</th>
                                    <th width="200px">Sinodal 1</th>
                                    <th width="200px">Sinodal 2</th>
                                    <th width="200px">Sinodal 3</th>
                                    <th width="200px">Alumno 1</th>
                                    <th width="200px">Alumno 2</th>
                                    <th width="200px">Alumno 3</th>
                                    <th width="200px">Alumno 4</th>
                                    <th width="200px">Alumno 5</th>
                                    
								</tr>
							</thead>
							
							<tbody>
								@foreach($TT as $item)
								<tr class="odd gradeX">
                                    <!--<td>
                                    	<div class="btn-group btn-group-xs">
									<a class="md-trigger btn btn-default" data-modal="a{{ $item->numTT }}" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-edit"></i></a>
									</div></td>-->
								<td>{{ $item->numTT }}</td>
								@foreach($item->directores as $director)
                                		<td>{{ $director->Nombre }} {{ $director->ApellidoP }} {{ $director->ApellidoM }}</td>
                                @endforeach
                                @if ( count($item->directores) === 1)
								    <td></td>
								@endif
                                @foreach($item->sinodales as $sinodal)
                                		<td>{{ $sinodal->Nombre }} {{ $sinodal->ApellidoP }} {{ $sinodal->ApellidoM }}</td>
                                @endforeach
								@foreach($item->alumnos as $alumno)
                            		<td>{{ $alumno->Nombre }} {{ $alumno->ApellidoP }} {{ $alumno->ApellidoM }}</td>
                            	@endforeach
                            	@if ( count($item->alumnos) === 1)
								    <td></td><td></td><td></td><td></td>
								@elseif (count($item->alumnos) === 2)
								    <td></td><td></td><td></td>
								@elseif (count($item->alumnos)  === 3)
								    <td></td><td></td>
								@elseif (count($item->alumnos)  === 4)
								    <td></td>
								
								@endif
                                
                                   

                                    
                                </tr> 
									         
								@endforeach
							</tbody>
					</table>
				</div><!-- End div .table-responsive -->
				</div><!-- End div #basic-form -->

				</div><!-- End div .box-info -->
			            	
							<!-- Footer -->
							<footer>
							&copy; 2015 <a href="index.html">Admin CATT</a>. Diseñado para <a href="http://www.isc.escom.ipn.mx/" target="_blank">ESCOM-IPN</a> por <a href="#fakelink">Team SGT</a>
							</footer>
							<!-- End Footer -->
			            </div>
						<!-- ============================================================== -->
						<!-- END YOUR CONTENT HERE -->
						<!-- ============================================================== -->
						
						
			        </div>
					<!-- END CONTENT -->
					
					
					
					
					
					<!--
					============================================================================
					MODAL DIALOG EXAMPLE
					You can change transition style, just view element page
					============================================================================
					-->
					<!-- Modal Logout Primary -->
					<div class="md-modal md-fall" id="logout-modal">
						<div class="md-content">
							<h3><strong>Logout</strong> Confirmation</h3>
							<div>
								<p class="text-center">Are you sure want to logout from this awesome system?</p>
								<p class="text-center">
								<button class="btn btn-danger md-close">Nope!</button>
								<a href="login.html" class="btn btn-success md-close">Yeah, I'm sure</a>
								</p>
							</div>
						</div>
					</div><!-- End .md-modal -->
					
					<!-- Modal Logout Alternatif -->
					<div class="md-modal md-just-me" id="logout-modal-alt">
						<div class="md-content">
							<h3><strong>Logout</strong> Confirmation</h3>
							<div>
								<p class="text-center">Are you sure want to logout from this awesome system?</p>
								<p class="text-center">
								<button class="btn btn-danger md-close">Nope!</button>
								<a href="login.html" class="btn btn-success md-close">Yeah, I'm sure</a>
								</p>
							</div>
						</div>
					</div><!-- End .md-modal -->
					
					

					



					<!-- Modal Task Progress -->	
					<div class="md-modal md-slide-stick-top" id="task-progress">
						<div class="md-content">
							<h3><strong>Task Progress</strong> Information</h3>
							<div>
								<p>CLEANING BUGS</p>
								<div class="progress progress-xs for-modal">
								  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
									<span class="sr-only">80&#37; Complete</span>
								  </div>
								</div>
								<p>POSTING SOME STUFF</p>
								<div class="progress progress-xs for-modal">
								  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
									<span class="sr-only">65&#37; Complete</span>
								  </div>
								</div>
								<p>BACKUP DATA FROM SERVER</p>
								<div class="progress progress-xs for-modal">
								  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
									<span class="sr-only">95&#37; Complete</span>
								  </div>
								</div>
								<p>RE-DESIGNING WEB APPLICATION</p>
								<div class="progress progress-xs for-modal">
								  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
									<span class="sr-only">100&#37; Complete</span>
								  </div>
								</div>
								<p class="text-center">
								<button class="btn btn-danger btn-sm md-close">Close</button>
								</p>
							</div>
						</div>
					</div><!-- End .md-modal -->
					<!--
					============================================================================
					END MODAL DIALOG EXAMPLE
					============================================================================
					-->
					
					<!--
					MODAL OVERLAY
					Always place this div at the end of the page content
					-->
					<div class="md-overlay"></div>
					
					
					
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

			    
    <script src="http://www.bestyoumexico.com/media/js/panel_admin/jquery.dataTables.min.js"></script>
    <script src="http://www.bestyoumexico.com/media/js/panel_admin/dataTables.bootstrap.min.js"></script>
			    <!-- LANCENG TEMPLATE JAVASCRIPT -->
			    {{ HTML::script('js/lanceng.js'); }}
 <script>
						$("#profesores").DataTable(

	{
		
        "language": {
            "lengthMenu": "Mostrar _MENU_ usuarios por página",
            "sSearch": "Buscar: ",
            "zeroRecords": "Nothing found - sorry",
            "info": "Pagina _PAGE_ de _PAGES_",
            "infoEmpty": "No records available",
            "infoFiltered": "(filtered from _MAX_ total records)"
        }

        
    });
					</script>
				</body>
			</html>