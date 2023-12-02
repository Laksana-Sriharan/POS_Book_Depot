@extends('admin_dashboard')
@section('admin')
<style>
        .password-meter {
            display: flex;
            height: 5px;
            margin-top: 10px;
        }

        .meter-section {
            flex: 1;
            background-color: #ddd;
        }

        .weak {
            background-color: #ff4d4d;
        }

        .medium {
            background-color: #ffd633;
        }

        .strong {
            background-color: #00b300;
        }

        .very-strong {
            background-color: #009900;
        }
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


<div class="content">

                            <!-- Start Content-->
                            <div class="container-fluid">

                                <!-- start page title -->
                                <div class="row">
                                    <div class="col-12">
                                        <div class="page-title-box">
                                            
                                            <h4 class="page-title">Change Password</h4>
                                        </div>
                                    </div>
                                </div>     
                                <!-- end page title -->

                                <div class="row">
                                    

                                    <div class="col-lg-8 col-xl-8">
                                        <div class="card">
                                            <div class="card-body">
                                            
                                                
                                                    
                                                    <!-- end about me section content -->
            
                                                    <div class="tab-pane" id="settings">
                                                        <form method = "post" action = "{{route('update.password')}}">
                                                            @csrf
                                                            
                                                            
                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label for="old_password" class="form-label"> Old Password </label>
                                                                            <div class="input-group input-group-merge">
                                                                                <input type="password" name = "old_password" class="form-control @error('old_password') is-invalid @enderror" id="current_password">
                                                                                <div class="input-group-text" data-password="false">
                                                                                        <span class="password-eye"></span>
                                                            
                                                                                </div>
                                                                            </div>
                                                                            @error('old_password')
                                                                                <span class="text-danger">{{$message}}</span>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                

                                                                
                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label for="password" class="form-label">New Password</label>
                                                                            <div class="input-group input-group-merge">
                                                                                <input name="new_password" type="password" id="new_password" class="form-control @error('new_password') is-invalid @enderror"  aria-autocomplete="list"  aria-label="Password" aria-describedby="passwordHelp">
                                                                                <div class="input-group-text" data-password="false">
                                                                                        <span class="password-eye"></span>
                                                            
                                                                                </div>
                                                                                
                                                                            
                                                                            </div>
                                                                            <div class="password-meter">
                                                                                    <div class="meter-section rounded me-2"></div>
                                                                                    <div class="meter-section rounded me-2"></div>
                                                                                    <div class="meter-section rounded me-2"></div>
                                                                                    <div class="meter-section rounded"></div>
                                                                            </div>
                                                                                <div id="passwordHelp" class="form-text text-muted">Use 8 or more characters with a mix of
                                                                                    letters, numbers &
                                                                                    symbols.
                                                                                </div>
                                                                                @error('new_password')
                                                                                            <span class="text-danger">{{$message}}</span>
                                                                                @enderror
                                                                                
                                                                        </div>
                                                                    </div>
                                                                
                                                    
                                                                
                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label for="new_password_confirmation" class="form-label"> Confirm New Password </label>
                                                                            <div class="input-group input-group-merge">
                                                                                <input type="password" name = "new_password_confirmation" class="form-control " id="new_password_confirmation">
                                                                                <div class="input-group-text" data-password="false">
                                                                                        <span class="password-eye"></span>
                                                            
                                                                                </div>
                                                                            </div>
                                                                            @error('new_password_confirmation')
                                                                                    <span class="text-danger">{{$message}}</span>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                
                                                                    <div class="text-end">
                                                                        <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="fa-solid fa-check"></i>  Reset Password </button>
                                                                    </div>
                                                        </form>
                                                    </div>
                                                    <!-- end settings content-->
            
                                                
                                            </div>
                                        </div> <!-- end card-->

                                    </div> <!-- end col -->
                                </div>
                                <!-- end row-->

                            </div> <!-- container -->

</div>


@endsection