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

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" />
    {{ HTML::style('third/weather-icon/css/weather-icons.min.css'); }}
    {{ HTML::style('third/morris/morris.css'); }}
    {{ HTML::style('third/nifty-modal/css/component.css'); }}
    {{ HTML::style('third/sortable/sortable-theme-bootstrap.css'); }}
    {{ HTML::style('third/icheck/skins/minimal/grey.css'); }}
    {{ HTML::style('third/select/bootstrap-select.min.css'); }}
    {{ HTML::style('third/summernote/summernote.css'); }}
    {{ HTML::style('third/magnific-popup/magnific-popup.css'); }}
    {{ HTML::style('third/datepicker/css/datepicker.css'); }}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css" />


	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
	
	<!-- FAVICON -->
	<link rel="shortcut icon" href="assets/img/favicon.ico">
	<script type="text/javascript">
			$(document).ready(function() {
    $('#example').DataTable();
} );
			</script>
	</head>
	
	
	
	<!-- BODY -->
	<body class="tooltips">
	
	<!-- BEGIN PAGE -->
	<div class="container">
			
		<!-- Your logo goes here -->
		<div class="logo-brand header sidebar rows">
			<div class="logo">
				<h1><a href="#fakelink"><img src="assets/img/logo.png" alt="Logo"> LANCENG ADMIN</a></h1>
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
							<img class="media-object img-circle" src="assets/img/avatar/masarie.jpg" alt="Avatar">
						</a>
						<div class="media-body">
							Welcome back,
							<h4 class="media-heading"><strong>Mas Bro</strong></h4>
							<a href="user-profile.html">Edit</a>
							<a class="md-trigger" data-modal="logout-modal-alt">Logout</a>
						</div><!-- End div .media-body -->
					</div><!-- End div .media -->
					
					
					<!-- Search form -->
					<div id="search">
						<form role="form">
							<input type="text" class="form-control search" placeholder="Search here...">
							<i class="fa fa-search"></i>
						</form>
					</div><!-- End div #search -->
					
				
					<!-- Sidebar menu -->				
					<div id="sidebar-menu">
						<ul>
							<li><a href="index.html"><i class="fa fa-home"></i> Dashboard</a></li>
							<li><a href="./gestionProfesores"><i class="fa fa-home"></i> Gestion Profesores</a></li>
							<li><a href="#fakelink"><i class="fa fa-leaf"></i> Frontend <span class="label label-danger new-circle">COMING SOON</span></a></li>
							<li><a href="#fakelink"><i class="fa fa-bug"></i><i class="fa fa-angle-double-down i-right"></i> Elements</a>
								<ul>
									<li><a href="element-primary.html"><i class="fa fa-angle-right"></i> Primary <span class="label label-success new-circle">UPDATED</span></a></li>
									<li><a href="element-extended.html"><i class="fa fa-angle-right"></i> Extended</a></li>
								</ul>
							</li>
							<li><a href="#fakelink"><i class="fa fa-code"></i><i class="fa fa-angle-double-down i-right"></i> Widgets</a>
								<ul>
									<li><a href="widget-awesome.html"><i class="fa fa-angle-right"></i> Awesome <span class="label label-danger new-circle">+5 new</span></a></li>
									<li><a href="widget-grid.html"><i class="fa fa-angle-right"></i> Grid</a></li>
								</ul>
							</li>
							<li><a href="#fakelink"><i class="fa fa-edit"></i><i class="fa fa-angle-double-down i-right"></i> Forms</a>
								<ul>
									<li><a href="form-element.html"><i class="fa fa-angle-right"></i> Form Element</a></li>
									<li><a href="form-wizard.html"><i class="fa fa-angle-right"></i> Form Wizard</a></li>
									<li><a href="form-validation.html"><i class="fa fa-angle-right"></i> Form Validation</a></li>
								</ul>
							</li>
							<li><a href="tables.html"><i class="fa fa-table"></i> Tables</a></li>
							<li><a href="gallery.html"><i class="fa fa-picture-o"></i><i class="fa fa-star i-right yellow"></i> Gallery</a></li>
							<li><a href="morris.html"><i class="fa fa-bar-chart-o"></i> Graph / Chart</a></li>
							<li><a href="#fakelink"><i class="fa fa-home"></i><i class="fa fa-angle-double-down i-right"></i> Pages <span class="label label-success new-circle animated double shake span-left">13</span></a>
								<ul>
									<li><a href="login.html"><i class="fa fa-angle-right"></i> Login</a></li>
									<li><a href="lock-screen.html"><i class="fa fa-angle-right"></i> Lock Screen</a></li>
									<li><a href="forgot-password.html"><i class="fa fa-angle-right"></i> Forgot Password</a></li>
									<li><a href="register.html"><i class="fa fa-angle-right"></i> Register</a></li>
									<li><a href="user-profile.html"><i class="fa fa-angle-right"></i> User Profile</a></li>
									<li><a href="user-profile-2.html"><i class="fa fa-angle-right"></i> User Profile 2 <span class="label label-danger new-circle">NEW</span></a></li>
									<li><a href="empty-data.html"><i class="fa fa-angle-right"></i> Empty Data <span class="label label-danger new-circle">NEW</span></a></li>
									<li><a href="invoice.html"><i class="fa fa-angle-right"></i> Invoice</a></li>
									<li><a href="pricing-table.html"><i class="fa fa-angle-right"></i> Pricing Table <span class="label label-success new-circle">UPDATED</span></a></li>
									<li><a href="faq.html"><i class="fa fa-angle-right"></i> FAQ</a></li>
									<li><a href="search-result.html"><i class="fa fa-angle-right"></i> Search Result <span class="label label-success new-circle">UPDATED</span></a></li>
									<li><a href="404.html"><i class="fa fa-angle-right"></i> 404</a></li>
									<li><a href="blank.html"><i class="fa fa-angle-right"></i> Blank</a></li>
								</ul>
							</li>
							<li><a href="#fakelink"><i class="fa fa-smile-o"></i><i class="fa fa-angle-double-down i-right"></i> Icons</a>
								<ul>
									<li><a href="font-awesome.html"><i class="fa fa-angle-right"></i> Font Awesome</a></li>
									<li><a href="glyphicons.html"><i class="fa fa-angle-right"></i> Glyphicons</a></li>
									<li><a href="weather-icons.html"><i class="fa fa-angle-right"></i> Weather icons <span class="label label-danger new-circle">NEW</span></a></li>
								</ul>
							</li>
							<li><a href="#fakelink"><i class="fa fa-envelope"></i><i class="fa fa-angle-double-down i-right"></i> Message  <span class="label label-success new-circle span-left">UPDATED</span></a>
								<ul>
									<li><a href="inbox.html"><i class="fa fa-angle-right"></i> Inbox</a></li>
									<li><a href="new-message.html"><i class="fa fa-angle-right"></i> New Message</a></li>
									<li><a href="reply-message.html"><i class="fa fa-angle-right"></i> Reply Message <span class="label label-danger new-circle">NEW</span></a></li>
									<li><a href="read-message.html"><i class="fa fa-angle-right"></i> Read Message</a></li>
								</ul>
							</li>
						</ul>
						<div class="clear"></div>
					</div><!-- End div #sidebar-menu -->
				</div><!-- End div .sidebar-inner .slimscroller -->
            </div><!-- End div .body .rows .scroll-y -->
			
			<!-- Sidebar footer -->
            <div class="footer rows animated fadeInUpBig">
				<div class="progress progress-xs progress-striped active">
				  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
					<span class="progress-precentage">80&#37;</span>
				  </div><!-- End div .pogress-bar -->
				  <a data-toggle="tooltip" title="See task progress" class="btn btn-default md-trigger" data-modal="task-progress"><i class="fa fa-inbox"></i></a>
				</div><!-- End div .progress .progress-xs -->
            </div><!-- End div .footer .rows -->
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
						
							<!-- Left navbar -->
							<ul class="nav navbar-nav">
								<li>
									<a href="#fakelink">
										<i class="fa fa-cog"></i>
									</a>
								</li>
								
								<!-- Dropdown language -->
								<li class="dropdown">
									<a href="#fakelink" class="dropdown-toggle" data-toggle="dropdown">English (US) <i class="fa fa-chevron-down i-xs"></i></a>
									<ul class="dropdown-menu animated half flipInX">
										<li><a href="#fakelink">English (British)</a></li>
										<li><a href="#fakelink">Bahasa Indonesia</a></li>
										<li><a href="#fakelink">French</a></li>
									</ul>
								</li>
							</ul>
						
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
									<a href="#fakelink" class="dropdown-toggle" data-toggle="dropdown">Howdy, <strong>Mas Bro</strong> <i class="fa fa-chevron-down i-xs"></i></a>
									<ul class="dropdown-menu animated half flipInX">
										<li><a href="#fakelink">My Profile</a></li>
										<li><a href="#fakelink">Change Password</a></li>
										<li><a href="#fakelink">Account Setting</a></li>
										<li class="divider"></li>
										<li class="dropdown-header">Another action</li>
										<li><a href="#fakelink">Help</a></li>
										<li><a href="lock-screen.html">Lock me</a></li>
										<li><a class="md-trigger" data-modal="logout-modal">Logout</a></li>
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
					<h1>Dashboard <small>your first page</small></h1>
				</div>
				<!-- End page header -->
				
				
				<!-- Begin info box -->
				
				<div class="box-info">
						<h2><strong>Tu ptm</strong> Form</h2>
							<!-- Additional button -->
							<div class="additional-btn">
								
								<a class="additional-icon" href="#fakelink" data-toggle="collapse" data-target="#basic-form"><i class="fa fa-chevron-down"></i></a>
								
							</div>
							<!-- Basic form body -->
							<div id="basic-form" class="collapse in">
								
								{{-- Preguntamos si hay algún mensaje de error y si hay lo mostramos  --}}
                                            @if(Session::has('error'))
                                            <div class="alert alert-danger">{{ Session::get('error') }}</div>
                                            @endif
													{{ Form::open(array('url' => '/gestionProfesores')); }}
														<div class="form-group">
															<label for="form-field-1"> Cédula </label>
															{{ Form::text('cedula', '', array('class' => 'form-control','placeholder' => 'Cédula')); }}
														</div>
														<div class="form-group">
															<div class="row">
															<label class="col-md-12" for="form-field-8">Nombre</label>
															
															<span class="input-icon col-md-4">
																	{{ Form::text('nombre', '', array('class' => 'form-control ','placeholder' => 'Nombre')); }}
																	
																</span>

																<span class="input-icon input-icon-right col-md-4">
																	{{ Form::text('ap', '', array('class' => 'form-control col-md-4','placeholder' => 'Apellido Paterno')); }}
																</span>
																<span class="input-icon input-icon-right col-md-4">
																	{{ Form::text('am', '', array('class' => 'form-control col-md-4','placeholder' => 'Apellido Materno')); }}
																
																</span>
															</div>
														</div>

														<div class="form-group">
															<div class="row">
															<label class="col-md-12" for="form-field-1">Género</label>
															<div class="col-md-4">
															{{ Form::select('genero', array('M' => 'Masculino', 'F' => 'Femenino'),null, array('class' => 'form-control col-md-4')); }}
															</div>
															</div>
														</div>
														
														<div class="form-group">
															<div class="row">
															<label class="col-md-12" for="form-field-1">Cargo</label>
															<div class="col-md-4">
															{{ Form::select('cargo', array('Otro' => 'Otro', 'Director' => 'Director', 'Subdirector' => 'Subdirector'),null, array('class' => 'form-control')); }}
															</div>														
														</div>

														<div class="form-group">
															<label  for="form-field-1"> E-mail </label>
														{{ Form::text('mail', '', array('placeholder' => 'E-mail','class' => 'form-control')); }}
                                                            
															
														</div>

														<div class="clearfix form-actions ">
															
																	{{ Form::submit('Registrar', array('class' => 'btn btn-info')); }}
															
														</div>
													{{ Form::close() }}
							</div><!-- End div #basic-form -->
						</div><!-- End div .box-info -->
			
            	</div>
            	<div class="box-info">
						<h2><strong>Tu ptm 2</strong> Form</h2>
							<!-- Additional button -->
							<div class="additional-btn">
								
								<a class="additional-icon" href="#fakelink" data-toggle="collapse" data-target="#basic-form"><i class="fa fa-chevron-down"></i></a>
								
							</div>
							<!-- Basic form body -->
							<!-- End div #basic-form -->

							<div class="table-responsive">
						<table id="test" data-sortable class="table">
							<thead>
								<tr>
									<th>Cedula</th>
                                    <th>Nombre</th>
                                    <th>Apellidos</th>
                                    <th>Cargo</th>
                                    <th>Correo</th>
                                    <th>Género</th>
                                    <th>Editar</th>
								</tr>
							</thead>
							
							<tbody>
								@foreach($Profes as $item)
									        <tr class="odd gradeX">
                                            <td>{{ $item->Cedula }}</td>
                                            <td>{{ $item->Nombre }}</td>
                                            <td>{{ $item->ApellidoP }} {{ $item->ApellidoM }}</td>
                                            <td>{{ $item->Cargo }}</td>
                                            <td>{{ $item->Correo }}</td>
                                            <td>{{ $item->Genero }}</td>
                                            <td>
                                            	<div class="btn-group btn-group-xs">
												<a class="md-trigger btn btn-default" data-modal="editarProfesor" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-edit"></i></a>
												</div></td>
                                        </tr> 
									         
									     @endforeach
							</tbody>
						</table>
					</div><!-- End div .table-responsive -->

						</div><!-- End div .box-info -->
			
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

		<div class="md-modal md-effect-16" id="editarProfesor">
			<div class="md-content">
				{{ Form::open(array('url' => '/gestionProfesores')); }}
														<div class="form-group">
															<label for="form-field-1"> Cédula </label>
															{{ Form::text('cedula', '', array('class' => 'form-control','placeholder' => 'Cédula')); }}
														</div>
														<div class="form-group">
															<div class="row">
															<label class="col-md-12" for="form-field-8">Nombre</label>
															
															<span class="input-icon col-md-4">
																	{{ Form::text('nombre', '', array('class' => 'form-control ','placeholder' => 'Nombre')); }}
																	
																</span>

																<span class="input-icon input-icon-right col-md-4">
																	{{ Form::text('ap', '', array('class' => 'form-control col-md-4','placeholder' => 'Apellido Paterno')); }}
																</span>
																<span class="input-icon input-icon-right col-md-4">
																	{{ Form::text('am', '', array('class' => 'form-control col-md-4','placeholder' => 'Apellido Materno')); }}
																
																</span>
															</div>
														</div>

														<div class="form-group">
															<div class="row">
															<label class="col-md-12" for="form-field-1">Género</label>
															<div class="col-md-4">
															{{ Form::select('genero', array('M' => 'Masculino', 'F' => 'Femenino'),null, array('class' => 'form-control col-md-4')); }}
															</div>
															</div>
														</div>
														
														<div class="form-group">
															<div class="row">
															<label class="col-md-12" for="form-field-1">Cargo</label>
															<div class="col-md-4">
															{{ Form::select('cargo', array('Otro' => 'Otro', 'Director' => 'Director', 'Subdirector' => 'Subdirector'),null, array('class' => 'form-control')); }}
															</div>														
														</div>

														<div class="form-group">
															<label  for="form-field-1"> E-mail </label>
														{{ Form::text('mail', '', array('placeholder' => 'E-mail','class' => 'form-control')); }}
                                                            
															
														</div>

														<div class="clearfix form-actions ">
															
																	{{ Form::submit('Registrar', array('class' => 'btn btn-info')); }}
															
														</div>
													{{ Form::close() }}
			</div><!-- End div .md-content -->
		</div><!-- End div .md-modal .md-fade-in-scale-up -->


		
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
    <script src="http://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
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