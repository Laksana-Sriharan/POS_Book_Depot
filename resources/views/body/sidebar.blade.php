<div class="left-side-menu">

                <div class="h-100" data-simplebar>

                    
                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul id="side-menu">

                            <li class="menu-title">Navigation</li>

                            <li>
                                <a href="{{ url('/dashboard') }}">
                                <i class="fa-solid fa-eye"></i>
                                    <span> Dashboard </span>
                                </a>
                            </li>

                            @if(Auth::user()->can('pos.menu'))
                            <li>
                                <a href="{{ route('pos') }}">
                                    <span class="badge bg-pink float-end">Hot</span>
                                <i class="mdi mdi-view-dashboard-outline"></i>
                                    <span> POS </span>
                                </a>
                            </li>
                            @endif

                            <li class="menu-title mt-2">Apps</li>

                            @if(Auth::user()->can('orders.menu'))
                            <li>
                                <a href="#orders" data-bs-toggle="collapse">
                                <i class="fa fa-pencil-square"></i>
                                    <span> Orders  </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="orders">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{ route('pending.order') }}">Pending Orders </a>
                                        </li>

                                        <li>
                                            <a href="{{ route('complete.order') }}">Complete Orders </a>
                                        </li>

                                        <li>
                                            <a href="{{ route('pending.due') }}">Pending Due </a>
                                        </li>

                                    </ul>
                                </div>
                            </li>
                            @endif


                            @if(Auth::user()->can('product.menu'))
                             <li>
                                <a href="#product" data-bs-toggle="collapse">
                                    <i class="fa fa-shopping-basket"></i>
                                    <span> Products  </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="product">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{ route('all.product') }}">All Product </a>
                                        </li>

                                        <li>
                                            <a href="{{ route('add.product') }}">Add Product </a>
                                        </li>

                                        <li>
                                            <a href="{{ route('import.product') }}">Import Product </a>
                                        </li>

                                    </ul>
                                </div>
                            </li>
                            @endif

                            

                            @if(Auth::user()->can('category.menu'))
                            <li>
                                    <a href="#category" data-bs-toggle="collapse">
                                        <i class="fa fa-angle-double-right"></i>
                                        <span> Category </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <div class="collapse" id="category">
                                        <ul class="nav-second-level">
                                            <li>
                                                <a href="{{ route('all.category') }}">All Category </a>
                                            </li>

                                        </ul>
                                    </div>
                             </li>
                            @endif

                            @if(Auth::user()->can('stock.menu'))
                            <li>
                                <a href="#stock" data-bs-toggle="collapse">
                                    <i class="fa fa-line-chart"></i>
                                    <span> Manage Stock    </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="stock">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{ route('stock.manage') }}">Stock </a>
                                        </li>


                                    </ul>
                                </div>
                            </li>
                            @endif

                            @if(Auth::user()->can('expense.menu'))
                            <li>
                                <a href="#sidebarAuth" data-bs-toggle="collapse">
                                     <i class="fa fa-rupee"></i>
                                    <span>Expense </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarAuth">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="{{ route('add.expense') }}">Add Expense</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('today.expense') }}">Today Expense</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('month.expense') }}">Monthly Expense</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('year.expense') }}">Yearly Expense</a>
                                    </li>

                                </ul>
                                </div>
                            </li>
                            @endif

                            @if(Auth::user()->can('attendance.menu'))
                            <li>
                                <a href="#attendence" data-bs-toggle="collapse">
                                    <i class="fa-solid fa-list"></i>
                                    <span> Employee Attendance </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="attendence">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{ route('employee.attend.list') }}">Employee Attendance List </a>
                                        </li>

                                    </ul>
                                </div>
                            </li>
                            @endif

                            @if(Auth::user()->can('salary.menu'))
                            <li>
                                <a href="#salary" data-bs-toggle="collapse">
                                    <i class="fa-solid fa-money-bill"></i>
                                    <span> Employee Salary </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="salary">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{ route('add.advance.salary') }}">Add Advance Salary</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('all.advance.salary') }}">All Advance Salary</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('pay.salary') }}">Pay Salary</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('month.salary') }}">Last Month Salary</a>
                                        </li>

                                    </ul>
                                </div>
                            </li>
                            @endif



                            

                            

                            @if(Auth::user()->can('customer.menu'))
                            <li>
                                <a href="#sidebarCrm" data-bs-toggle="collapse">
                                    <i class="mdi mdi-account-multiple-outline"></i>
                                    <span>Manage Customers </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarCrm">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{route('all.customer')}}">All Customers </a>
                                        </li>
                                        <li>
                                            <a href="{{route('add.customer')}}"> Add Customer</a>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </li>
                            @endif

                            @if(Auth::user()->can('supplier.menu'))
                            <li>
                                <a href="#sidebarSupplier" data-bs-toggle="collapse">
                                    <i class="fa-solid fa-person"></i>
                                    <span> Manage Suppliers  </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarSupplier">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{ route('all.supplier') }}">All Suppliers</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('add.supplier') }}">Add Supplier</a>
                                        </li>
                            
                                    </ul>
                                </div>
                            </li>
                            @endif

                            @if(Auth::user()->can('employee.menu'))
                            <li>
                                <a href="#sidebarEcommerce" data-bs-toggle="collapse">
                                    <i class="fa fa-user"></i>
                                    <span>Manage Employees</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarEcommerce">
                                    <ul class="nav-second-level">
                                        @if(Auth::user()->can('employee.all'))
                                        <li>
                                            <a href="{{route('all.employee')}}"> All Employee </a>
                                        </li>
                                        @endif

                                        @if(Auth::user()->can('employee.add'))
                                        <li>
                                            <a href="{{route('add.employee')}}"> Add Employee </a>
                                        </li>
                                        @endif
                                    </ul>
                                </div>
                            </li>
                            @endif

                            @if(Auth::user()->can('roles.menu'))
                            <li>
                                <a href="#permission" data-bs-toggle="collapse">
                                    <i class="fa fa-users"></i>
                                    <span> Roles And Permission    </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="permission">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{ route('all.permission') }}">All Permission </a>
                                        </li>

                                        <li>
                                            <a href="{{ route('all.roles') }}">All Roles </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('add.roles.permission') }}">Roles in Permission </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('all.roles.permission') }}">All Roles in Permission </a>
                                        </li>

                                    </ul>
                                </div>
                            </li>
                            @endif

                            @if(Auth::user()->can('roles.menu'))
                            <li>
                                <a href="#admin" data-bs-toggle="collapse">
                                    <i class="fa-solid fa-gears"></i>
                                    <span> Setting Admin User    </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="admin">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{ route('all.admin') }}">All Users </a>
                                        </li>

                                        <li>
                                            <a href="{{ route('add.admin') }}">Add User </a>
                                        </li> 

                                    </ul>
                                </div>
                            </li>
                           @endif

                 
                            <li>
                                    <a href="#backup" data-bs-toggle="collapse">
                                    <i class="fa-solid fa-cloud-arrow-down"></i>
                                        <span>Database Backup  </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <div class="collapse" id="backup">
                                        <ul class="nav-second-level">
                                            <li>
                                                <a href="{{ route('database.backup') }}">Database Backup </a>
                                            </li> 

                                        </ul>
                                    </div>
                            </li>
                        
                        
                            

                            
                         

                        
                        </ul>

                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>