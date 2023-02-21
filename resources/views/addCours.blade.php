
<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Formation: Jak Investisseur</title>

	<!-- Site favicon -->
	<link rel="icon" href="assets/images/perso/logoJak.png" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/perso/logoJak.png" />

	<!-- DESCRIPTION -->
	<meta name="description" content="Formation: Jak Investisseur" />

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="assets/images/perso/logoJak.png" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/perso/logoJak.png" />

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/jquery-steps/jquery.steps.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">


	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body>

	<div class="header">
		<div class="header-left">
			<div class="menu-icon dw dw-menu"></div>
			<div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div>
			<div class="header-search">
				<form>
					<div class="form-group mb-0">
						<i class="dw dw-search2 search-icon"></i>
						<input type="text" class="form-control search-input" placeholder="Search Here">
						<div class="dropdown">
							<a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
								<i class="ion-arrow-down-c"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">From</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">To</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">Subject</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text">
									</div>
								</div>
								<div class="text-right">
									<button class="btn btn-primary">Search</button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="header-right">
			<div class="dashboard-setting user-notification">
				<div class="dropdown">
					<a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
						<i class="dw dw-settings2"></i>
					</a>
				</div>
			</div>
			<div class="user-notification">
				<div class="dropdown">
					<a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
						<i class="icon-copy dw dw-notification"></i>
						<span class="badge notification-active"></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<div class="notification-list mx-h-350 customscroll">
							<ul>
								<li>
									<a href="#">
										<img src="vendors/images/img.jpg" alt="">
										<h3>John Doe</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/photo1.jpg" alt="">
										<h3>Lea R. Frith</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/photo2.jpg" alt="">
										<h3>Erik L. Richards</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/photo3.jpg" alt="">
										<h3>John Doe</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/photo4.jpg" alt="">
										<h3>Renee I. Hansen</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/img.jpg" alt="">
										<h3>Vicki M. Coleman</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						<span class="user-icon">
							{{-- <img src="vendors/images/photo1.jpg" alt=""> --}}
							<img src="assets/images/perso/logoJak.png" alt="">
						</span>
						<span class="user-name"> Jak Investisseur </span>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
						<a class="dropdown-item" href="profile.html"><i class="dw dw-user1"></i> Profile</a>
						<a class="dropdown-item" href="profile.html"><i class="dw dw-settings2"></i> Setting</a>
						<a class="dropdown-item" href="faq.html"><i class="dw dw-help"></i> Help</a>
						<a class="dropdown-item" href="login.html"><i class="dw dw-logout"></i> Log Out</a>
					</div>
				</div>
			</div>
			
		</div>
	</div>

	<div class="right-sidebar">
		<div class="sidebar-title">
			<h3 class="weight-600 font-16 text-blue">
				Layout Settings
				<span class="btn-block font-weight-400 font-12">User Interface Settings</span>
			</h3>
			<div class="close-sidebar" data-toggle="right-sidebar-close">
				<i class="icon-copy ion-close-round"></i>
			</div>
		</div>
		<div class="right-sidebar-body customscroll">
			<div class="right-sidebar-body-content">
				<h4 class="weight-600 font-18 pb-10">Header Background</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary header-white active">White</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary header-dark">Dark</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-light ">White</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-dark active">Dark</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
				<div class="sidebar-radio-group pb-10 mb-10">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-1" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-1" checked="">
						<label class="custom-control-label" for="sidebaricon-1"><i class="fa fa-angle-down"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-2" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-2">
						<label class="custom-control-label" for="sidebaricon-2"><i class="ion-plus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-3" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-3">
						<label class="custom-control-label" for="sidebaricon-3"><i class="fa fa-angle-double-right"></i></label>
					</div>
				</div>

				<h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
				<div class="sidebar-radio-group pb-30 mb-10">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-1" name="menu-list-icon" class="custom-control-input" value="icon-list-style-1" checked="">
						<label class="custom-control-label" for="sidebariconlist-1"><i class="ion-minus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-2" name="menu-list-icon" class="custom-control-input" value="icon-list-style-2">
						<label class="custom-control-label" for="sidebariconlist-2"><i class="fa fa-circle-o" aria-hidden="true"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-3" name="menu-list-icon" class="custom-control-input" value="icon-list-style-3">
						<label class="custom-control-label" for="sidebariconlist-3"><i class="dw dw-check"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-4" name="menu-list-icon" class="custom-control-input" value="icon-list-style-4" checked="">
						<label class="custom-control-label" for="sidebariconlist-4"><i class="icon-copy dw dw-next-2"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-5" name="menu-list-icon" class="custom-control-input" value="icon-list-style-5">
						<label class="custom-control-label" for="sidebariconlist-5"><i class="dw dw-fast-forward-1"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-6" name="menu-list-icon" class="custom-control-input" value="icon-list-style-6">
						<label class="custom-control-label" for="sidebariconlist-6"><i class="dw dw-next"></i></label>
					</div>
				</div>

				<div class="reset-options pt-30 text-center">
					<button class="btn btn-danger" id="reset-settings">Reset Settings</button>
				</div>
			</div>
		</div>
	</div>

	<div class="left-side-bar">
		<div class="brand-logo">
			<a href="{{ route('AdminDashboard') }}">
				<img src="assets/images/perso/logoJakS.png" width="90" alt="" class="dark-logo mt-3">
				{{-- <img src="vendors/images/deskapp-logo.svg" alt="" class="dark-logo"> --}}
				{{-- <img src="vendors/images/deskapp-logo-white.svg" alt="" class="light-logo"> --}}
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-house-1"></span><span class="mtext">Home</span>
						</a>
						<ul class="submenu">
							<li><a href="{{ route('AdminDashboard')}}">Mon Dashboard </a></li>
							
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-edit2"></span><span class="mtext">Cours</span>
						</a>
						<ul class="submenu">
							<li><a href="{{ route('AddCours')}}">Créer un Cours</a></li>
							<li><a href="{{ route('consulterCours')}}">Consulter mes Cours</a></li>

						</ul>
					</li>
			<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-library"></span><span class="mtext">Transaction</span>
						</a>
						<ul class="submenu">
							{{-- <li><a href="{{ route('transaction')}}">Transaction éffectué</a></li> --}}
							<li><a href="datatable.html">DataTables</a></li>
						</ul>
					</li>

				</ul>
			</div>
		</div>


	</div>
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Form Wizards</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Form Wizards</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									January 2018
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="#">Export List</a>
									<a class="dropdown-item" href="#">Policies</a>
									<a class="dropdown-item" href="#">View Assets</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<h4 class="text-danger h4"> Ne recharger pas la page avant d'avoir fini</h4>
						{{-- <p class="mb-30">jQuery Step wizard</p> --}}
					</div>
					<div class="wizard-content">
						<form class="tab-wizard wizard-circle wizard" action="{{ route('EnregistrerCours') }}" method="post" enctype= "multipart/form-data">
							@csrf
							<h5>Tout les détails sur la Formation</h5>
							<section>
								<div class="row">
									<div class="col-md-6">
										<div class="col-12">
										
									</div>
									
										<div class="form-group">
											<label >Titre de la Formation :</label>
											<input type="text" class="form-control"name="titre_cours">
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label >Une image de la Formation :</label>
											<input type="file" class="form-control"name="url_image">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label> Categorie de la Formation ? :</label>
											<select class="custom-select form-control"name="categorie_cours">
												<option value="">Immobilier</option>
												<option value="Amsterdam">Agricole</option>
												<option value="Berlin">...</option>
												<option value="Frankfurt">....</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Langue :</label>
											<select class="custom-select form-control"name="langue_cours">
												<option value="Français" selected>Français</option>
												{{-- <option value="Valeur">Valeur</option> --}}
											</select>
										</div>
									</div>
									
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label>Difficultés :</label>
											<select class="custom-select form-control"name="difficulte_cours">
												<option> --- </option>
												<option value="Debutant"> Debutant</option>
												<option value="Moyen"> Moyen</option>
												<option value="Difficile"> Difficile </option>
											</select>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>Debouchés :</label>
											<select class="custom-select form-control"name="debouche_cours">
												<option> --- </option>
												<option value="Entrepreneur"> Entrepreneur</option>
												<option value="Investisseur"> Investisseur</option>
												<option value="Professeur"> Professeur </option>
											</select>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>Durée :</label>
											<select class="custom-select form-control"name="duree_cours">
												<option> Definir une Durée </option>
												<option value="1 Mois"> 1 Mois</option>
												<option value="2 Mois"> 2 Mois</option>
												<option value="3 Mois"> 3 Mois </option>
												<option value="4 Mois"> 4 Mois </option>
												<option value="5 Mois"> 5 Mois </option>
												<option value="6 Mois"> 6 Mois </option>
												<option value="7 Mois"> 7 Mois </option>
											</select>
										</div>
									</div>
										<div class="col-md-12">
										<div class="form-group">
											<label>Description</label>
											<textarea class="form-control"name="description_cours"></textarea>
										</div>
									</div>
								</div>
							</section>
							<!-- Step 2 -->
							<h5> Première Video </h5>
							<section>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label> Titre de la Video </label>
											<input type="text" class="form-control"name="plan_un">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Video :</label>
											<input type="file" class="form-control"name="video_un">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label> Description :</label>
											<textarea class="form-control"name="description_un"></textarea>
										</div>
									</div>
								</div>
							</section>
							<!-- Step 3 -->
							<h5> Deuxième Vidéo</h5>
							<section>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label> Titre de la Video </label>
											<input type="text" class="form-control"name="plan_deux">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Video :</label>
											<input type="file" class="form-control"name="video_deux">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label> Description :</label>
											<textarea class="form-control"name="description_deux"></textarea>
										</div>
									</div>
								</div>
							</section>
							<!-- Step 4 -->
							<h5> Troisième Vidéo</h5>
							<section>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label> Titre de la Video </label>
											<input type="text" class="form-control"name="plan_trois">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Video :</label>
											<input type="file" class="form-control"name="video_trois">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label> Description :</label>
											<textarea class="form-control"name="description_trois"></textarea>
										</div>
									</div>
								</div>
							</section>
					</div>
				
				</div>

				

				<!-- success Popup html Start -->
				<div class="modal fade" id="success-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-body text-center font-18">
								<h3 class="mb-20"> Soumission des Cours </h3>
								<div class="mb-30 text-center"><img src="vendors/images/success.png"></div>
								 Merci de bien vouloir appuyer sur Envoyer
							</div>
							<div class="modal-footer justify-content-center">
								<button type="submit" class="btn btn-primary"> Envoyer </button>
							</div>
						</div>
					</div>
				</div>

			</form>

				<!-- success Popup html End -->
			</div>
			
		</div>
	</div>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<script src="src/plugins/jquery-steps/jquery.steps.js"></script>
	<script src="vendors/scripts/steps-setting.js"></script>
</body>
</html>