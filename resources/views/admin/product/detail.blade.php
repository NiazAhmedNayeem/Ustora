@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center">Product Information</h4>
                    <table class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <tr>
                            <th>Product ID</th>
                            <td>{{$product->id}}</td>
                        </tr>
                        <tr>
                            <th>Product Name</th>
                            <td>{{$product->name}}</td>
                        </tr>
                        <tr>
                            <th>Brand Name</th>
                            <td>{{$product->brand_name}}</td>
                        </tr>
                        <tr>
                            <th>Product Category</th>
                            <td>{{$product->category->name}}</td>
                        </tr>
                        <tr>
                            <th>Product Description</th>
                            <td>{{$product->description}}</td>
                        </tr>
                        <tr>
                            <th>Product Price</th>
                            <td>{{$product->price}}</td>
                        </tr>
                        <tr>
                            <th>Product Image</th>
                            <td><img src="{{asset($product->image)}}" alt="" height="200" width="220"/></td>
                        </tr>
{{--                        <tr>--}}
{{--                            <th>Course Published Status</th>--}}
{{--                            <td>{{$course->status == 1 ? 'Course Published' : 'Not Available'}}</td>--}}
{{--                        </tr>--}}
{{--                        @if($course->offer_status == 1)--}}
{{--                            <tr>--}}
{{--                                <th>Course Offer Fee</th>--}}
{{--                                <td>{{$course->offer_fee}}</td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <th>Course Offer Image</th>--}}
{{--                                <td><img src="{{asset($course->offer_image)}}" alt="" height="140" width="220"/></td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <th>Course Offer Date</th>--}}
{{--                                <td>{{$course->offer_date}}</td>--}}
{{--                            </tr>--}}
{{--                        @endif--}}
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection




