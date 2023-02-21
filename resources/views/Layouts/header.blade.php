        <!-- Header Top ==== -->
        <header class="header rs-nav header-transparent">
            <div class="top-bar">
                <div class="container">
                    <div class="row d-flex justify-content-between">
                        <div class="topbar">
                            <div class="topbar-left">
                            <ul>
                                <li><a href="{{ route('faq') }}"><i class="fa fa-question-circle"></i> Questions </a></li>
                                <li><a href="javascript:;"><i class="fa fa-envelope-o"></i>Support@website.com</a></li>
                            </ul>
                        </div>
                        <div class="topbar-right">
                            <ul>
                                <li>
                                    <select class="header-lang-bx">
                                       <option > {{-- <i class="flag flag-benin"></i> Benin --}}  </option>
                                    </select>
                                </li>
                                <li><a href="{{ route ('login') }}">Login</a></li>
                                <li><a href="{{ route ('register') }}">Register</a></li>
                            </ul>
                        </div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
            <div class="sticky-header navbar-expand-lg">
                <div class="menu-bar clearfix">
                    <div class="container clearfix">
                        <!-- Header Logo ==== -->
                        <div class="menu-logo">
                            <a href="index.html"><img src="assets/images/perso/logoJakS.png" alt=""></a>
                        </div>
                        <!-- Mobile Nav Button ==== -->
                        <button class="navbar-toggler collapsed menuicon justify-content-end" type="button" data-toggle="collapse" data-target="#menuDropdown" aria-controls="menuDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <!-- Author Nav ==== -->
                        <div class="secondary-menu">
                            <div class="secondary-inner">
                                <ul>
                                    <li><a href="javascript:;" class="btn-link"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="javascript:;" class="btn-link"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="javascript:;" class="btn-link"><i class="fa fa-linkedin"></i></a></li>
                                    <!-- Search Button ==== -->
                                    <li class="search-btn"><button id="quik-search-btn" type="button" class="btn-link"><i class="fa fa-search"></i></button></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Search Box ==== -->
                        <div class="nav-search-bar">
                            <form action="#">
                                <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
                                <span><i class="ti-search"></i></span>
                            </form>
                            <span id="search-remove"><i class="ti-close"></i></span>
                        </div>
                        <!-- Navigation Menu ==== -->
                        <div class="menu-links navbar-collapse collapse justify-content-start" id="menuDropdown">
                            <div class="menu-logo">
                                <a href="index.html"><img src="assets/images/logo.png" alt=""></a>
                            </div>
                            <ul class="nav navbar-nav">	
                                <li class="active"><a href="{{ route('accueil')}}">Accueil </a> </li>
                                
							<li><a href="javascript:;">Pages <i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="{{ route('about') }}"> A propos de Nous <i class="fa fa-angle-right"></i></a>
									</li>
									<li><a href="{{ route('faq') }}">FAQ's<i class="fa fa-angle-right"></i></a>
									</li>
									<li><a href="{{ route('contact') }}"> Nous Contacter <i class="fa fa-angle-right"></i></a>
									</li>
								</ul>
							</li>
        
                                {{-- Pages --}}
        
                                <li class="add-mega-menu"><a href="javascript:;"> Cours <i class="fa fa-chevron-down"></i></a>
                                    <ul class="sub-menu add-menu">
                                        <li class="add-menu-left">
                                            <h5 class="menu-adv-title">Mes Courses</h5>
                                            <ul>
                                                <li><a href="{{ route('courses')}}"> Formations </a></li>
                                                {{-- <li><a href="{{ route('ourCourses')}}"> Details Formations</a></li> --}}
                                            </ul>
                                        </li>
                                        <li class="add-menu-right">
                                            <img src="assets/images/perso/logoJak.png" alt=""/>
                                        </li>
                                    </ul>
                                </li>
                                
                                {{-- Blogs --}}
        
                                <li class="nav"><a href="javascript:;">Mon Dashboard </a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('profile') }}"> Mes Informations </a></li>
                                        {{-- <li><a href="javascript:;">Mailbox<i class="fa fa-angle-right"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="admin/mailbox.html">Mailbox</a></li>
                                                <li><a href="admin/mailbox-compose.html">Compose</a></li>
                                                <li><a href="admin/mailbox-read.html">Mail Read</a></li>
                                            </ul>
                                        </li> --}}
                                    </ul>
                                </li>
                            </ul>
                            <div class="nav-social-link">
                                <a href="javascript:;"><i class="fa fa-facebook"></i></a>
                                <a href="javascript:;"><i class="fa fa-google-plus"></i></a>
                                <a href="javascript:;"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                        <!-- Navigation Menu END ==== -->
                    </div>
                </div>
            </div>
        </header>
        <!-- Header Top END ==== -->

