 <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
     <div class="sb-sidenav-menu">
         <div class="nav">
             <div class="sb-sidenav-menu-heading">Menu</div>
             <a class="nav-link" href="{{ url('dashboard') }}">
                 <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                 Dashboard
             </a>
             {{-- <a class="nav-link" href="{{url('admin/category')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Category
                            </a> --}}
             <div class="sb-sidenav-menu-heading">Interface</div>
             {{-- Tenantts --}}
             <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseTenants"
                 aria-expanded="false" aria-controls="collapseTenants">
                 <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                 Tenants
                 <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
             </a>
             <div class="collapse" id="collapseTenants" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                 <nav class="sb-sidenav-menu-nested nav">
                     <a class="nav-link" href="{{ url('admin/Tenants/create') }}">Add Tenants</a>
                     <a class="nav-link" href="{{ url('admin/Tenants') }}">View Tenants</a>
                 </nav>
             </div>
             {{-- students --}}
             <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePayments"
                 aria-expanded="false" aria-controls="collapsePayments">
                 <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                 Transaction History
                 <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
             </a>
             <div class="collapse" id="collapsePayments" aria-labelledby="headingTwo"
                 data-bs-parent="#sidenavAccordion">
                 <nav class="sb-sidenav-menu-nested nav">
                     <a class="nav-link" href="{{ url('admin/payments/create') }}">Add Payments</a>
                     <a class="nav-link" href="{{ url('admin/payments') }}">View Payments</a>
                 </nav>
             </div>
             {{-- client --}}
             <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseClients"
                 aria-expanded="false" aria-controls="collapseClients">
                 <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                 Clients
                 <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
             </a>
             <div class="collapse" id="collapseClients" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                 <nav class="sb-sidenav-menu-nested nav">
                     <a class="nav-link" href="{{ url('admin/clients/create') }}">Add Clients</a>
                     <a class="nav-link" href="{{ url('admin/clients') }}">View Clients</a>
                 </nav>
             </div>


             <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages"
                 aria-expanded="false" aria-controls="collapsePages">
                 <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                 Pages
                 <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
             </a>
             <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                 <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                     <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                         data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                         Authentication
                         <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                     </a>
                     <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne"
                         data-bs-parent="#sidenavAccordionPages">
                         <nav class="sb-sidenav-menu-nested nav">
                             <a class="nav-link" href="login.html">Login</a>
                             <a class="nav-link" href="register.html">Register</a>
                             <a class="nav-link" href="password.html">Forgot Password</a>
                         </nav>
                     </div>
                     <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                         data-bs-target="#pagesCollapseError" aria-expanded="false"
                         aria-controls="pagesCollapseError">
                         Error
                         <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                     </a>
                     <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne"
                         data-bs-parent="#sidenavAccordionPages">
                         <nav class="sb-sidenav-menu-nested nav">
                             <a class="nav-link" href="401.html">401 Page</a>
                             <a class="nav-link" href="404.html">404 Page</a>
                             <a class="nav-link" href="500.html">500 Page</a>
                         </nav>
                     </div>
                 </nav>
             </div>
             <div class="sb-sidenav-menu-heading">Addons</div>
             <a class="nav-link" href="charts.html">
                 <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                 Charts
             </a>
             <a class="nav-link" href="tables.html">
                 <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                 Tables
             </a>
         </div>
     </div>
     <div class="sb-sidenav-footer">
                     <!-- Authentication -->
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf

                    <a class="dropdown-item" href="{{ route('logout')}}"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </a>
                </form>
     </div>
 </nav>
