@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title text-center">All Product Information</h4>
                    <p class="card-title-desc text-center text-success">{{Session::get('message')}}</p>

                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th class="text-center">SL NO</th>
                            <th>Product Name</th>
                            <th>Category Name</th>
                            <th>Brand Name</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Image</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr class="{{$product->status == 1 ? '' : 'bg-warning'}}">
                                <td class="text-center">{{$loop->iteration}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->category->name}}</td>
                                <td>{{$product->brand_name}}</td>
                                <td class="text-center">{{$product->price}}</td>
                                <td class="text-center"><img src="{{asset($product->image)}}" alt="{{$product->name}}" height="50" width="70"/></td>
                                <td>{{$product->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                <td class="text-center">
                                    <a href="{{route('product.detail', ['id' => $product->id])}}" class="btn btn-outline-success">
                                        <i class="fa fa-book-open"></i>
                                    </a>
                                    <a href="{{route('admin.update-product-status', ['id' => $product->id])}}" class="btn btn-outline-info">
                                        <i class="fa fa-arrow-up"></i>
                                    </a>
                                    <a href="{{route('product.edit', ['id' => $product->id])}}" class="btn btn-outline-info">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{route('product.delete', ['id' => $product->id])}}" class="btn btn-outline-danger" >
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection

