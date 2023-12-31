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
                    <a href = "{{route('add.customer')}}" class ="btn btn-primary rounded-pill waves-effect waves-light"><i class="fa-solid fa-plus"></i> &nbsp;  Add Customer </a>
                    </ol>
                </div>
                <h4 class="page-title"> All Customer </h4>
            </div>
        </div>
    </div>     
    <!-- end page title --> 

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    

                    <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>CID</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    
                    
                        <tbody>
                            @foreach($customer as $key=>$item)
                            <tr>
                                <td>{{$key +1}}</td>
                                <td><image src ="{{asset($item->image)}}" style = " width:50px; height:40px;"></td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->phone}}</td>
                                <td>{{$item->address}}</td>
                                <td>
                                    <a href = "{{route('edit.customer',$item->id)}}" class ="btn btn-blue rounded-pill waves-effect waves-light"><i class="fa-regular fa-pen-to-square"></i> &nbsp;  Edit </a>
                                    <a href = "{{route('delete.customer',$item->id)}}" class ="btn btn-danger rounded-pill waves-effect waves-light" id= "delete"><i class="fa-solid fa-trash"></i> &nbsp; Delete </a>
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