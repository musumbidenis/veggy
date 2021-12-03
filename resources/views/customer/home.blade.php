<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Veggy Appetites</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/customer/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/customer/images/veggy.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/customer/images/veggy.png "/>
    <link rel="manifest" href="assets/customer/images/favicons/site.webmanifest" />
    <meta name="description" content="Vegetables and Fruits Ordering System" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Homemade+Apple&family=Abril+Fatface&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />


    <link rel="stylesheet" href="assets/customer/vendors/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/customer/vendors/bootstrap-select/bootstrap-select.min.css" />
    <link rel="stylesheet" href="assets/customer/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="assets/customer/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="assets/customer/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="assets/customer/vendors/custom-icon/custom-icons.css" />
    <link rel="stylesheet" href="assets/customer/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="assets/customer/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="assets/customer/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="assets/customer/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="assets/customer/vendors/swiper/swiper.min.css" />
    <link rel="stylesheet" href="assets/customer/vendors/tiny-slider/tiny-slider.min.css" />

    <!-- template styles -->
    <link rel="stylesheet" href="assets/customer/css/style.css" />
</head>

<body>
    <div class="preloader">
        <img class="preloader__image" width="90" src="assets/customer/images/veggy.png" alt="" />
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">
        <header class="main-header">
            <div class="topbar">
                <div class="container">
                    <div class="main-logo">
                        <a href="index.html" class="logo">
                            <img src="assets/customer/images/veggy.png" width="105" alt="">
                        </a>
                        <div class="mobile-nav__buttons">
                            <a href="#" class="search-toggler"><i class="custom-icon-magnifying-glass"></i></a>
                            <a href="#" class="mini-cart__toggler"><i class="custom-icon-shopping-cart"></i></a>
                        </div><!-- /.mobile__buttons -->

                        <span class="fa fa-bars mobile-nav__toggler"></span>
                    </div><!-- /.main-logo -->

                    <div class="topbar__left">
                        <div class="topbar__social">
                            <a href="" class="fab fa-facebook-square"></a>
                            <a href="" class="fab fa-instagram"></a>
                        </div><!-- /.topbar__social -->
                        <div class="topbar__info">
                            <i class="custom-icon-email"></i>
                            <p>Email <a href="mailto:info@organik.com">info@veggyappetites.com</a></p>
                        </div><!-- /.topbar__info -->
                    </div><!-- /.topbar__left -->
                    <div class="topbar__right">
                        <div class="topbar__info">
                            <i class="custom-icon-calling"></i>
                            <p>Phone <a href="tel:+92-666-888-0000">+254 703 461 808</a></p>
                        </div><!-- /.topbar__info -->
                        <div class="topbar__buttons">
                            <a href="" class="search-toggler"><i class="custom-icon-magnifying-glass"></i></a>
                            <a href="" class="mini-cart__toggler"><i class="custom-icon-shopping-cart"></i></a>
                        </div><!-- /.topbar__buttons -->
                    </div><!-- /.topbar__left -->

                </div><!-- /.container -->
            </div><!-- /.topbar -->
            <nav class="main-menu">
                <div class="container">
                    <div class="main-menu__login">
                        <a href="/account"><i class="custom-icon-user"></i>Login / Register</a>
                    </div><!-- /.main-menu__login -->
                    <ul class="main-menu__list">
                        <li class="dropdown">
                            <a href="/home">Home</a>
                        </li>
                        <li>
                            <a href="/about">About</a>
                        </li>
                        <li class="dropdown">
                            <a href="products.html">Products</a>
                            <ul>
                                <li><a href="/vegetables">Vegetables</a></li>
                                <li><a href="/fruits">Fruits</a></li>
                            </ul>
                        </li>
                        <li><a href="/contact">Contact</a></li>
                    </ul>
                </div><!-- /.container -->
            </nav>
            <!-- /.main-menu -->
        </header><!-- /.main-header -->

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->


        <section class="main-slider">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{
				"slidesPerView": 1,
				"loop": true,
				"effect": "fade",
				"autoplay": {
					"delay": 5000
				},
				"navigation": {
					"nextEl": "#main-slider__swiper-button-next",
					"prevEl": "#main-slider__swiper-button-prev"
				}
				}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="image-layer" style="background-image: url(assets/customer/images/main-slider/main-slider-1-1.jpg);">
                        </div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 text-center">
                                    <h2><span>Veggy Appetites</span> <br>
                                        Supplies</h2>
                                    <!-- /.thm-btn dynamic-radius -->
                                </div><!-- /.col-lg-7 text-right -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="image-layer" style="background-image: url(assets/customer/images/main-slider/main-slider-1-2.jpg);">
                        </div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 text-center">
                                    <h2><span>Fresh from the Farm</span> </h2>
									<a href="#products" class=" thm-btn">Order Now</a>
                                </div><!-- /.col-lg-7 text-right -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div><!-- /.swiper-slide -->
                </div><!-- /.swiper-wrapper -->

                <!-- If we need navigation buttons -->
                <div class="main-slider__nav">
                    <div class="swiper-button-prev" id="main-slider__swiper-button-next"><i class="custom-icon-left-arrow"></i>
                    </div>
                    <div class="swiper-button-next" id="main-slider__swiper-button-prev"><i class="custom-icon-right-arrow"></i></div>
                </div><!-- /.main-slider__nav -->

            </div><!-- /.swiper-container thm-swiper__slider -->
        </section><!-- /.main-slider -->

        <section class="feature-box">
            <div class="container">
                <div class="inner-container wow fadeInUp" data-wow-duration="1500ms">
                    <div class="thm-tiny__slider" id="contact-infos-box" data-tiny-options='{
						"container": "#contact-infos-box",
						"items": 1,
						"slideBy": "page",
						"gutter": 0,
						"mouseDrag": true,
						"autoplay": true,
						"nav": false,
						"controlsPosition": "bottom",
						"controlsText": ["<i class=\"fa fa-angle-left\"></i>", "<i class=\"fa fa-angle-right\"></i>"],
						"autoplayButtonOutput": false,
						"responsive": {
							"640": {
							"items": 2,
							"gutter": 30
							},
							"992": {
							"gutter": 30,
							"items": 3
							},
							"1200": {
							"disable": true
							}
						}
					}'>
                        <div>
                            <div class="feature-box__single">
                                <i class="custom-icon-global-shipping feature-box__icon"></i>
                                <div class="feature-box__content">
                                    <h3>Return Policy</h3>
                                    <p>Money back guarantee</p>
                                </div><!-- /.feature-box__content -->
                            </div><!-- /.feature-box__single -->
                        </div>
                        <div>
                            <div class="feature-box__single">
                                <i class="custom-icon-delivery-truck feature-box__icon"></i>
                                <div class="feature-box__content">
                                    <h3>Free Shipping</h3>
                                    <p>On all orders over Kshs 2500.00</p>
                                </div><!-- /.feature-box__content -->
                            </div><!-- /.feature-box__single -->
                        </div>
                        <div>
                            <div class="feature-box__single">
                                <i class="custom-icon-online-store feature-box__icon"></i>
                                <div class="feature-box__content">
                                    <h3>Location</h3>
                                    <p>Deliveries done within Nairobi</p>
                                </div><!-- /.feature-box__content -->
                            </div><!-- /.feature-box__single -->
                        </div>
                    </div>
                </div><!-- /.inner-container -->
            </div><!-- /.container -->
        </section><!-- /.feature-box -->

        <section class="new-products">
            <img src="assets/customer/images/shapes/new-product-shape-1.png" alt="" class="new-products__shape-1">
            <div class="container">
                <div class="new-products__top">
                    <div class="block-title ">
                        <div class="block-title__decor"></div><!-- /.block-title__decor -->
                        <p>Fresh from the Farm</p>
                        <h3>Our Products</h3>
                    </div><!-- /.block-title -->

                    <ul class="post-filter filters list-unstyled">
                        <li class="active filter" data-filter=".filter-item">All</li>
						<li class="filter" data-filter=".veg">Vegetables
                        </li>
                        <li class="filter" data-filter=".fruits">Fruits
                        </li>
                    </ul>
                </div><!-- /.new-products__top -->
                <div class="row filter-layout">
                    <div class="col-lg-4 col-md-6 filter-item fruits">
                        <div class="product-card__two">
                            <div class="product-card__two-image">
                                <span class="product-card__two-sale">InStock</span>
                                <img src="assets/customer/images/products/product-2-1.jpg" alt="">
                                <div class="product-card__two-image-content">
                                    <a href=""><i class="custom-icon-visibility"></i></a>
                                    <a href="cart.html"><i class="custom-icon-shopping-cart"></i></a>
                                </div><!-- /.product-card__two-image-content -->
                            </div><!-- /.product-card__two-image -->
                            <div class="product-card__two-content">
                                <h3><a href="product-details.html">Banana</a></h3>
                                <p>$1.00</p>
                            </div><!-- /.product-card__two-content -->
                        </div><!-- /.product-card__two -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4 col-md-6 filter-item fruits">
                        <div class="product-card__two">
                            <div class="product-card__two-image">

                                <img src="assets/customer/images/products/product-2-5.jpg" alt="">
                                <div class="product-card__two-image-content">
                                    <a href="#"><i class="custom-icon-visibility"></i></a>
                                    <a href="cart.html"><i class="custom-icon-shopping-cart"></i></a>
                                </div><!-- /.product-card__two-image-content -->
                            </div><!-- /.product-card__two-image -->
                            <div class="product-card__two-content">
                                <h3><a href="product-details.html">Bread</a></h3>
                                <p>$2.00</p>
                            </div><!-- /.product-card__two-content -->
                        </div><!-- /.product-card__two -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4 col-md-6 filter-item veg">
                        <div class="product-card__two">
                            <div class="product-card__two-image">
                                <span class="product-card__two-sale">sale</span>
                                <img src="assets/customer/images/products/product-2-6.jpg" alt="">
                                <div class="product-card__two-image-content">
                                    <a href="#"><i class="custom-icon-visibility"></i></a>
                                    <a href="cart.html"><i class="custom-icon-shopping-cart"></i></a>
                                </div><!-- /.product-card__two-image-content -->
                            </div><!-- /.product-card__two-image -->
                            <div class="product-card__two-content">
                                <h3><a href="product-details.html">Apples</a></h3>
                                <p>$2.00</p>
                            </div><!-- /.product-card__two-content -->
                        </div><!-- /.product-card__two -->
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.new-products -->

        <footer class="site-footer background-black-2">
            <img src="assets/customer/images/shapes/footer-bg-1-1.png" alt="" class="site-footer__shape-1">
            <img src="assets/customer/images/shapes/footer-bg-1-2.png" alt="" class="site-footer__shape-2">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-widget footer-widget__about-widget">
                            <a href="/home" class="footer-widget__logo">
                                <img src="assets/customer/images/veggy.png" alt="Veggy Appetites Logo">
                            </a>
                            <p class="thm-text-dark">Veggy Appetites is a supplier of naturally grown 
								vegetables such as lettuces, rucola etc.
							</p>
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-sm-12 col-md-6 -->
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-2">
                        <div class="footer-widget footer-widget__contact-widget">
                            <h3 class="footer-widget__title">Contact</h3><!-- /.footer-widget__title -->
                            <ul class="list-unstyled footer-widget__contact">
                                <li>
                                    <i class="fa fa-phone-square"></i>
                                    <a href="tel:666-888-0000">+254 703 461 808</a>
                                </li>
                                <li>
                                    <i class="fa fa-envelope"></i>
                                    <a href="mailto:info@company.com">info@veggyappetites.com</a>
                                </li>
                                <li>
                                    <i class="fa fa-map-marker-alt"></i>
                                    <a href="/contact" >Nairobi, Kenya</a>
                                </li>
                            </ul><!-- /.list-unstyled footer-widget__contact -->
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-sm-12 col-md-6 col-lg-2 -->
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-2">
                        <div class="footer-widget footer-widget__links-widget">
                            <h3 class="footer-widget__title">Links</h3><!-- /.footer-widget__title -->
                            <ul class="list-unstyled footer-widget__links">
                                <li>
                                    <a href="/home">Home</a>
                                </li>
                                <li>
                                    <a href="/about">About Us</a>
                                </li>
                                <li>
                                    <a href="/products">Products</a>
                                </li>
                                <li>
                                    <a href="/contact">Contact</a>
                                </li>
                            </ul><!-- /.list-unstyled footer-widget__contact -->
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-sm-12 col-md-6 col-lg-2 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
            <div class="bottom-footer">
                <div class="container">
                    <hr>
                    <div class="inner-container text-center">
                        <div class="bottom-footer__social">
                            <a href="https://www.facebook.com/veggy.appetite" class="fab fa-facebook-square"></a>
                            <a href="https://www.instagram.com/veggyappetites/" class="fab fa-instagram"></a>
                        </div><!-- /.bottom-footer__social -->
                        <p class="thm-text-dark">© Copyright <span class="dynamic-year"></span> Veggy Appetites</p>
                    </div><!-- /.inner-container -->
                </div><!-- /.container -->
            </div><!-- /.bottom-footer -->
        </footer><!-- /.site-footer -->

    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="custom-icon-close"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="assets/customer/images/logo-light.png" width="155" alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="custom-icon-email"></i>
                    <a href="mailto:needhelp@organik.com">needhelp@organik.com</a>
                </li>
                <li>
                    <i class="custom-icon-calling"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__language">
                    <img src="assets/customer/images/resources/flag-1-1.jpg" alt="">
                    <label class="sr-only" for="language-select">select language</label>
                    <!-- /#language-select.sr-only -->
                    <select class="selectpicker" id="language-select">
                        <option value="english">English</option>
                        <option value="arabic">Arabic</option>
                    </select>
                </div><!-- /.mobile-nav__language -->
                <div class="main-menu__login">
                    <a href="#"><i class="custom-icon-user"></i>Login / Register</a>
                </div><!-- /.main-menu__login -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="mini-cart">
        <div class="mini-cart__overlay mini-cart__toggler"></div>
        <div class="mini-cart__content">
            <div class="mini-cart__top">
                <h3 class="mini-cart__title">Shopping Cart</h3>
                <span class="mini-cart__close mini-cart__toggler"><i class="custom-icon-close"></i></span>
            </div><!-- /.mini-cart__top -->
            <div class="mini-cart__item">
                <img src="assets/customer/images/products/cart-1-1.jpg" alt="">
                <div class="mini-cart__item-content">
                    <div class="mini-cart__item-top">
                        <h3><a href="product-details.html">Banana</a></h3>
                        <p>$9.99</p>
                    </div><!-- /.mini-cart__item-top -->
                    <div class="quantity-box">
                        <button type="button" class="sub">-</button>
                        <input type="number" id="2" value="1" />
                        <button type="button" class="add">+</button>
                    </div>
                </div><!-- /.mini-cart__item-content -->
            </div><!-- /.mini-cart__item -->
            <div class="mini-cart__item">
                <img src="assets/customer/images/products/cart-1-2.jpg" alt="">
                <div class="mini-cart__item-content">
                    <div class="mini-cart__item-top">
                        <h3><a href="product-details.html">Tomato</a></h3>
                        <p>$9.99</p>
                    </div><!-- /.mini-cart__item-top -->
                    <div class="quantity-box">
                        <button type="button" class="sub">-</button>
                        <input type="number" id="2" value="1" />
                        <button type="button" class="add">+</button>
                    </div>
                </div><!-- /.mini-cart__item-content -->
            </div><!-- /.mini-cart__item -->
            <div class="mini-cart__item">
                <img src="assets/customer/images/products/cart-1-3.jpg" alt="">
                <div class="mini-cart__item-content">
                    <div class="mini-cart__item-top">
                        <h3><a href="product-details.html">Bread</a></h3>
                        <p>$9.99</p>
                    </div><!-- /.mini-cart__item-top -->
                    <div class="quantity-box">
                        <button type="button" class="sub">-</button>
                        <input type="number" id="2" value="1" />
                        <button type="button" class="add">+</button>
                    </div>
                </div><!-- /.mini-cart__item-content -->
            </div><!-- /.mini-cart__item -->
            <a href="checkout.html" class="thm-btn mini-cart__checkout">Proceed To Checkout</a>
        </div><!-- /.mini-cart__content -->
    </div><!-- /.cart-toggler -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="custom-icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


    <script src="assets/customer/vendors/jquery/jquery-3.5.1.min.js"></script>
    <script src="assets/customer/vendors/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="assets/customer/vendors/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="assets/customer/vendors/jarallax/jarallax.min.js"></script>
    <script src="assets/customer/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="assets/customer/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="assets/customer/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="assets/customer/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/customer/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="assets/customer/vendors/nouislider/nouislider.min.js"></script>
    <script src="assets/customer/vendors/odometer/odometer.min.js"></script>
    <script src="assets/customer/vendors/swiper/swiper.min.js"></script>
    <script src="assets/customer/vendors/tiny-slider/tiny-slider.min.js"></script>
    <script src="assets/customer/vendors/wnumb/wNumb.min.js"></script>
    <script src="assets/customer/vendors/wow/wow.js"></script>
    <script src="assets/customer/vendors/isotope/isotope.js"></script>
    <script src="assets/customer/vendors/countdown/countdown.min.js"></script>
    <!-- template js -->
    <script src="assets/customer/js/organik.js"></script>
</body>

</html>