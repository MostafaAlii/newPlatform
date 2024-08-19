<header>
    <!-- Top Header -->
    <div class="top-header py-2 bg-light">
        <div class="container d-flex justify-content-between">
            <div class="row">
                <div class="col-md-6 d-flex align-items-center">
                    <i class="fa fa-phone tph-icons mt-0 mr-1"></i> <span class="text-dark infos">(+88) 1990
                        6886</span>
                </div>
                <div class="col-md-6 d-flex align-items-center border-left border-dark b-1">
                    <img width="16" height="16" class="mt-0 mr-1"
                        src="https://img.icons8.com/material-sharp/128/DB0000/mail.png" alt="mail" />
                    <span class="text-dark infos">agency@example.com</span>
                </div>


            </div>
            <div class="user-actions align-items-center text-center justify-content-center row g-0">

                <div class="justify-content-center text-center col-md-8 d-flex ">
                        <div class="container d-flex">
                            <a href="{{ route('Check') }}" class="text-dark text-center cardentials mr-2">Log in</a>
                            <a href="{{ route('Check') }}"
                                class="text-dark cardentials border-left border-dark border-1 pl-2">Register</a>
                        </div>

                </div>




                <div class="container justify-content-center d-flex col-md-4">
                    <a href="#" class="ml-3"><i class="fab fa-twitter icons"></i></a>
                    <a href="#" class="ml-2"><i class="fab fa-facebook-f icons"></i></a>
                    <a href="#" class="ml-2"><i class="fab fa-instagram icons"></i></a>
                    <a href="#" class="ml-2"><i class="fab fa-linkedin-in icons"></i></a>

                </div>


            </div>
        </div>
    </div>
    <!-- Main Header -->
    <div class="main-header py-3 bg-dark">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="logo">
                <a href="{{ route('home') }}"><img src="{{ asset('img/white-logo.png') }}" alt=""></a>
            </div>

            <nav class="navbar navbar-expand-lg justify-content-center text-center">

                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav text-center">
                        <li class="nav-item  {{ request()->routeIS('home') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('home') }}">Home
                            </a>
                        </li>
                        <li class="nav-item {{ request()->routeIs('courses') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('courses') }}">
                                Courses

                            </a>
                        </li>
                        <li class="nav-item dropdownmenu">
                            <a class="nav-link buttonDrop" href="#">
                                Other
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                                  </svg>
                            </a>
                            <div class="dropdown-content text-center" aria-labelledby="otherDropdown">
                                <a class="pt-2" id="top" href="ErrorPage.html">Subul+</a>
                                <a class="py-2" id="middle" href="ErrorPage.html">Our best</a>
                                <a class="pb-2" id="bottom" href="ErrorPage.html">Subulway</a>
                            </div>
                        </li>
                        <li class="nav-item  {{ request()->routeIs('About') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('About') }}">
                                About

                            </a>
                        </li>
                        <li class="nav-item  {{ request()->routeIs('Contact') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('Contact') }}">
                                Contact
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>


            <div class="d-flex ml-auto">

                <div class="cart text-right d-flex justify-content-end">
                    <a href="{{ route('cart.index') }}" id="cart-btn">
                        <script src="https://cdn.lordicon.com/lordicon.js"></script>
                        <lord-icon src="https://cdn.lordicon.com/taymdfsf.json" trigger="hover" stroke="bold"
                            colors="primary:#ffffff,secondary:#ffffff" style="width:30px;height:30px">
                        </lord-icon></i>

                        
                        <span class="badge rounded-pill badge-danger">{{ $cartcount }}</span>
                        
                        
                        
                    </a>
                </div>

                
            </div>
            
            <!--MObile Menu-->
            <div class="d-lg-none Burger">
                <nav id="sidebar" class="sidebar">
                    <div class="sidebar-header">
                        <img class="SideBarLogo" src="img/Switch-container.png" alt="">
                        <button type="button" class="close" aria-label="Close" id="sidebarCollapse">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <ul class="list-unstyled components">
                        <li class="MenuItem {{ request()->routeIS('home') ? 'active' : '' }}"><a href="/" class="linkItem">Home</a></li>
                        <li class="MenuItem {{ request()->routeIs('courses') ? 'active' : '' }}"><a href="courses"
                                class="linkItem">Courses</a>
                        </li>
                        <li class="MenuItem"><a href="#otherSubmenu" data-bs-toggle="collapse"
                                aria-expanded="false" class="dropdown-toggle linkItem">Other</a>
                            <ul class="collapse list-unstyled" id="otherSubmenu">
                                <li><a href="ErrorPage.html" class="linkItem">Submenu 1</a></li>
                                <li><a href="ErrorPage.html" class="linkItem">Submenu 2</a></li>
                                <li><a href="ErrorPage.html" class="linkItem">Submenu 3</a></li>
                            </ul>
                        </li>
                        <li class="MenuItem {{ request()->routeIS('About') ? 'active' : '' }}"><a href="About" class="linkItem">About</a></li>
                        <li class="MenuItem {{ request()->routeIS('Contact') ? 'active' : '' }}"><a href="Contact" class="linkItem">Contact</a></li>
                    </ul>

                    <!-- Auth section -->
                    <div class="container justify-content-center">
                       
                        <div class="container d-flex">
                            <a href="{{ route('Check') }}" class="text-light text-decoration-none text-center cardentials mr-2">Log in</a>
                            <a href="{{ route('Check') }}"
                                class="text-light text-decoration-none cardentials border-left border-light border-1 pl-2">Register</a>
                        </div>

                </div>
            
                </nav>

                <button type="button" id="sidebarCollapseBtn">
                    <i class="fas fa-align-left menuburgericon"></i>
                </button>

            </div>


        </div>
    </div>
</header>