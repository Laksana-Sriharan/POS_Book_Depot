@extends('admin_dashboard')
@section('admin')

 <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
      <a href="{{ route('add.advance.salary') }}" class="btn btn-primary rounded-pill waves-effect waves-light"><i class="fa-solid fa-plus"></i> &nbsp; Add Advance Salary </a>  
                                        </ol>
                                    </div>
                                    <h4 class="page-title">All Pay Salary</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">{{ date("F Y") }}</h4>

                    <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Month</th>
                                <th>Salary</th>
                                <th>Advance</th>
                                <th>Due</th>
                                <th>Action</th>
                            </tr>
                        </thead>


        <tbody>
    @foreach($employee as $key => $item)
    <tr>
        <td>{{ $key + 1 }}</td>
        <td><img src="{{ asset($item->image) }}" style="width: 50px; height: 40px;"></td>
        <td>{{ $item->name }}</td>
        <td><span class="badge bg-info">{{ date("F", strtotime('-1 month')) }}</span></td>
        <td>{{ $item->salary }}</td>
        
        <td>
            @if(isset($item['advance']) && isset($item['advance']['advance_salary']) && $item['advance']['advance_salary'] === NULL)
                <p>No Advance</p>
            @else
                {{ $item['advance']['advance_salary'] ?? 'No Advance Salary' }}
            @endif
        </td>
         <td>
                                        @php
                    $advanceSalary = $item['advance']['advance_salary'] ?? 0;
                    $amount = $item->salary - $advanceSalary;
                    @endphp
                    <strong style="color: #000000;">{{ round($amount) }}</strong>


         </td>
        
       
        <td>
            <a href="{{ route('pay.now.salary',$item->id) }}" class="btn btn-blue rounded-pill waves-effect waves-light"><i class="fa-solid fa-hand-holding-dollar"></i> &nbsp; Pay Now</a>
        </td>
    </tr>
    @endforeach
</tbody>

                    </table>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
    <!-- end row-->




                    </div> <!-- container -->

                </div> <!-- content -->


@endsection 