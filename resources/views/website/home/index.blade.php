@extends('website.master')
@section('title')
    Home
@endsection

@section('body')
    <div class="slider-area">
        <!-- Slider -->
        <div class="block-slider block-slider4">
            <ul class="" id="bxslider-home4">
                @foreach($products as $product)
                <li>
                    <img src="{{asset($product->image)}}" alt="Slide" style="height: 500px; width: 600px;">
                    <div class="caption-group">
                        <h2 class="caption title">
                             <span class="primary"> <strong>{{$product->name}}</strong></span>
                        </h2>
                        <h4 class="caption subtitle">TK. {{$product->price}}</h4>
                        <a class="caption button-radius" href="{{route('website.product-detail', ['id' => $product->id])}}"><span class="icon"></span>Detail</a>
                    </div>
                </li>
                @endforeach

            </ul>
        </div>
        <!-- ./Slider -->

    </div> <!-- End slider area -->

    <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo1">
                        <i class="fa fa-refresh"></i>
                        <p>30 Days return</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo2">
                        <i class="fa fa-truck"></i>
                        <p>Free shipping</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo3">
                        <i class="fa fa-lock"></i>
                        <p>Secure payments</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo4">
                        <i class="fa fa-gift"></i>
                        <p>New products</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->

    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Latest Products</h2>
                        <div class="product-carousel">

                            @foreach($products as $product)
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="{{asset($product->image)}}" alt="" >
                                    <div class="product-hover">
{{--                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>--}}
                                        <a href="{{route('website.product-detail', ['id' => $product->id])}}" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>

                                <h2><a href="{{route('website.product-detail', ['id' => $product->id])}}">{{$product->name}}</a></h2>

                                <div class="product-carousel-price">
                                    <ins>TK. {{$product->price}}</ins>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->

    <div class="brands-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-wrapper">
                        <div class="brand-list">
                            <img src="{{asset('/')}}website/img/brand1.png" alt="">
                            <img src="{{asset('/')}}website/img/brand2.png" alt="">
                            <img src="{{asset('/')}}website/img/brand3.png" alt="">
                            <img src="{{asset('/')}}website/img/brand4.png" alt="">
                            <img src="{{asset('/')}}website/img/brand5.png" alt="">
                            <img src="{{asset('/')}}website/img/brand6.png" alt="">
                            <img src="{{asset('/')}}website/img/brand1.png" alt="">
                            <img src="{{asset('/')}}website/img/brand2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End brands area -->

    <div class="product-widget-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Top Sellers</h2>
                        <a href="" class="wid-view-more">View All</a>
                        @foreach($products as $product)

                        <div class="row">
                            <div class="single-wid-product d-flex" >
                                <a href=""><img src="{{asset($product->image)}}" alt="" class="product-thumb"></a>
                                <h2><a href="{{route('website.product-detail', ['id' => $product->id])}}">Sony Smart TV - 2015</a></h2>
                                <div class="product-wid-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product-wid-price">
                                    <ins>TK. {{$product->price}}</ins>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End product widget area -->
@endsection
