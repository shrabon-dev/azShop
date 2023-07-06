@extends('layouts/frontendmaster')

@section('content')
<!-- main-area -->
<main>

    <!-- breadcrumb-area -->
    <section class="breadcrumb-area" style="padding:50px 0;background: url(@if($banners->shop_page_banner) {{ asset('uploads/banners') }}/{{ $banners->shop_page_banner }} @else https://flevix.com/wp-content/uploads/2020/07/Red-Blue-Abstract-Background.jpg @endif) no-repeat center; background-size:cover;background-position:center" >
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-3 col-lg-4 col-md-5 col-sm-8 order-2 order-md-0">
                    <div class="breadcrumb-product text-center">
                        <div class="thumb">
                            <a href="shop-details.html"><img src="{{ asset('frontend_assets') }}/img/product/br_product_img.png" alt="img"></a>
                            <span>35% OFF</span>
                        </div>
                        <div class="content">
                            <div class="rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <h4 class="title"><a href="shop-details.html">Blender Mixer Food</a></h4>
                            <h5 class="price">$37.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8 col-md-7">
                    <div class="breadcrumb-content">
                        <h2 class="title text-light">Top-Selection</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Top-Selection</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->
{{-- @include('components.frontend.shop_layout') --}}
 <!-- shop-area -->
 <div class="shop-area pt-90 pb-90">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-3 col-lg-4 col-md-8 col-sm-10 order-2 order-lg-0">
                <aside class="shop-sidebar">
                    <div class="widget mb-35">
                        <div class="widget-title mb-25">
                            <h4 class="title">Category</h4>
                        </div>
                        <div class="shop-cat-list">
                            @php
                                $categories= category()
                            @endphp
                            <ul>
                                @foreach ($categories as $category)
                                    <li>
                                        <a href="{{route('category.product',$category->slug)}}">{{$category->category_name}}<span>{{categoryProductCount($category->slug)}}</span></a>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                    <div class="widget mb-40">
                        <div class="widget-title mb-25">
                            <h4 class="title">Best Seller</h4>
                        </div>
                        <div class="sidebar-product-list">
                            <ul>
                                <li>
                                    <div class="thumb">
                                        <a href="shop-details.html"><img src="{{ asset('frontend_assets') }}/img/product/sidebar_product01.jpg" alt="img"></a>
                                    </div>
                                    <div class="content">
                                        <h6 class="title"><a href="shop-details.html">Appliance Aid Kitchen Stand</a></h6>
                                        <div class="rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <h4 class="price"><del>$39.08</del> $19.00</h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <a href="shop-details.html"><img src="{{ asset('frontend_assets') }}/img/product/sidebar_product02.jpg" alt="img"></a>
                                    </div>
                                    <div class="content">
                                        <h6 class="title"><a href="shop-details.html">One Washer Dryer</a></h6>
                                        <div class="rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <h4 class="price"><del>$39.08</del> $19.00</h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <a href="shop-details.html"><img src="{{ asset('frontend_assets') }}/img/product/sidebar_product03.jpg" alt="img"></a>
                                    </div>
                                    <div class="content">
                                        <h6 class="title"><a href="shop-details.html">Electric Blender Mixer</a></h6>
                                        <div class="rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <h4 class="price"><del>$39.08</del> $19.00</h4>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="widget mb-40">
                        <div class="widget-title price-title mb-15">
                            <h4 class="title">Filter by price :</h4>
                        </div>
                        <div class="price_filter">
                            <div id="slider-range"></div>
                            <div class="price_slider_amount">
                                <input type="submit" class="btn" value="Filter">
                                <span>Price :</span>
                                <input type="text" id="amount" name="price" placeholder="Add Your Price" />
                            </div>
                        </div>
                    </div>
                    <div class="widget">
                        <div class="widget-title mb-15">
                            <h4 class="title">All Vendors</h4>
                        </div>
                        <div class="shop-brand-list">
                            @php
                                $vendors=vendors()
                            @endphp
                            <ul>
                                @foreach ($vendors as $vendor)
                                    <li>
                                        <a href="{{route('vendor.product',['id'=>$vendor->id ,'shopname'=>Str::slug($vendor->shop_name)])}}">{{$vendor->shop_name}} <i class="fa-solid fa-angles-right"></i></a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </aside>
            </div>
            <div class="col-xl-9 col-lg-8">
                <div class="shop-top-wrap mb-35">
                    <div class="shop-top-left">
                        <h5 class="title">Shop</h5>
                    </div>
                    <div class="shop-top-right">
                        <form action="#">
                            <label for="shortBy">sort By</label>
                            <select id="shortBy" name="select" class="form-select" aria-label="Default select example">
                                <option value="">Sorting</option>
                                <option>Free Shipping</option>
                                <option>Best Match</option>
                                <option>Newest Item</option>
                                <option>Size A - Z</option>
                            </select>
                        </form>
                        {{-- <ul>
                            <li>View</li>
                            <li class="active"><a href="#"><i class="fa-solid fa-table-cells"></i></a></li>
                            <li><a href="#"><i class="fa-solid fa-bars"></i></a></li>
                        </ul> --}}
                    </div>
                </div>
                <div class="row justify-content-center">
                    @foreach ($topReviews->shuffle() as $product)
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-8">
                            <div class="shop-product-item mb-30">
                                <div class="shop-thumb">
                                    <a href="{{route('single.product', ['id'=>$product->relationwithproduct->id,'title'=>Str::slug($product->relationwithproduct->product_title)] )}}"><img src="{{asset('uploads/product_photo')}}/{{$product->relationwithproduct->thumbnail}}" alt="img"></a>
                                    @if ($product->relationwithproduct->created_at->diffInDays(\Carbon\Carbon::now()) < 2)
                                        <span>New</span>
                                    @endif
                                </div>
                                <div class="shop-content">
                                    <ul class="tag">
                                        <li>Sold by <a href="{{route('vendor.product',['id'=>$vendor->id ,'shopname'=>Str::slug($vendor->shop_name)])}}">{{shopName($product->vendor_id)->shop_name}}</a></li>
                                    </ul>
                                    <h2 class="title"><a href="{{route('single.product', ['id'=>$product->relationwithproduct->id,'title'=>Str::slug($product->relationwithproduct->product_title)])}}">{{$product->relationwithproduct->product_title}}</a></h2>
                                    {{-- <div class="rating">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div> --}}
                                    <div class="rating">
                                        @if (review($product->relationwithproduct->id))
                                            @for ($x = 1; $x <= 5; $x++)
                                                @if ($x <= review($product->relationwithproduct->id))
                                                    <i class="fas fa-star"></i>
                                                @else
                                                    <i class="far fa-star"></i><!--Empty star-->
                                                @endif
                                            @endfor
                                            <span style="font-size: 10px;">({{ count_review($product->relationwithproduct->id) }})</span>
                                        @else
                                            <span class="text-danger">No Review Yet</span>
                                        @endif
                                    </div>
                                    <span>Already Sold : 75%</span>
                                    <div class="progress">
                                        <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="content-bottom">
                                        @if ($product->relationwithproduct->discount_price)
                                            <h4>
                                                ${{$product->relationwithproduct->discount_price}}
                                                <span class="price text-muted">
                                                    <del> ${{$product->relationwithproduct->product_price}}</del>
                                                 </span>
                                            </h4>
                                            <p>0 orders <span>-{{Floor(((100*$product->relationwithproduct->product_price)-(100*$product->relationwithproduct->discount_price))/$product->relationwithproduct->product_price)}}%</span></p>
                                        @else
                                            <h4 class="price">${{$product->relationwithproduct->product_price}}</h4>
                                            <p>{{orderCount($product->relationwithproduct->id)}} orders</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="shop-bottom-wrap">
                    <div class="shop-bottom-box">
                        <div class="shop-bottom-right">
                                {{$topReviews->links('pagination::bootstrap-5')}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
