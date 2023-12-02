@extends('admin_dashboard')
@section('admin')

@php

 $date = date('d-F-Y');
 $today_paid = App\Models\Order::where('order_date',$date)->sum('pay');
 $total_paid = App\Models\Order::sum('pay');
 $total_due = App\Models\Order::sum('due'); 
 $completeorder = App\Models\Order::where('order_status','complete')->get(); 
 $pendingorder = App\Models\Order::where('order_status','pending')->get(); 
 $order = App\Models\Order::latest()->get();

@endphp


<div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <form class="d-flex align-items-center mb-3">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control border-0" id="dash-daterange">
                                                <span class="input-group-text bg-blue border-blue text-white">
                                                    <i class="mdi mdi-calendar-range"></i>
                                                </span>
                                            </div>
                                            
                                        </form>
                                    </div>
                                    <h4 class="page-title">Dashboard</h4>
                                </div>
                        </div>
                    </div>     
                    <!-- end page title --> 

                    <div class="row">
                        <div class="col-md-6 col-xl-3">
                            <div class="widget-rounded-circle card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="avatar-lg rounded-circle bg-primary border-primary border shadow">
                                                <i class="fe-heart font-22 avatar-title text-white"></i>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="text-end">
                                                <h3 class="text-dark mt-1">Rs.<span data-plugin="counterup">{{ $total_paid }}</span></h3>
                                                <p class="text-muted mb-1 text-truncate">Total Paid </p>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div>
                            </div> <!-- end widget-rounded-circle-->
                        </div> <!-- end col-->

                        <div class="col-md-6 col-xl-3">
                            <div class="widget-rounded-circle card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="avatar-lg rounded-circle bg-success border-success border shadow">
                                                <i class="fe-shopping-cart font-22 avatar-title text-white"></i>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="text-end">
                                                <h3 class="text-dark mt-1">Rs.<span data-plugin="counterup">{{ $total_due  }}</span></h3>
                                                <p class="text-muted mb-1 text-truncate">Total Due </p>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div>
                            </div> <!-- end widget-rounded-circle-->
                        </div> <!-- end col-->

                        <div class="col-md-6 col-xl-3">
                            <div class="widget-rounded-circle card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="avatar-lg rounded-circle bg-info border-info border shadow">
                                                <i class="fe-bar-chart-line- font-22 avatar-title text-white"></i>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                        <div class="text-end">
                                                <h3 class="text-dark mt-1"> <span data-plugin="counterup">{{ count($completeorder)  }}</span></h3>
                                                <p class="text-muted mb-1 text-truncate">Complete Orders </p>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div>
                            </div> <!-- end widget-rounded-circle-->
                        </div> <!-- end col-->

                        <div class="col-md-6 col-xl-3">
                            <div class="widget-rounded-circle card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="avatar-lg rounded-circle bg-warning border-warning border shadow">
                                                <i class="fe-eye font-22 avatar-title text-white"></i>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                        <div class="text-end">
                                                <h3 class="text-dark mt-1"> <span data-plugin="counterup">{{ count($pendingorder)  }}</span></h3>
                                                <p class="text-muted mb-1 text-truncate">Pending Orders </p>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div>
                            </div> <!-- end widget-rounded-circle-->
                        </div> <!-- end col-->
                    </div>

                    

                    <div class="row">
                         
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        
    
                                        <h4 class="header-title mb-3">Revenue History</h4>
    
                                        <div class="table-responsive">
                                            <table class="table table-borderless table-nowrap table-hover table-centered m-0">
    
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Order Date</th>
                                                        <th>Payment Mode</th>
                                                        <th>Total Books</th>
                                                        <th>Total Payment</th>
                                                        <th>Order Status</th>
                                                        <th>Invoice</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($order as $key=> $item)
                                                        <tr>
                                                            <td>{{ $key+1 }}</td>
                                                            <td>{{ $item->order_date }}</td>
                                                            <td>{{ $item->payment_status }}</td>
                                                            <td>{{ $item->total_products }}</td>
                                                            <td>Rs . {{ $item->pay }}</td>
                                                            <td> <span class="badge bg-success">{{ $item->order_status }}</span> </td>
                                                            <td>
                                                                    <a href="{{url('order/invoice-download/'.$item->id) }}" class="btn btn-blue rounded-pill waves-effect waves-light"><i class="fa-solid fa-file-invoice"></i> &nbsp; PDF Invoice </a> 
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                </tbody>
                                            </table>
                                        </div> <!-- end .table-responsive-->
                                    </div>
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                        
                    </div> <!-- container -->
</div> <!-- content -->
@endsection