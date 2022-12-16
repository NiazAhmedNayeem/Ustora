@extends('website.master')
@section('title')
    All Product
@endsection

@section('body')
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>All Product</h2>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container">

        <div class="row mt-3">
            @foreach($products as $product)
                <div class="col-md-3">
                    <div class="card card-body h-100 mb-3">
                        <img src="{{asset($product->image)}}" alt="" class=""/>

                            <div >
                                <h4><a class="text-decoration-none mt-2" href="{{route('website.product-detail', ['id' => $product->id])}}" >{{$product->name}}</a> </h4>
                            </div>
                            <p class="mb-0 text-white">TK. {{$product->price}}/=</p>
                            <hr/>
                            <a href="{{route('website.product-detail', ['id' => $product->id])}}" class="btn btn-success mt-auto">Read More</a>

                    </div>
                </div>
            @endforeach
        </div>

    </div>


{{--    <div class="single-product-area">--}}
{{--        <div class="zigzag-bottom"></div>--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-4 col-sm-6">--}}
{{--                    @foreach($products as $product)--}}
{{--                    <div class="card-body d-flex flex-column">--}}
{{--                        <div class="product-upper">--}}
{{--                            <img src="{{asset($product->image)}}" alt="">--}}
{{--                        </div>--}}
{{--                        <h2><a href="">{{$product->name}}</a></h2>--}}
{{--                        <div class="product-carousel-price">--}}
{{--                            <ins>{{$product->price}}</ins>--}}
{{--                        </div>--}}

{{--                        <div class="product-option-shop">--}}
{{--                            <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="{{route('website.product-detail', ['id' => $product->id])}}">Detail</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--            </div>--}}




            <div class="row">
                <div class="col-md-12">
                    <div class="product-pagination text-center">
                        <nav>
                            <ul class="pagination">
                                <li>
                                    <a href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li>
                                    <a href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
