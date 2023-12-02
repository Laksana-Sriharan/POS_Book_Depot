@extends('admin_dashboard')
@section('admin')


 <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    
                                    <h4 class="page-title"> Customer Invoice</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">

                            <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <!-- Logo & title -->
                                    <div class="clearfix">
                                        <div class="float-start">
                                            <div class="auth-logo">
                                                <div class="logo logo-dark">
                                                    <span class="logo-lg">
                                                        <img src="{{ asset('backend/assets/images/logobook.png') }}" alt="" height="50">
                                                    </span>
                                                </div>

                                                <div class="logo logo-light">
                                                    <span class="logo-lg">
                                                        <img src="{{ asset('backend/assets/images/logobook.png') }}" alt="" height="50">
                                                    </span>
                                                </div>
                                                <h3> Poobalasingham Book Depot </h3>
                                            </div>
                                        </div>
                                        <div class="float-end">
                                            <h4 class="m-0 d-print-none">Invoice</h4>
                                        </div>
                                    </div>

            <div class="row">
                    <div class="col-md-6">
                        <div class="mt-3">
                            <p><b>Mr/Ms. {{ $customer->name }}</b></p>

                        </div>

                    </div><!-- end col -->
                <div class="col-md-4 offset-md-2">
                    <div class="mt-3 float-end">
                    <?php
                        use Carbon\Carbon;

                        $currentTime = Carbon::now();
                    ?>
                        <p><strong>Order Date & Time : </strong> <span class="float-end"> &nbsp;&nbsp;&nbsp;&nbsp; {{$currentTime}}</span></p>
                        <p><strong>Order Status :</strong> <span class="float-end"><span class="badge bg-danger">Unpaid</span></span></p>
                        <p><strong>Invoice No. : </strong> <span class="float-end">000028 </span></p>
                    </div>
                </div><!-- end col -->
            </div>
            <!-- end row -->

            <div class="row mt-3">
                <div class="col-sm-6">
                    <h6>Billing Address</h6>
                    <address>
                    	{{ $customer->address }}
                        <br>

                            <abbr title="Phone" style="text-decoration: none;" > Phone: </abbr> {{ $customer->phone }}<br>
                            <abbr title="email" style="text-decoration: none;" > Email: </abbr> {{ $customer->email }}<br>
                    </address>
                </div> <!-- end col -->


            </div> 
            <!-- end row -->

            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
        <table class="table mt-4 table-centered">
            <thead>
            <tr><th>#</th>
                <th>Item</th>
                <th style="width: 10%">Qty</th>
                <th style="width: 10%">Unit Cost</th>
                <th style="width: 10%" class="text-end">Total</th>
            </tr></thead>
            <tbody>
            @php
            $sl = 1;
            @endphp

            @foreach($contents as $key=> $item)
            <tr>
                <td>{{ $sl++ }}</td>
                <td>
                    <b>{{ $item->name }}</b> <br/>

                </td>
                <td>{{ $item->qty }}</td>
                <td>{{ $item->price }}</td>
                <td class="text-end"> Rs . {{ $item->price*$item->qty }}</td>
            </tr>
            @endforeach

            </tbody>
        </table>
                    </div> <!-- end table-responsive -->
                </div> <!-- end col -->
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-sm-6">
                    <div class="clearfix pt-5">
                        <h6 class="text-muted">Notes:</h6>


                    </div>
                </div> <!-- end col -->
                <div class="col-sm-6">
                    <div class="float-end">
                    <p><b>Sub-total :</b> <span class="float-end">Rs . {{ Cart::subtotal() }}</span></p>
                    <p><b>Tax ( 0 %) :</b> <span class="float-end"> &nbsp;&nbsp;&nbsp; Rs . {{ Cart::tax() }}</span></p>
                    <p><b>Discount ( 0 %) :</b> <span class="float-end"> &nbsp;&nbsp;&nbsp; Rs . {{ Cart::discount() }}</span></p>
                    <h3> Rs . {{ Cart::total() }} LKR</h3>
                                    </div>
                                    <div class="clearfix"></div>
                                </div> <!-- end col -->
                            </div>
                            <!-- end row -->

                            <div class="mt-4 mb-1">
                                <div class="text-end d-print-none">
                                    <a href="javascript:window.print()" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-printer me-1"></i> Print</a>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#signup-modal"><i class="fa-regular fa-file-lines"></i> &nbsp; Create Invoice </button> 
                                </div>
                            </div>
                        </div>
                    </div> <!-- end card -->
                </div> <!-- end col -->
                </div>
                                        <!-- end row --> 

                                    </div> <!-- container -->
                                        </div>
                                        <!-- end row --> 

                                    </div> <!-- container -->

             <!-- Signup modal content -->
                <div id="signup-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <div class="modal-body"> 
                                <div class="text-center mt-2 mb-4 ">
                                        <div class="auth-logo">
                                            <h3>Invoice Of {{ $customer->name }}</h3>
                                            <h3>Total Amount  Rs. {{ Cart::total() }}</h3>
                                        </div>
                                </div>




            <form class="px-3" method="post" action="{{ url('/final-invoice')  }}">
                                    @csrf

                <div class="mb-3">
                        <label for="payment_status" class="form-label">Payment</label>
                        <select name="payment_status" class="form-select" id="example-select" required>
                                    <option selected disabled >Select Payment </option>

                                <option value="Cash">Cash</option>
                                <option value="Cheque">Cheque</option>
                                <option value="Due">Due</option>

                        </select>
                </div>

                <div class="mb-3">
                            <label for="total" class="form-label">Sub Total</label>
                            <input class="form-control" type="text" name="total" value = "{{ Cart::total() }}">
                </div>

                <div class="mb-3">
                            <label for="pay" class="form-label">Cash</label>
                            <input class="form-control" type="text" name="pay" id="paymentInput" value = "">
                </div>

                <div class="mb-3">
                            <label for="balance" class="form-label">Balance</label>
                            <input class="form-control" type="text" name="balance"  id="balanceOutput" readonly value = "">
                </div>


                                        

                            <input type="hidden" name="customer_id" value="{{ $customer->id }}">
                            <input type="hidden" name="order_date" value="{{ date('d-F-Y') }}">
                            <input type="hidden" name="order_status" value="pending">
                            <input type="hidden" name="total_products" value="{{ Cart::count() }}">
                            <input type="hidden" name="sub_total" value="{{ Cart::subtotal() }}">
                            <input type="hidden" name="tax" value="{{ Cart::tax() }}">
                            <input type="hidden" name="total" value="{{ Cart::total() }}"> 
            </div>


                                    <div class="mb-3 text-center">
                                        <button class="btn btn-primary" type="submit" id="completeOrderButton">Proceed Transaction </button>
                                    </div>

                 <script>
                    // Get the payment and balance input elements
                    const paymentInput = document.getElementById('paymentInput');
                    const balanceOutput = document.getElementById('balanceOutput');
                    const completeOrderButton = document.getElementById('completeOrderButton');

                    // Add an event listener to the payment input to calculate the balance
                    paymentInput.addEventListener('input', function () {
                        const payment = parseFloat(paymentInput.value);
                        const total = parseFloat('{{ Cart::total() }}');

                        if (!isNaN(payment)) {
                            const balance = payment-total;
                            balanceOutput.value = balance.toFixed(2);
                            
                        } else {
                            balanceOutput.value = '';
                            
                        }
                    });
                    </script>

            </form>

                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    


@endsection