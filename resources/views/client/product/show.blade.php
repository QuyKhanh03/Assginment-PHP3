@extends('client.layout.app')
@section('content')
    <!-- slider-area -->
    <section class="slider-area position-relative">
        <div class="third-slider-active">
            <div class="third-slider-item third-slider-bg" style="background: #0c85d0;height: 420px">
                <div class="container custom-container-two">
                    <div class="third-slider-wrap">
                        <h3 class="text-center text-white mt-2">Chi tiết sản phẩm</h3>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- slider-area-end -->

    <!-- breadcrumb-area -->

    <!-- breadcrumb-area-end -->

    <!-- shop-details-area -->
    <section class="shop-details-area pt-100 pb-95">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="shop-details-flex-wrap">
                        <div class="shop-details-nav-wrap">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="item-one-tab" data-toggle="tab" href="#item-one" role="tab" aria-controls="item-one" aria-selected="true"><img src="{{ asset('storage/images/products/'.$product->image_primary) }}" alt=""></a>
                                </li>
                                @foreach($product_images as $item)
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="item-two-tab" data-toggle="tab" href="#item-{{ $item->id }}" role="tab" aria-controls="item-two" aria-selected="false"><img src="{{ asset('storage/images/products/'.$item->image_path) }}" alt=""></a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="shop-details-img-wrap">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="item-one" role="tabpanel" aria-labelledby="item-one-tab">
                                    <div class="shop-details-img">
                                        <img style="width: 610px;height: 640px;" src="{{ asset('storage/images/products/'.$product->image_primary) }}" alt="">
                                    </div>
                                </div>
                                @foreach($product_images as $item)
                                    <div class="tab-pane fade" id="item-{{$item->id}}" role="tabpanel" aria-labelledby="item-two-tab">
                                        <div class="shop-details-img">
                                            <img style="width: 610px;height: 640px;" src="{{ asset('storage/images/products/'.$item->image_path) }}" alt="">
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">

                    <div class="shop-details-content">
                        <h3 class="title">{{ $product->name }}</h3>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="style-name">Mã sản phẩm : {{ $product->code_product }}</p>
                        @if($product->sale_off > 0)
                            <p class="price"><del>{{ number_format($product->price,0,',','.') }} VNĐ</del> {{ number_format($product->price - ($product->price * $product->sale_off / 100), 0, ',', '.') }} VNĐ</p>
                        @else
                            <p class="price">{{ number_format($product->price, 0, ',', '.') }} VNĐ</p>
                        @endif
                        <div class="product-details-info">
                            @if(count($attributes) > 0)
                                <div class="sidebar-product-size mb-30">
                                    <h4 class="widget-title">Kích cỡ sản phẩm</h4>
                                    <select class="nice-select form-select" name="size_name">
                                        <option value="">Chọn kích cỡ</option>
                                            @foreach($attributes as $attribute)
                                                <option class="size_name" value="{{ $attribute->size_name }}">{{ $attribute->size_name }}</option>
                                            @endforeach
                                    </select>
                                </div>
                            @endif

                        </div>
                        <div class="perched-info" >
                            <div class="cart-plus-minus">
                                <form  class="num-block" id="form-cart">
                                    <input  type="text" class="in-num qty" value="1" readonly="">
                                    <div class="qtybutton-box">
                                        <span class="plus"><img src="{{ asset('templates/client/img/icon/plus.png') }}" alt=""></span>
                                        <span class="minus dis"><img src="{{ asset('templates/client/img/icon/minus.png') }}" alt=""></span>
                                    </div>
                                </form>
                            </div>

                            <a href="javaScript:void(0)" data-id="{{ $product->id }}" class="btn add-cart">Thêm vào giỏ hàng</a>
                            <div class="wishlist-compare">
                                <ul>
                                    <li><a href="#"><i class="far fa-heart"></i> Add to Wishlist</a></li>
                                    <li><a href="#"><i class="fas fa-retweet"></i> Add to Compare List</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-details-share">
                            <ul>
                                <li>Share :</li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="product-desc-wrap">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description"
                                   aria-selected="true">Description Guide</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="reviews-tab" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews"
                                   aria-selected="false">Reviews</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                                <div class="product-desc-title mb-30">
                                    <h4 class="title">Additional information :</h4>
                                </div>
                                {!! $product->short_description !!}
                                {!! $product->detail_description !!}
                            </div>
                            <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                                <div class="product-desc-title mb-30">
                                    <h4 class="title">Reviews (0) :</h4>
                                </div>
                                <p>Your email address will not be published. Required fields are marked</p>
                                <p class="adara-review-title">Be the first to review “Adara”</p>
                                <div class="review-rating">
                                    <span>Your rating *</span>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <form action="#" class="comment-form review-form">
                                    <span>Your review *</span>
                                    <textarea name="message" id="comment-message" placeholder="Your Comment"></textarea>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" placeholder="Your Name*">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="email" placeholder="Your Email*">
                                        </div>
                                    </div>
                                    <div class="comment-check-box">
                                        <input type="checkbox" id="comment-check">
                                        <label for="comment-check">Save my name and email in this browser for the next time I comment.</label>
                                    </div>
                                    <button class="btn">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="related-product-wrap">
                <div class="row">
                    <div class="col-12">
                        <div class="related-product-title">
                            <h4 class="title">Sản phẩm liên quan...</h4>
                        </div>
                    </div>
                </div>
                <div class="row related-product-active">
                    @foreach($alsoLike as $value)
                    <div class="col-xl-3" style="width: 325px;height: 468px">
                        <div class="new-arrival-item text-center">
                            <div class="thumb mb-25" style="width: 325px;height: 370px">
                                @if($value->sale_off > 0)
                                    <div class="discount-tag new">{{ $value->sale_off }}%</div>
                                @else
                                    <div class="discount-tag new">New</div>
                                @endif
                                <a style="width: 325px;height: 100%" href="{{ route('client.product.show',$value->id) }}"><img style="width: 320px;height: 100%" src="{{ asset('storage/images/products/'.$value->image_primary) }}" alt=""></a>
                                <div class="product-overlay-action">
                                    <ul>
                                        <li><a href=""><i class="far fa-heart"></i></a></li>
                                        <li><a href="{{ route('client.product.show',$value->id) }}"><i class="far fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="content">
                                <h5><a href="{{ route('client.product.show',$value->id) }}">{{ $value->name }}</a></h5>
                                @if($product->sale_off > 0)
                                    <p class="price"><del>{{ number_format($product->price,0,',','.') }} VNĐ</del> {{ number_format($product->price - ($product->price * $product->sale_off / 100), 0, ',', '.') }} VNĐ</p>
                                @else
                                    <p class="price">{{ number_format($product->price, 0, ',', '.') }} VNĐ</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- shop-details-area-end -->
@endsection
