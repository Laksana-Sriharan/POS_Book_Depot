@extends('admin_dashboard')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                        <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a  class="btn btn-primary rounded-pill waves-effect waves-light text-light" href="{{ route('all.employee') }}"><i class="fa-solid fa-angle-left"></i> &nbsp; Back </a></li>

                                        </ol>
                                    </div>
                                            
                                        </ol>
                                    </div>
                                    <h4 class="page-title"> Edit Employee </h4> 
                                </div>
                            </div>
                        </div><br>
                        <!-- end page title -->

                        <div class="row">
                            

                            <div class="col-lg-8 col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                      
                                        
                                            
                                            <!-- end about me section content -->
    
                                            <div class="tab-pane" id="settings">
                                                <form method = "post" action = "{{route('employee.update')}}" enctype = "multipart/form-data">
                                                    @csrf

                                                    <input type ="hidden" name = "id" value = "{{$employee->id}}">
                                                    <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Edit Employee Details </h5>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="name" class="form-label"> Employee Name</label>
                                                                <input type="text" name = "name" class="form-control @error('name') is-invalid @enderror" value = "{{$employee->name}}">
                                                                @error('name')
                                                                    <span class="text-danger">{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="email" class="form-label">Email</label>
                                                                <input type="email" name = "email" class="form-control @error('email') is-invalid @enderror" value = "{{$employee->email}}">
                                                                @error('email')
                                                                    <span class="text-danger">{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                        </div> <!-- end col -->

                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="phone" class="form-label">Phone Number </label>
                                                                <input type="text" name = "phone" class="form-control @error('phone') is-invalid @enderror " value = "{{$employee->phone}}">
                                                                @error('phone')
                                                                    <span class="text-danger">{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                        </div> <!-- end col -->

                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="address" class="form-label">Address</label>
                                                                <input type="text" name = "address" class="form-control @error('address') is-invalid @enderror " value = "{{$employee->address}}">
                                                                @error('address')
                                                                    <span class="text-danger">{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                        </div> <!-- end col -->

                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="experience" class="form-label">Experience</label>
                                                                <select name = "experience"class = "form-select  @error('experience') is-invalid @enderror" id = "example-select" >
                                                                    <option selected disabled> Select Year </option>
                                                                    <option value = "1 Year" {{$employee->experience == '1 Year' ? 'selected' : ''}}> 1 Year </option>
                                                                    <option value = "2 Year" {{$employee->experience == '2 Year' ? 'selected' : ''}}> 2 Year </option>
                                                                    <option value = "3 Year" {{$employee->experience == '3 Year' ? 'selected' : ''}}> 3 Year </option>
                                                                    <option value = "4 Year" {{$employee->experience == '4 Year' ? 'selected' : ''}}> 4 Year </option>
                                                                    <option value = "5 Year" {{$employee->experience == '5 Year' ? 'selected' : ''}}> 5 Year </option>
                                                                </select>
                                                                @error('experience')
                                                                    <span class="text-danger">{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                        </div> <!-- end col -->

                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="salary" class="form-label">Salary</label>
                                                                <input type="text" name = "salary" class="form-control @error('salary') is-invalid @enderror " value = "{{$employee->salary}}">
                                                                @error('salary')
                                                                    <span class="text-danger">{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                        </div> <!-- end col -->

                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="dept" class="form-label"> Department </label>
                                                                <input type="text" name = "dept" class="form-control @error('dept') is-invalid @enderror " value = "{{$employee->dept}}">
                                                                @error('dept')
                                                                    <span class="text-danger">{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                        </div> <!-- end col -->

                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="vacation" class="form-label"> Vacation </label>
                                                                <input type="text" name = "vacation" class="form-control @error('vacation') is-invalid @enderror " value = "{{$employee->vacation}}">
                                                                @error('vacation')
                                                                    <span class="text-danger">{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                        </div> <!-- end col -->



                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <label for="fileinput" class="form-label">Employee Profile Image </label>
                                                                <input type="file" name = "image" class="form-control" id="image" >
                                                            </div>
                                                        </div> <!-- end col -->

                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <label for="fileinput" class="form-label"></label>
                                                                <img  id = "showImage" src="{{asset($employee->image)}}" class="rounded-circle avatar-lg img-thumbnail"
                                                                alt="profile-image">
                                                            </div>
                                                        </div> <!-- end col -->

                                                    </div> <!-- end row -->
    
                                                    <div class="text-end">
                                                        <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="fa-solid fa-pen"></i>&nbsp; Update </button>
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
</div>

<script type = "text/javascript">
    $(document).ready(function(){
        $('#image').change(function(e){
        var reader = new FileReader();
        reader.onload = function(e){
            $('#showImage').attr('src',e.target.result);
        }
        reader.readAsDataURL(e.target.files[0]);
        });
    });

</script>
@endsection