<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Dashboard | Admin Dashboard </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Plugins css -->
        <link href="{{asset('backend/assets/libs/flatpickr/flatpickr.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('backend/assets/libs/selectize/css/selectize.bootstrap3.css')}}" rel="stylesheet" type="text/css" />
        
        <!-- Bootstrap css -->
        <link href="{{asset('backend/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App css -->
        <link href="{{asset('backend/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-style"/>
        <!-- icons -->
        <link href="{{asset('backend/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Head js -->
        <script src="{{asset('backend/assets/js/head.js')}}"></script>

        <!-- Datatables css -->
        <link href="{{asset('backend/assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('backend/assets/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('backend/assets/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('backend/assets/libs/datatables.net-select-bs5/css//select.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Datatables css end -->

        <!-- Toster css -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
        <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
    </head>

    <!-- body start -->
    <body data-layout-mode="default" data-theme="light" data-topbar-color="dark" data-menu-position="fixed" data-leftbar-color="light" data-leftbar-size='default' data-sidebar-user='false'>

        <!-- Begin page -->
        <div id="wrapper">

            
            <!-- Topbar Start -->
            
            @include('body.header')

            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->

            @include('body.sidebar')
            
            
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
               @yield('admin')

                <!-- Footer Start -->
               
                @include('body.footer')

                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
        
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="{{asset('backend/assets/js/vendor.min.js')}}"></script>

        <!-- Plugins js-->
        <script src="{{asset('backend/assets/libs/flatpickr/flatpickr.min.js')}}"></script>
        <script src="{{asset('backend/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <script src="{{asset('backend/assets/libs/selectize/js/standalone/selectize.min.js')}}"></script>

        <!-- Dashboar 1 init js-->
        <script src="{{asset('backend/assets/js/pages/dashboard-1.init.js')}}"></script>

        <!-- App js-->
        <script src="{{asset('backend/assets/js/app.min.js')}}"></script>

        <!-- datatables js -->
        <script src="{{asset('backend/assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('backend/assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js')}}"></script>
        <script src="{{asset('backend/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('backend/assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js')}}"></script>
        <script src="{{asset('backend/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('backend/assets/libs/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js')}}"></script>
        <script src="{{asset('backend/assets/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
        <script src="{{asset('backend/assets/libs/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
        <script src="{{asset('backend/assets/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
        <script src="{{asset('backend/assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
        <script src="{{asset('backend/assets/libs/datatables.net-select/js/dataTables.select.min.js')}}"></script>
        <script src="{{asset('backend/assets/libs/pdfmake/build/pdfmake.min.js')}}"></script>
        <script src="{{asset('backend/assets/libs/pdfmake/build/vfs_fonts.js')}}"></script>
        <!-- datatables js ends -->

        <!-- Datatables init -->
        <script src="{{asset('backend/assets/js/pages/datatables.init.js')}}"></script>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

        <script src="{{ asset('backend/assets/js/code.js') }}"></script>
        <script src="{{ asset('backend/assets/js/validate.min.js') }}"></script>

        <!-- Toster js-->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

        <script>
                    @if(Session::has('message'))
                    var type = "{{ Session::get('alert-type','info') }}"
                    switch(type){
                        case 'info':
                        toastr.info(" {{ Session::get('message') }} ");
                        break;

                        case 'success':
                        toastr.success(" {{ Session::get('message') }} ");
                        break;

                        case 'warning':
                        toastr.warning(" {{ Session::get('message') }} ");
                        break;

                        case 'error':
                        toastr.error(" {{ Session::get('message') }} ");
                        break; 
                    }
                    @endif 
        </script>


        <script>
                    const passwordInput = document.getElementById('new_password');
                    const meterSections = document.querySelectorAll('.meter-section');

                    passwordInput.addEventListener('input', updateMeter);

                    function updateMeter() {
                        const password = passwordInput.value;
                        let strength = calculatePasswordStrength(password);

                        // Remove all strength classes
                        meterSections.forEach((section) => {
                            section.classList.remove('weak', 'medium', 'strong', 'very-strong');
                        });

                        // Add the appropriate strength class based on the strength value
                        if (strength >= 1) {
                            meterSections[0].classList.add('weak');
                        }
                        if (strength >= 2) {
                            meterSections[1].classList.add('medium');
                        }
                        if (strength >= 3) {
                            meterSections[2].classList.add('strong');
                        }
                        if (strength >= 4) {
                            meterSections[3].classList.add('very-strong');
                        }
                    }

                    function calculatePasswordStrength(password) {
                        const lengthWeight = 0.2;
                        const uppercaseWeight = 0.5;
                        const lowercaseWeight = 0.5;
                        const numberWeight = 0.7;
                        const symbolWeight = 1;

                        let strength = 0;

                        // Calculate the strength based on the password length
                        strength += password.length * lengthWeight;

                        // Calculate the strength based on uppercase letters
                        if (/[A-Z]/.test(password)) {
                            strength += uppercaseWeight;
                        }

                        // Calculate the strength based on lowercase letters
                        if (/[a-z]/.test(password)) {
                            strength += lowercaseWeight;
                        }

                        // Calculate the strength based on numbers
                        if (/\d/.test(password)) {
                            strength += numberWeight;
                        }

                        // Calculate the strength based on symbols
                        if (/[^A-Za-z0-9]/.test(password)) {
                            strength += symbolWeight;
                        }

                        return strength;
                    }

        </script>

        
        
    </body>
</html>