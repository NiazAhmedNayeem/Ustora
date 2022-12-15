@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title text-center">All Product Information</h4>
                    <p class="card-title-desc">{{Session::get('message')}}</p>

                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th class="text-center">SL NO</th>
                            <th>Product Name</th>
                            <th>Category Name</th>
                            <th>Brand Name</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Image</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
{{--                        @foreach($courses as $course)--}}
                            <tr>
                                <td class="text-center">001</td>
                                <td>Samsung M21</td>
                                <td>EEE</td>
                                <td>Samsung</td>
                                <td class="text-center">21000</td>
                                <td class="text-center"><img src="{{asset('/')}}website/img/product-2.jpg" alt="" height="50" width="70"/></td>
                                <td class="text-center">
                                    <a href="" class="btn btn-outline-success">
                                        <i class="fa fa-book-open"></i>
                                    </a>
                                    <a href="" class="btn btn-outline-info">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="" class="btn btn-outline-danger" >
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
{{--                        @endforeach--}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection

