
<!doctype html>
<html class="no-js" lang="zxx">
    
<!-- index-231:32-->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{ config('app.name') }}</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="/style/images/favicon.png">
        <!-- Material Design Iconic Font-V2.2.0 -->
        <link rel="stylesheet" href="/style/css/material-design-iconic-font.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="/style/css/font-awesome.min.css">
        <!-- Font Awesome Stars-->
        <link rel="stylesheet" href="/style/css/fontawesome-stars.css">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="/style/css/meanmenu.css">
        <!-- owl carousel CSS -->
        <link rel="stylesheet" href="/style/css/owl.carousel.min.css">
        <!-- Slick Carousel CSS -->
        <link rel="stylesheet" href="/style/css/slick.css">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="/style/css/animate.css">
        <!-- Jquery-ui CSS -->
        <link rel="stylesheet" href="/style/css/jquery-ui.min.css">
        <!-- Venobox CSS -->
        <link rel="stylesheet" href="/style/css/venobox.css">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="/style/css/nice-select.css">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="/style/css/magnific-popup.css">
        <!-- Bootstrap V4.1.3 Fremwork CSS -->
        <link rel="stylesheet" href="/style/css/bootstrap.min.css">
        <!-- Helper CSS -->
        <link rel="stylesheet" href="/style/css/helper.css">
        <!-- Main Style CSS -->
        <link rel="stylesheet" href="/style/style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="/style/css/responsive.css">
        <!-- Modernizr js -->
        <script src="/style/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
        <!-- Begin Body Wrapper -->
        <div class="body-wrapper">
            <!-- Begin Header Area -->
            <header>
                <!-- Begin Header Top Area -->
                <div class="header-top">
                    <div class="container">
                        <div class="row">
                            <!-- Begin Header Top Left Area -->
                            <div class="col-lg-3 col-md-4">
                                <div class="header-top-left">
                                    <ul class="phone-wrap">
                                        <li><span>Telephone Enquiry:</span><a href="#">(+123) 123 321 345</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Header Top Left Area End Here -->
                            <!-- Begin Header Top Right Area -->
                            <div class="col-lg-9 col-md-8">
                                <div class="header-top-right">
                                    <ul class="ht-menu">
                                        <!-- Begin Setting Area -->
                                        <li>
                                            <div class="ht-setting-trigger"><span>Setting</span></div>
                                           
                                            <div class="setting ht-setting">
                                                <ul class="ht-setting-list">
                                                @if (Route::has('login'))
                           
                                @auth
                                  
                                    <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                @else
                                  
                                    <li><a href="{{ route('login') }}">Sign In</a></li>

                                    @if (Route::has('register'))
                                     
                                        <li><a href="{{ route('register') }}">Register</a></li>
                                    @endif
                                @endauth
                      
                        @endif

                                                    
                                                    <li><a href="">Checkout</a></li>
                                                   
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- Setting Area End Here -->
                                        <!-- Begin Currency Area -->
                                        <li>
                                            <span class="currency-selector-wrapper">Currency :</span>
                                            <div class="ht-currency-trigger"><span>USD $</span></div>
                                            <div class="currency ht-currency">
                                                <ul class="ht-setting-list">
                                                    <li><a href="#">EUR €</a></li>
                                                    <li class="active"><a href="#">USD $</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- Currency Area End Here -->
                                        <!-- Begin Language Area -->
                                        <li>
                                            <span class="language-selector-wrapper">Language :</span>
                                            <div class="ht-language-trigger"><span>English</span></div>
                                            <div class="language ht-language">
                                                <ul class="ht-setting-list">
                                                    <li class="active"><a href="#"><img src="/style/images/menu/flag-icon/1.jpg" alt="">English</a></li>
                                                    <li><a href="#"><img src="/style/images/menu/flag-icon/2.jpg" alt="">Français</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- Language Area End Here -->
                                    </ul>
                                </div>
                            </div>
                            <!-- Header Top Right Area End Here -->
                        </div>
                    </div>
                </div>
                <!-- Header Top Area End Here -->
                <!-- Begin Header Middle Area -->
                <div class="header-middle pl-sm-0 pr-sm-0 pl-xs-0 pr-xs-0">
                    <div class="container">
                        <div class="row">
                            <!-- Begin Header Logo Area -->
                            <div class="col-lg-3">
                                <div class="logo pb-sm-30 pb-xs-30">
                                    <a href="index.html">
                                        <img src="/style/images/menu/logo/logo.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- Header Logo Area End Here -->
                            <!-- Begin Header Middle Right Area -->
                            <div class="col-lg-9 pl-0 ml-sm-15 ml-xs-15">
                                <!-- Begin Header Middle Searchbox Area -->
                                <form action="#" class="hm-searchbox">
                                    <select class="nice-select select-search-category">
                                        <option value="0">All</option>                         
                                        <option value="10">Laptops</option>                     
                                        <option value="17">- -  Prime Video</option>                    
                                        <option value="20">- - - -  All Videos</option>                     
                                        <option value="21">- - - -  Blouses</option>                        
                                        <option value="22">- - - -  Evening Dresses</option>                
                                        <option value="23">- - - -  Summer Dresses</option>                     
                                        <option value="24">- - - -  T-shirts</option>                       
                                        <option value="25">- - - -  Rent or Buy</option>                        
                                        <option value="26">- - - -  Your Watchlist</option>                     
                                        <option value="27">- - - -  Watch Anywhere</option>                     
                                        <option value="28">- - - -  Getting Started</option>         
                                        <option value="18">- - - -  Computers</option>                      
                                        <option value="29">- - - -  More to Explore</option>         
                                        <option value="30">- - - -  TV &amp; Video</option>                     
                                        <option value="31">- - - -  Audio &amp; Theater</option>               
                                        <option value="32">- - - -  Camera, Photo </option>
                                        <option value="33">- - - -  Cell Phones</option>                        
                                        <option value="34">- - - -  Headphones</option>                     
                                        <option value="35">- - - -  Video Games</option>                        
                                        <option value="36">- - - -  Wireless Speakers</option>            
                                        <option value="19">- - - -  Electronics</option>                        
                                        <option value="37">- - - -  Amazon Home</option>                        
                                        <option value="38">- - - -  Kitchen &amp; Dining</option>           
                                        <option value="39">- - - -  Furniture</option>                      
                                        <option value="40">- - - -  Bed &amp; Bath</option>                     
                                        <option value="41">- - - -  Appliances</option>                 
                                        <option value="11">TV &amp; Audio</option>                  
                                        <option value="42">- -  Chamcham</option>                        
                                        <option value="45">- - - -  Office</option>                     
                                        <option value="47">- - - -  Gaming</option>                 
                                        <option value="48">- - - -  Chromebook</option>                     
                                        <option value="49">- - - -  Refurbished</option>                    
                                        <option value="50">- - - -  Touchscreen</option>                        
                                        <option value="51">- - - -  Ultrabooks</option>                     
                                        <option value="52">- - - -  Blouses</option>                        
                                        <option value="43">- -  Meito</option>                        
                                        <option value="53">- - - -  Hard Drives</option>                        
                                        <option value="54">- - - -  Graphic Cards</option>                      
                                        <option value="55">- - - -  Processors (CPU)</option>  
                                        <option value="56">- - - -  Memory</option>                     
                                        <option value="57">- - - -  Motherboards</option>                       
                                        <option value="58">- - - -  Fans &amp; Cooling</option> 
                                        <option value="59">- - - -  CD/DVD Drives</option>                      
                                        <option value="44">- -  Sony Bravia</option>                        
                                        <option value="60">- - - -  Sound Cards</option>                        
                                        <option value="61">- - - -  Cases &amp; Towers</option>   
                                        <option value="62">- - - -  Casual Dresses</option>                     
                                        <option value="63">- - - -  Evening Dresses</option>       
                                        <option value="64">- - - -  T-shirts</option>                       
                                        <option value="65">- - - -  Tops</option>                                 
                                        <option value="12">Smartphone</option>                  
                                        <option value="66">- -  Camera Accessories</option>                     
                                        <option value="68">- - - -  Octa Core</option>                      
                                        <option value="69">- - - -  Quad Core</option>                  
                                        <option value="70">- - - -  Dual Core</option>                      
                                        <option value="71">- - - -  7.0 Screen</option>                     
                                        <option value="72">- - - -  9.0 Screen</option>                     
                                        <option value="73">- - - -  Bags &amp; Cases</option>                   
                                        <option value="67">- -  XailStation</option>                     
                                        <option value="74">- - - -  Batteries</option>                      
                                        <option value="75">- - - -  Microphones</option>                        
                                        <option value="76">- - - -  Stabilizers</option>                        
                                        <option value="77">- - - -  Video Tapes</option>                        
                                        <option value="78">- - - -  Memory Card Readers</option> 
                                        <option value="79">- - - -  Tripods</option>           
                                        <option value="13">Cameras</option>                          
                                        <option value="14">headphone</option>                                
                                        <option value="15">Smartwatch</option>                           
                                        <option value="16">Accessories</option>
                                    </select>
                                    <input type="text" placeholder="Enter your search key ...">
                                    <button class="li-btn" type="submit"><i class="fa fa-search"></i></button>
                                </form>
                                <!-- Header Middle Searchbox Area End Here -->
                                <!-- Begin Header Middle Right Area -->
                               <!-- Header Middle Searchbox Area End Here -->
                                <!-- Begin Header Middle Right Area -->
                                <div class="header-middle-right">
                                    <ul class="hm-menu">

                                    @if (auth()->check())
                                    @php
                                    $id = auth()->user()->id;
                                    $checkUser = DB::table('verifedaccounts')->where('usersid', $id)->first();
                                    @endphp
                                    @if ($checkUser)
                                   
                                    @else
                                   
                                        <li class="hm-minicart">
                                             <a href="{{ route('upgrade') }}">
                                                <div class="hm-minicart-trigger">
                                                <span class="item-icon"></span>
                                                <span class="item-text">Get store Today
                                                    </span>
                                                    </div>
                                                    <span>
                                                    </span> 
                                            </a>
                                        </li>
                                     
                                    @endif
                                @else
                                @endif
                                
                                     
                                    
                                    </ul>
                                </div>
                                <!-- Header Middle Right Area End Here -->
                            </div>
                            <!-- Header Middle Right Area End Here -->
                        </div>
                    </div>
                </div>
                <!-- Header Middle Area End Here -->
                <!-- Begin Header Bottom Area -->
                        <!-- Header Mini Cart Area End Here -->
                                    </ul>
                                </div>
                                <!-- Header Middle Right Area End Here -->
                            </div>
                            <!-- Header Middle Right Area End Here -->
                        </div>
                    </div>
                </div>
                <!-- Header Middle Area End Here -->
                <!-- Begin Header Bottom Area -->
                <div class="header-bottom header-sticky d-none d-lg-block">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Begin Header Bottom Menu Area -->
                                <div class="hb-menu hb-menu-2 d-xl-block">
                                    <nav>
                                        <ul>
                                            
                                            <li class="dropdown-holder"><a href="index.html">Home</a>
                                                <ul class="hb-dropdown">
                                                    <li><a href="index.html">Home One</a></li>
                                                    <li class="active"><a href="index-2.html">Home Two</a></li>
                                                    <li><a href="index-3.html">Home Three</a></li>
                                                    <li><a href="index-4.html">Home Four</a></li>
                                                </ul>
                                            </li>
                                       

                                                <li><a href="about-us.html">About Us</a></li>
                                              

                                    @if (auth()->check())
                                    @php
                                    $id = auth()->user()->id;
                                    $checkUser = DB::table('verifedaccounts')->where('usersid', $id)->first();
                                    @endphp
                                    @if ($checkUser)
                                       
                                        <li><a href="{{ route('post') }}">Post</a></li>
                                        <li><a href="{{ route('myproducts') }}">My products</a></li>
                                        <li><a href="{{route('orders')}}">Orders</a></li>
                                        <li><a href="{{ route('viewBuyersOrders') }}">Orders</a></li>
                                        <li><a href="{{ route('viewBuyersOrders2') }}">Orders</a></li>
                                        <li>
                                            <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <li><button class="btn btn-primary btn-lg btn-block" type="submit">Log out</a></li>
                                            </form>
                                        </li>
                                     
                                    @else
                                    <li><a href="{{ route('upgrade') }}">Get store Today</a></li>
                                    <li><a href="{{route('orders')}}">Orders</a></li>
                                        <li><form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <li><button class="btn btn-primary btn-lg btn-block" type="submit">Log out</a></li>
                                        </form></li>
                                    @endif
                                @else
                                @endif
                                        </ul>
                                    </nav>
                                </div>
                                <!-- Header Bottom Menu Area End Here -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Header Bottom Area End Here -->
                <!-- Begin Mobile Menu Area -->
                <div class="mobile-menu-area d-lg-none d-xl-none col-12">
                    <div class="container"> 
                        <div class="row">
                            <div class="mobile-menu">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu Area End Here -->
            </header>
            <!-- Header Area End Here -->
            <!-- Begin Slider With Category Menu Area -->
            <div class="slider-with-banner">
                <div class="container">
                    <div class="row">
                        <!-- Begin Category Menu Area -->
                        <div class="col-lg-3">
                            <!--Category Menu Start-->
                            <div class="category-menu">
                                <div class="category-heading">
                                    <h2 class="categories-toggle"><span>categories</span></h2>
                                </div>
                                <div id="cate-toggle" class="category-menu-list">
                                    <ul>
                                       
                                <li><a href="{{ route('category.products', ['category' => 'Shoes & Bags']) }}">Shoes & Bags</a></li>
                                <li><a href="{{ route('category.products', ['category' => 'Books']) }}">Books</a></li>
                                <li><a href="{{ route('category.products', ['category' => 'Jewelry & Watch']) }}"><i class="surfsidemedia-font-dress"></i>Jewelry & Watch</a></li>
                                <li><a href="{{ route('category.products', ['category' => 'Accessories']) }}"><i class="surfsidemedia-font-dress"></i>Accessories</a></li>
                                <li><a href="{{ route('category.products', ['category' => 'Clothing & Apparel']) }}"><i class="surfsidemedia-font-dress"></i>Clothing & Apparel</a></li>
                                <li><a href="{{ route('category.products', ['category' => 'Footwear & Shoes']) }}"><i class="surfsidemedia-font-tshirt"></i>Footwear & Shoes</a></li>
                                <li><a href="{{ route('category.products', ['category' => 'Electronics & Gadgets']) }}"><i class="surfsidemedia-font-smartphone"></i> Electronics & Gadgets</a></li>
                                <li><a href="{{ route('category.products', ['category' => 'Games & Toys']) }}"><i class="surfsidemedia-font-desktop"></i>Games & Toys</a></li>
                                <li><a href="{{ route('category.products', ['category' => 'Veterinary & Pet Items']) }}"><i class="surfsidemedia-font-cpu"></i>Veterinary & Pet Items</a></li>
                                <li><a href="{{ route('category.products', ['category' => 'Pets']) }}"><i class="surfsidemedia-font-home"></i>Pets</a></li>
                                <li><a href="{{ route('category.products', ['category' => 'Stationery']) }}"><i class="surfsidemedia-font-high-heels"></i>Stationery</a></li>
                                <li><a href="{{ route('category.products', ['category' => 'Mother & Kids']) }}"><i class="surfsidemedia-font-teddy-bear"></i>Mother & Kids</a></li>
                                <li><a href="{{ route('category.products', ['category' => 'Furniture']) }}"><i class="surfsidemedia-font-kite"></i>Furniture</a></li>
                                <li><a href="{{ route('category.products', ['category' => 'Sports Products']) }}"><i class="surfsidemedia-font-kite"></i>Sports Products</a></li>
                                       
                                    </ul>
                                </div>
                            </div>
                            <!--Category Menu End-->
                        </div>
                        <!-- Category Menu Area End Here -->
                        <!-- Begin Slider Area -->
                        <div class="col-lg-9">
                            <div class="slider-area pt-sm-30 pt-xs-30">
                                <div class="slider-active owl-carousel">
                                    <!-- Begin Single Slide Area -->
                                    <div class="single-slide align-center-left animation-style-02 bg-4">
                                        <div class="slider-progress"></div>
                                        <div class="slider-content">
                                            <h5>Sale Offer <span>-20% Off</span> This Week</h5>
                                            <h2>Chamcham Galaxy S9 | S9+</h2>
                                            <h3>Starting at <span>$589.00</span></h3>
                                            <div class="default-btn slide-btn">
                                                <a class="links" href="shop-left-sidebar.html">Shopping Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Slide Area End Here -->
                                    <!-- Begin Single Slide Area -->
                                    <div class="single-slide align-center-left animation-style-01 bg-5">
                                        <div class="slider-progress"></div>
                                        <div class="slider-content">
                                            <h5>Sale Offer <span>Black Friday</span> This Week</h5>
                                            <h2>Work Desk Surface Studio 2018</h2>
                                            <h3>Starting at <span>$1599.00</span></h3>
                                            <div class="default-btn slide-btn">
                                                <a class="links" href="shop-left-sidebar.html">Shopping Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Slide Area End Here -->
                                    <!-- Begin Single Slide Area -->
                                    <div class="single-slide align-center-left animation-style-02 bg-6">
                                        <div class="slider-progress"></div>
                                        <div class="slider-content">
                                            <h5>Sale Offer <span>-10% Off</span> This Week</h5>
                                            <h2>Phantom 4 Pro+ Obsidian</h2>
                                            <h3>Starting at <span>$809.00</span></h3>
                                            <div class="default-btn slide-btn">
                                                <a class="links" href="shop-left-sidebar.html">Shopping Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Slide Area End Here -->
                                </div>
                            </div>
                        </div>
                        <!-- Slider Area End Here -->
                    </div>
                </div>
            </div>
            <!-- Slider With Category Menu Area End Here -->
            <!-- Begin Li's Static Banner Area -->
            <div class="li-static-banner pt-20 pt-sm-30 pt-xs-30">
                <div class="container">
                    <div class="row">
                        <!-- Begin Single Banner Area -->
                        <div class="col-lg-4 col-md-4">
                            <div class="single-banner pb-xs-30">
                                <a href="#">
                                    <img src="/style/images/banner/1_3.jpg" alt="Li's Static Banner">
                                </a>
                            </div>
                        </div>
                        <!-- Single Banner Area End Here -->
                        <!-- Begin Single Banner Area -->
                        <div class="col-lg-4 col-md-4">
                            <div class="single-banner pb-xs-30">
                                <a href="#">
                                    <img src="/style/images/banner/1_4.jpg" alt="Li's Static Banner">
                                </a>
                            </div>
                        </div>
                        <!-- Single Banner Area End Here -->
                        <!-- Begin Single Banner Area -->
                        <div class="col-lg-4 col-md-4">
                            <div class="single-banner">
                                <a href="#">
                                    <img src="/style/images/banner/1_5.jpg" alt="Li's Static Banner">
                                </a>
                            </div>
                        </div>
                        <!-- Single Banner Area End Here -->
                    </div>
                </div>
            </div>
            <!-- Li's Static Banner Area End Here -->
            <!-- Begin Li's Special Product Area -->
          
            <main>
                {{ $slot }}
            </main>

              <!-- Footer Static Top Area End Here -->
                <!-- Begin Footer Static Middle Area -->
                <div class="footer-static-middle">
                    <div class="container">
                        <div class="footer-logo-wrap pt-50 pb-35">
                            <div class="row">
                                <!-- Begin Footer Logo Area -->
                                <div class="col-lg-4 col-md-6">
                                    <div class="footer-logo">
                                        <img src="/style/images/menu/logo/logo.jpg" alt="Footer Logo">
                                        <p class="info">
                                            We are a team of designers and developers that create high quality HTML Template & Woocommerce, Shopify Theme.
                                        </p>
                                    </div>
                                    <ul class="des">
                                        <li>
                                            <span>Address: </span>
                                            6688Princess Road, London, Greater London BAS 23JK, UK
                                        </li>
                                        <li>
                                            <span>Phone: </span>
                                            <a href="#">(+123) 123 321 345</a>
                                        </li>
                                        <li>
                                            <span>Email: </span>
                                            <a href="mailto://info@yourdomain.com">info@yourdomain.com</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Footer Logo Area End Here -->
                                <!-- Begin Footer Block Area -->
                                <div class="col-lg-2 col-md-3 col-sm-6">
                                    <div class="footer-block">
                                        <h3 class="footer-block-title">Product</h3>
                                        <ul>
                                            <li><a href="#">Prices drop</a></li>
                                            <li><a href="#">New products</a></li>
                                            <li><a href="#">Best sales</a></li>
                                            <li><a href="{{ route('upgrade') }}">Be More</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Footer Block Area End Here -->
                                <!-- Begin Footer Block Area -->
                                <div class="col-lg-2 col-md-3 col-sm-6">
                                    <div class="footer-block">
                                        <h3 class="footer-block-title">Our company</h3>
                                        <ul>
                                            <li><a href="#">Delivery</a></li>
                                            <li><a href="#">Legal Notice</a></li>
                                            <li><a href="#">About us</a></li>
                                            <li><a href="{{ route('upgrade') }}">Be More</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Footer Block Area End Here -->
                                <!-- Begin Footer Block Area -->
                                <div class="col-lg-4">
                                    <div class="footer-block">
                                        <h3 class="footer-block-title">Follow Us</h3>
                                        <ul class="social-link">
                                            <li class="twitter">
                                                <a href="https://twitter.com/" data-toggle="tooltip" target="_blank" title="Twitter">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="rss">
                                                <a href="https://rss.com/" data-toggle="tooltip" target="_blank" title="RSS">
                                                    <i class="fa fa-rss"></i>
                                                </a>
                                            </li>
                                            <li class="google-plus">
                                                <a href="https://www.plus.google.com/discover" data-toggle="tooltip" target="_blank" title="Google +">
                                                    <i class="fa fa-google-plus"></i>
                                                </a>
                                            </li>
                                            <li class="facebook">
                                                <a href="https://www.facebook.com/" data-toggle="tooltip" target="_blank" title="Facebook">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="youtube">
                                                <a href="https://www.youtube.com/" data-toggle="tooltip" target="_blank" title="Youtube">
                                                    <i class="fa fa-youtube"></i>
                                                </a>
                                            </li>
                                            <li class="instagram">
                                                <a href="https://www.instagram.com/" data-toggle="tooltip" target="_blank" title="Instagram">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Begin Footer Newsletter Area -->
                                    <div class="footer-newsletter">
                                        <h4>Sign up to newsletter</h4>
                                        <form action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="footer-subscribe-form validate" target="_blank" novalidate>
                                           <div id="mc_embed_signup_scroll">
                                              <div id="mc-form" class="mc-form subscribe-form form-group" >
                                                <input id="mc-email" type="email" autocomplete="off" placeholder="Enter your email" />
                                                <button  class="btn" id="mc-submit">Subscribe</button>
                                              </div>
                                           </div>
                                        </form>
                                    </div>
                                    <!-- Footer Newsletter Area End Here -->
                                </div>
                                <!-- Footer Block Area End Here -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Static Middle Area End Here -->
                <!-- Begin Footer Static Bottom Area -->
                <div class="footer-static-bottom pt-55 pb-55">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Begin Footer Links Area -->
                                <div class="footer-links">
                                    <ul>
                                        <li><a href="#">Online Shopping</a></li>
                                        <li><a href="#">Promotions</a></li>
                                        <li><a href="#">My Orders</a></li>
                                        <li><a href="#">Help</a></li>
                                        <li><a href="#">Customer Service</a></li>
                                        <li><a href="#">Support</a></li>
                                        <li><a href="#">Most Populars</a></li>
                                        <li><a href="#">New Arrivals</a></li>
                                        <li><a href="#">Special Products</a></li>
                                        <li><a href="#">Manufacturers</a></li>
                                        <li><a href="#">Our Stores</a></li>
                                        <li><a href="#">Shipping</a></li>
                                        <li><a href="#">Payments</a></li>
                                        <li><a href="#">Warantee</a></li>
                                        <li><a href="#">Refunds</a></li>
                                        <li><a href="#">Checkout</a></li>
                                        <li><a href="#">Discount</a></li>
                                        <li><a href="#">Refunds</a></li>
                                        <li><a href="#">Policy Shipping</a></li>
                                    </ul>
                                </div>
                                <!-- Footer Links Area End Here -->
                                <!-- Begin Footer Payment Area -->
                                <div class="copyright text-center">
                                    <a href="#">
                                        <img src="/style/images/payment/1.png" alt="">
                                    </a>
                                </div>
                                <!-- Footer Payment Area End Here -->
                                <!-- Begin Copyright Area -->
                                <div class="copyright text-center pt-25">
                                    <span><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></span>
                                </div>
                                <!-- Copyright Area End Here -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Static Bottom Area End Here -->
            </div>
            <!-- Footer Area End Here -->
            <!-- Begin Quick View | Modal Area -->
            <div class="modal fade modal-wrapper" id="exampleModalCenter" >
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <div class="modal-inner-area row">
                                <div class="col-lg-5 col-md-6 col-sm-6">
                                   <!-- Product Details Left -->
                                    <div class="product-details-left">
                                        <div class="product-details-images slider-navigation-1">
                                            <div class="lg-image">
                                                <img src="/style/images/product/large-size/1.jpg" alt="product image">
                                            </div>
                                            <div class="lg-image">
                                                <img src="/style/images/product/large-size/2.jpg" alt="product image">
                                            </div>
                                            <div class="lg-image">
                                                <img src="/style/images/product/large-size/3.jpg" alt="product image">
                                            </div>
                                            <div class="lg-image">
                                                <img src="/style/images/product/large-size/4.jpg" alt="product image">
                                            </div>
                                            <div class="lg-image">
                                                <img src="/style/images/product/large-size/5.jpg" alt="product image">
                                            </div>
                                            <div class="lg-image">
                                                <img src="/style/images/product/large-size/6.jpg" alt="product image">
                                            </div>
                                        </div>
                                        <div class="product-details-thumbs slider-thumbs-1">                                        
                                            <div class="sm-image"><img src="/style/images/product/small-size/1.jpg" alt="product image thumb"></div>
                                            <div class="sm-image"><img src="/style/images/product/small-size/2.jpg" alt="product image thumb"></div>
                                            <div class="sm-image"><img src="/style/images/product/small-size/3.jpg" alt="product image thumb"></div>
                                            <div class="sm-image"><img src="/style/images/product/small-size/4.jpg" alt="product image thumb"></div>
                                            <div class="sm-image"><img src="/style/images/product/small-size/5.jpg" alt="product image thumb"></div>
                                            <div class="sm-image"><img src="/style/images/product/small-size/6.jpg" alt="product image thumb"></div>
                                        </div>
                                    </div>
                                    <!--// Product Details Left -->
                                </div>

                                <div class="col-lg-7 col-md-6 col-sm-6">
                                    <div class="product-details-view-content pt-60">
                                        <div class="product-info">
                                            <h2>Today is a good day Framed poster</h2>
                                            <span class="product-details-ref">Reference: demo_15</span>
                                            <div class="rating-box pt-20">
                                                <ul class="rating rating-with-review-item">
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                    <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                    <li class="review-item"><a href="#">Read Review</a></li>
                                                    <li class="review-item"><a href="#">Write Review</a></li>
                                                </ul>
                                            </div>
                                            <div class="price-box pt-20">
                                                <span class="new-price new-price-2">$57.98</span>
                                            </div>
                                            <div class="product-desc">
                                                <p>
                                                    <span>100% cotton double printed dress. Black and white striped top and orange high waisted skater skirt bottom. Lorem ipsum dolor sit amet, consectetur adipisicing elit. quibusdam corporis, earum facilis et nostrum dolorum accusamus similique eveniet quia pariatur.
                                                    </span>
                                                </p>
                                            </div>
                                            <div class="product-variants">
                                                <div class="produt-variants-size">
                                                    <label>Dimension</label>
                                                    <select class="nice-select">
                                                        <option value="1" title="S" selected="selected">40x60cm</option>
                                                        <option value="2" title="M">60x90cm</option>
                                                        <option value="3" title="L">80x120cm</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="single-add-to-cart">
                                                <form action="#" class="cart-quantity">
                                                    <div class="quantity">
                                                        <label>Quantity</label>
                                                        <div class="cart-plus-minus">
                                                            <input class="cart-plus-minus-box" value="1" type="text">
                                                            <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                            <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                        </div>
                                                    </div>
                                                    <button class="add-to-cart" type="submit">Add to cart</button>
                                                </form>
                                            </div>
                                            <div class="product-additional-info pt-25">
                                                <a class="wishlist-btn" href="wishlist.html"><i class="fa fa-heart-o"></i>Add to wishlist</a>
                                                <div class="product-social-sharing pt-25">
                                                    <ul>
                                                        <li class="facebook"><a href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
                                                        <li class="twitter"><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
                                                        <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i>Google +</a></li>
                                                        <li class="instagram"><a href="#"><i class="fa fa-instagram"></i>Instagram</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
            <!-- Quick View | Modal Area End Here -->
        </div>
        <!-- Body Wrapper End Here -->
        <!-- jQuery-V1.12.4 -->
        <script src="/style/js/vendor/jquery-1.12.4.min.js"></script>
        <!-- Popper js -->
        <script src="/style/js/vendor/popper.min.js"></script>
        <!-- Bootstrap V4.1.3 Fremwork js -->
        <script src="/style/js/bootstrap.min.js"></script>
        <!-- Ajax Mail js -->
        <script src="/style/js/ajax-mail.js"></script>
        <!-- Meanmenu js -->
        <script src="/style/js/jquery.meanmenu.min.js"></script>
        <!-- Wow.min js -->
        <script src="/style/js/wow.min.js"></script>
        <!-- Slick Carousel js -->
        <script src="/style/js/slick.min.js"></script>
        <!-- Owl Carousel-2 js -->
        <script src="/style/js/owl.carousel.min.js"></script>
        <!-- Magnific popup js -->
        <script src="/style/js/jquery.magnific-popup.min.js"></script>
        <!-- Isotope js -->
        <script src="/style/js/isotope.pkgd.min.js"></script>
        <!-- Imagesloaded js -->
        <script src="/style/js/imagesloaded.pkgd.min.js"></script>
        <!-- Mixitup js -->
        <script src="/style/js/jquery.mixitup.min.js"></script>
        <!-- Countdown -->
        <script src="/style/js/jquery.countdown.min.js"></script>
        <!-- Counterup -->
        <script src="/style/js/jquery.counterup.min.js"></script>
        <!-- Waypoints -->
        <script src="/style/js/waypoints.min.js"></script>
        <!-- Barrating -->
        <script src="/style/js/jquery.barrating.min.js"></script>
        <!-- Jquery-ui -->
        <script src="/style/js/jquery-ui.min.js"></script>
        <!-- Venobox -->
        <script src="/style/js/venobox.min.js"></script>
        <!-- Nice Select js -->
        <script src="/style/js/jquery.nice-select.min.js"></script>
        <!-- ScrollUp js -->
        <script src="/style/js/scrollUp.min.js"></script>
        <!-- Main/Activator js -->
        <script src="/style/js/main.js"></script>
    </body>

<!-- index-231:38-->
</html>
