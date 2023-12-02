@extends('admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

 <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid ">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-6">
                                <div class="page-title-box">
                                    
                                    <h4 class="page-title">Add Expense </h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title -->

<div class="row">


  <div class="col-lg-8 col-xl-8">
    <div class="card">
        <div class="card-body">





    <!-- end timeline content-->

    <div class="tab-pane" id="settings">
        <form method="post" action="{{ route('expense.store') }}" enctype="multipart/form-data">
        	@csrf

            <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i>Add Expense </h5>

        <div class="row">


            <div class="col-md-6">
                <div class="mb-3">
                    <label for="details" class="form-label">Expense Details</label>
                    <textarea name="details" class="form-control" id="example-textarea" rows="3"></textarea>
                </div>
            </div> 
        </div>


    <div class="col-md-6">
        <div class="mb-3">
            <label for="amount" class="form-label">Amount </label>
            <input type="text" name="amount" class="form-control"   > 
        </div>
    </div> 

  <div class="col-md-6">
        <div class="mb-3">

            <input type="hidden" name="date" class="form-control" value="{{ date('d-m-Y') }}"   > 
        </div>
    </div>

     <div class="col-md-6">
        <div class="mb-3">

            <input type="hidden" name="month" class="form-control" value="{{ date('F') }}" > 
        </div>
    </div>

     <div class="col-md-6">
        <div class="mb-3">

            <input type="hidden" name="year" class="form-control" value="{{ date('Y') }}"   > 
        </div>
    </div>



</div> <!-- end row -->



            <div class="text-end">
                <button type="submit" class="btn btn-success waves-effect waves-light mt-2 justify-content-center"><i class="fa-solid fa-plus"></i>&nbsp; Save Expense </button>
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

                </div> <!-- content -->






@endsection