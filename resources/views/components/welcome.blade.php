<!-- Li's Static Banner Area End Here -->
<!-- Begin Li's Special Product Area -->
@foreach ($categories as $category)
    @if ($category == "Laptops")
        <!-- Li's Laptops Product Area -->
        <section class="product-area li-laptop-product Special-product pt-60 pb-45">
            <div class="container">
                <div class="row">
                    <!-- Begin Li's Section Area -->
                    <div class="col-lg-12">
                        <div class="li-section-title">
                            <h2><span>Laptops</span></h2>
                        </div>
                        <div class="row special-product-active owl-carousel">
                            @foreach ($products as $product)
                                @if ($product->producttype == "Laptops")
                                    <!-- Display laptop product -->
                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <!-- Product content -->
                                            <div class="product-image">
                                                <a href="single-product.html">
                                                    <img src="{{ asset('product/' . $product->image) }}" alt="Li's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                            <!-- Product description -->
                                            <div class="product_desc">
                                                <!-- Product review and rating -->
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="{{ route('category.products', ['category' => $product->producttype]) }}">{{ $product->producttype }}</a>
                                                        </h5>
                                                        <div class="rating-box">
                                                            <ul class="rating">
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- Product name -->
                                                    <h4><a class="product_name" href="{{ route('info', ['id' => $product->id]) }}">{{ $product->productname }}</a></h4>
                                                    <!-- Product price -->
                                                    <div class="price-box">
                                                        <span class="new-price new-price-2">&#x20A6;{{ $product->newprice }} </span>
                                                        <span class="old-price">&#x20A6;{{ $product->oldprice }}</span>
                                                        <!-- Product discount percentage -->
                                                        <span class="discount-percentage">
                                                            @php
                                                                $percentageDiscount = ($product->oldprice - $product->newprice) / $product->oldprice * 100;
                                                            @endphp
                                                            {{ round($percentageDiscount) }}%off
                                                        </span>
                                                    </div>
                                                    <!-- Product counter section -->
                                                    <div class="countersection">
                                                        <div class="li-countdown"></div>
                                                    </div>
                                                </div>
                                                <!-- Product add actions -->
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="{{ route('info', ['id' => $product->id]) }}">Add to cart</a></li>
                                                        <li><a class="links-details" href="#"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="{{ route('info', ['id' => $product->id]) }}" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="{{ route('info', ['id' => $product->id]) }}"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Product description end -->
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <!-- Li's Section Area End Here -->
                </div>
            </div>
        </section>
    @elseif ($category == "Books")
        <!-- Books Product Area -->
        <!-- Add book products markup here -->
    <!-- Add more conditions for other categories -->
    @endif
@endforeach
<!-- End Li's Special Product Area -->
<!-- Begin Li's Static Home Area -->
<div class="li-static-home">
    <!-- Add static home content here -->
</div>
