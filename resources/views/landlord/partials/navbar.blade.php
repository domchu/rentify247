 <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
     <!-- Navbar Brand-->
     <a class="navbar-brand ps-3" href="{{ url('admin/dashboard') }}">Dashboard</a>
     <!-- Sidebar Toggle-->
     <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
             class="fas fa-bars"></i></button>
     <!-- Navbar Search-->
     <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
         <div class="input-group">
             <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."
                 aria-describedby="btnNavbarSearch" />
             <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
         </div>
     </form>
     <a class="nav-link" href="message.html">
         <div class="nav-link  text-white mx-2"><i class="fa-solid fa-envelope"></i></div>
     </a>
     <a class="nav-link" href="notification.html">
         <div class="nav-link  text-white mx-2"><i class="fa-regular fa-bell"></i></div>
     </a>
     <a class="nav-link" href="darkmode.html">
         <div class="nav-link  text-white mx-2 text-2xl"><i class="fa-solid fa-moon"></i></div>
     </a>
     <!-- Navbar-->
     <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
         <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                 data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
             <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                 <li><a class="dropdown-item" href="{{url('update-profile-information-form')}}">Profile</a></li>
                 <li>
                     <hr class="dropdown-divider" />
                 </li>
                 <li><a class="dropdown-item" href="#!">Settings</a></li>
                 <li>
                     <hr class="dropdown-divider" />
                 </li>
                 <li>

                     <!-- Authentication -->
                     <form method="POST" action="{{ route('logout') }}">
                         @csrf

                         <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                        this.closest('form').submit();">
                             {{ __('Log Out') }}
                         </a>
                     </form>
                 </li>
             </ul>
         </li>
     </ul>
 </nav>
