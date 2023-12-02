@extends('admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

 <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a  class="btn btn-primary rounded-pill waves-effect waves-light text-light" href="{{ route('pay.salary') }}"><i class="fa-solid fa-angle-left"></i> &nbsp; Back </a></li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Paid Salary </h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title -->

<div class="row">


  <div class="col-lg-8 col-xl-12">
<div class="card">
    <div class="card-body">





    <!-- end timeline content-->

    <div class="tab-pane" id="settings">
         <form method="post" action="{{ route('employe.salary.store') }}" >
            @csrf

            <input type="hidden" name="id" value="{{ $paysalary->id }}">

            <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Paid Salary </h5>

            <div class="row">


 <div class="col-md-6">
        <div class="mb-3">
            <label for="firstname" class="form-label">Employee Name:     </label>
             <strong style="color: #000000;">{{ $paysalary->name }}</strong>
        </div>
    </div>


    <div class="col-md-6">
        <div class="mb-3">
            <label for="firstname" class="form-label">Salary Month:    </label>
          <strong style="color: #000000;">{{ date("F", strtotime('-1 month')) }}</strong>
          <input type="hidden" name="month" value="{{ date("F", strtotime('-1 month')) }}">

        </div>
    </div>


      <div class="col-md-6">
        <div class="mb-3">
            <label for="firstname" class="form-label">Employe Salary:    </label>
          <strong style="color: #000000;">{{ $paysalary->salary }}</strong>
            <input type="hidden" name="paid_amount" value="{{ $paysalary->salary }}">

        </div>
    </div>


  <div class="col-md-6">
    <div class="mb-3">
        <label for="firstname" class="form-label">Advance Salary:</label>
        <strong style="color: #000000;">
            {{ $paysalary['advance']['advance_salary'] ?? 'No Salary' }}
        </strong>
          <input type="hidden" name="advance_salary" value="{{ $paysalary['advance']['advance_salary'] ?? 0 }}">

    </div>
</div>

@php
$amount = $paysalary->salary - ($paysalary['advance']['advance_salary'] ?? 0);
@endphp


 <div class="col-md-6">
    <div class="mb-3">
        <label for="firstname" class="form-label">Due Salary:</label>
        <strong style="color: #000000;">
            @if(isset($paysalary['advance']) && isset($paysalary['advance']['advance_salary']))
                {{ round($amount) }}
            @else
                <span><strong style="color: #000000;">{{ $paysalary->salary }}</strong></span>
            @endif
        </strong>
          <input type="hidden" name="due_salary" value="{{ round($amount) }}">  
    </div>
</div>





            </div> <!-- end row -->



            <div class="text-end">
                <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="fa-solid fa-money-bill"></i> Pay Salary </button>
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