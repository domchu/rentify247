 <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core Menu</div>
                            <a class="nav-link" href="{{url('admin/dashboard')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="{{url('admin/category')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Category
                            </a>
                            {{-- Admin Team --}}
                             <div class="sb-sidenav-menu-heading">TEAM MEMBERS</div>
                            {{-- TEAM --}}
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseTeam" aria-expanded="false" aria-controls="collapseTeam">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-users"></i></div>
                                STAFF
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseTeam" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    {{-- <a class="nav-link" href="{{url('admin/team/create')}}">Add Team</a> --}}
                                    <a class="nav-link" href="{{ url('team/create')}}">Add Team</a>
                                    <a class="nav-link" href="{{ url('all-team')}}">View Team</a>
                                </nav>
                            </div>
                            {{-- INTERFACE --}}
                            <div class="sb-sidenav-menu-heading">INTERFACE LISTING</div>
                            {{-- TENANTS --}}
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseTenants" aria-expanded="false" aria-controls="collapseTenants">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-people-roof"></i></div>
                                Tenants
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseTenants" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{url('admin/tenants/create')}}">Add Tenants</a>
                                    <a class="nav-link" href="{{url('admin/tenants')}}">View Tenants</a>
                                </nav>
                            </div>
                            {{-- LANDLORDS --}}
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLandlords" aria-expanded="false" aria-controls="collapseLandlords">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-house-lock"></i></div>
                                Landlords
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLandlords" aria-labelledby="headingThree" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{url('admin/landlords/create')}}">Add Landlords</a>
                                    <a class="nav-link" href="{{url('admin/landlords')}}">View Landlords</a>
                                </nav>
                            </div>
                            {{-- CLIENTS --}}
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLocations" aria-expanded="false" aria-controls="collapseLocations">
                                <div class="sb-nav-link-icon"><i class="fa-sharp fa-light fa-location-dot"></i></div>
                                Locations
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLocations" aria-labelledby="headingFour" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{url('admin/locations/create')}}">Add Locations</a>
                                    <a class="nav-link" href="{{url('admin/locations')}}">View Locations</a>
                                </nav>
                            </div>
                            {{-- INVOICES --}}
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseInvoices" aria-expanded="false" aria-controls="collapseInvoices">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-receipt"></i></div>
                                Invoices
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseInvoices" aria-labelledby="headingFive" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{url('admin/invoices/create')}}">Add Invoices</a>
                                    <a class="nav-link" href="{{url('admin/invoices')}}">View Invoices</a>
                                </nav>
                            </div>
                            {{-- LEASE --}}
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLease" aria-expanded="false" aria-controls="collapseLease">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-universal-access"></i></div>
                                Lease
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLease" aria-labelledby="headingSix" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{url('admin/lease/create')}}">Add Lease</a>
                                    <a class="nav-link" href="{{url('admin/lease')}}">View Lease</a>
                                </nav>
                            </div>

                           
                            <div class="sb-sidenav-menu-heading">CHARTS STATISTICS</div>
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a>

                            {{-- AUTH --}}
                             <div class="sb-sidenav-menu-heading">OTHERS</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingSeven" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">Login</a>
                                            <a class="nav-link" href="register.html">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
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