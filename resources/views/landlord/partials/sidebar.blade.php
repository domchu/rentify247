 <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
     <div class="sb-sidenav-menu">
         <div class="nav">
             <div class="sb-sidenav-menu-heading">MENU ITEMS</div>
             <a class="nav-link" href="{{ url('dashboard') }}">
                 <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                 Dashboard
             </a>
           
             <div class="sb-sidenav-menu-heading">INTERFACE</div>
             {{-- TENANTS --}}
             <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseTenants"
                 aria-expanded="false" aria-controls="collapseTenants">
                 <div class="sb-nav-link-icon"><i class="fa-solid fa-people-roof"></i></div>
                 Tenants
                 <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
             </a>
             <div class="collapse" id="collapseTenants" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                 <nav class="sb-sidenav-menu-nested nav">
                     <a class="nav-link" href="{{ url('admin/Tenants/create') }}">Add Tenants</a>
                     <a class="nav-link" href="{{ url('admin/Tenants') }}">View Tenants</a>
                 </nav>
             </div>
             {{-- TRANSACTION HISTORY --}}
             <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePayments"
                 aria-expanded="false" aria-controls="collapsePayments">
                 <div class="sb-nav-link-icon"><i class="fa-solid fa-comments-dollar"></i></div>
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
             {{-- CLIENTS --}}
             <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseClients"
                 aria-expanded="false" aria-controls="collapseClients">
                 <div class="sb-nav-link-icon"><i class="fa-sharp-duotone fa-solid fa-users"></i></div>
                 Clients
                 <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
             </a>
             <div class="collapse" id="collapseClients" aria-labelledby="headingThree" data-bs-parent="#sidenavAccordion">
                 <nav class="sb-sidenav-menu-nested nav">
                     <a class="nav-link" href="{{ url('admin/clients/create') }}">Add Clients</a>
                     <a class="nav-link" href="{{ url('admin/clients') }}">View Clients</a>
                 </nav>
             </div>
             {{-- LEASE --}}
             <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLease"
                 aria-expanded="false" aria-controls="collapseLease">
                 <div class="sb-nav-link-icon"><i class="fa-solid fa-truck-ramp-box"></i></div>
                 Lease
                 <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
             </a>
             <div class="collapse" id="collapseLease" aria-labelledby="headingFour" data-bs-parent="#sidenavAccordion">
                 <nav class="sb-sidenav-menu-nested nav">
                     <a class="nav-link" href="{{ url('admin/lease/create') }}">Add Lease</a>
                     <a class="nav-link" href="{{ url('admin/lease') }}">View Lease</a>
                 </nav>
             </div>
             {{-- SALES --}}
             <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseSales"
                 aria-expanded="false" aria-controls="collapseSales">
                 <div class="sb-nav-link-icon"><i class="fa-solid fa-universal-access"></i></div>
                 Sales
                 <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
             </a>
             <div class="collapse" id="collapseSales" aria-labelledby="headingFive" data-bs-parent="#sidenavAccordion">
                 <nav class="sb-sidenav-menu-nested nav">
                     <a class="nav-link" href="{{ url('admin/sales/create') }}">Add Sales</a>
                     <a class="nav-link" href="{{ url('admin/sales') }}">View Sales</a>
                 </nav>
             </div>

{{-- OTHER PAGES --}}
             <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages"
                 aria-expanded="false" aria-controls="collapsePages">
                 <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                 Pages
                 <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
             </a>
             <div class="collapse" id="collapsePages" aria-labelledby="headingSix" data-bs-parent="#sidenavAccordion">
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
                     
                 </nav>
             </div>
             <div class="sb-sidenav-menu-heading">STATISTICS DATA</div>
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
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a class="dropdown-item" href="{{ route('logout')}}"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </a>
                </form>
     </div>
 </nav>
