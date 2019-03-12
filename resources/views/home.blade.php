@extends('layouts.app')

@section('content')

<head>
    <meta charset="utf-8">



    <title>
        Pizza House


    </title>

    <link rel="canonical" href="index.html">


    <link rel="shortcut icon" href="https://cdn.shopify.com/s/files/1/2321/3015/files/favicon_1ffa9212-8e19-46da-b8a0-f385e259c9a5_32x32.png?v=1504712107"
        type="image/png">




    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!--[if IE]>
			<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<![endif]-->

    <style>
        html,
			body {overflow-x: hidden;}
			.row {overflow: hidden;}

			#page_preloader__bg {background: #fff;position: fixed;top: 0;right: 0;bottom: 0;left: 0;z-index: 1000;
			-webkit-transition: opacity .1s ease-in-out .05s, z-index .1s ease-in-out .05s;
			   -moz-transition: opacity .1s ease-in-out .05s, z-index .1s ease-in-out .05s;
					transition: opacity .1s ease-in-out .05s, z-index .1s ease-in-out .05s;

			-webkit-transform: translate3d(0, 0, 0);
				-ms-transform: translate3d(0, 0, 0);
				 -o-transform: translate3d(0, 0, 0);
					transform: translate3d(0, 0, 0);
			}
			#page_preloader__bg.off {opacity: 0;z-index: -10;}


			#page_preloader__img {margin: -50px 0 0 -50px;position: absolute;top: 50%;left: 50%;z-index: 1001;
			-webkit-transition: transform .2s ease-in-out;
			   -moz-transition: transform .2s ease-in-out;
					transition: transform .2s ease-in-out;

			-webkit-transform: scale3d(1, 1, 1);
				-ms-transform: scale3d(1, 1, 1);
				 -o-transform: scale3d(1, 1, 1);
					transform: scale3d(1, 1, 1);
			}
			#page_preloader__img.off {
			-webkit-transform: scale3d(0, 0, 1);
				-ms-transform: scale3d(0, 0, 1);
				 -o-transform: scale3d(0, 0, 1);
					transform: scale3d(0, 0, 1);
			}

			.container{margin-right:auto;margin-left:auto}@media (max-width: 767px){.container{padding-left:15px;padding-right:15px}}@media (min-width: 768px){.container{width:750px}}@media (min-width: 992px){.container{width:970px}}@media (min-width: 1200px){.container{width:1170px}}.container-fluid{margin-right:auto;margin-left:auto;padding-right:15px;padding-left:15px}.row{margin-right:-15px;margin-left:-15px}.row:after{content:'';display:table;clear:both}.col-xs-1,.col-sm-1,.col-md-1,.col-lg-1,.col-xs-2,.col-sm-2,.col-md-2,.col-lg-2,.col-xs-3,.col-sm-3,.col-md-3,.col-lg-3,.col-xs-4,.col-sm-4,.col-md-4,.col-lg-4,.col-xs-5,.col-sm-5,.col-md-5,.col-lg-5,.col-xs-6,.col-sm-6,.col-md-6,.col-lg-6,.col-xs-7,.col-sm-7,.col-md-7,.col-lg-7,.col-xs-8,.col-sm-8,.col-md-8,.col-lg-8,.col-xs-9,.col-sm-9,.col-md-9,.col-lg-9,.col-xs-10,.col-sm-10,.col-md-10,.col-lg-10,.col-xs-11,.col-sm-11,.col-md-11,.col-lg-11,.col-xs-12,.col-sm-12,.col-md-12,.col-lg-12{min-height:1px;padding-right:15px;padding-left:15px;position:relative}.col-xs-1,.col-xs-2,.col-xs-3,.col-xs-4,.col-xs-5,.col-xs-6,.col-xs-7,.col-xs-8,.col-xs-9,.col-xs-10,.col-xs-11,.col-xs-12{float:left}.col-xs-12{width:100%}.col-xs-11{width:91.66666667%}.col-xs-10{width:83.33333333%}.col-xs-9{width:75%}.col-xs-8{width:66.66666667%}.col-xs-7{width:58.33333333%}.col-xs-6{width:50%}.col-xs-5{width:41.66666667%}.col-xs-4{width:33.33333333%}.col-xs-3{width:25%}.col-xs-2{width:16.66666667%}.col-xs-1{width:8.33333333%}.col-xs-pull-12{right:100%}.col-xs-pull-11{right:91.66666667%}.col-xs-pull-10{right:83.33333333%}.col-xs-pull-9{right:75%}.col-xs-pull-8{right:66.66666667%}.col-xs-pull-7{right:58.33333333%}.col-xs-pull-6{right:50%}.col-xs-pull-5{right:41.66666667%}.col-xs-pull-4{right:33.33333333%}.col-xs-pull-3{right:25%}.col-xs-pull-2{right:16.66666667%}.col-xs-pull-1{right:8.33333333%}.col-xs-pull-0{right:auto}.col-xs-push-12{left:100%}.col-xs-push-11{left:91.66666667%}.col-xs-push-10{left:83.33333333%}.col-xs-push-9{left:75%}.col-xs-push-8{left:66.66666667%}.col-xs-push-7{left:58.33333333%}.col-xs-push-6{left:50%}.col-xs-push-5{left:41.66666667%}.col-xs-push-4{left:33.33333333%}.col-xs-push-3{left:25%}.col-xs-push-2{left:16.66666667%}.col-xs-push-1{left:8.33333333%}.col-xs-push-0{left:auto}.col-xs-offset-12{margin-left:100%}.col-xs-offset-11{margin-left:91.66666667%}.col-xs-offset-10{margin-left:83.33333333%}.col-xs-offset-9{margin-left:75%}.col-xs-offset-8{margin-left:66.66666667%}.col-xs-offset-7{margin-left:58.33333333%}.col-xs-offset-6{margin-left:50%}.col-xs-offset-5{margin-left:41.66666667%}.col-xs-offset-4{margin-left:33.33333333%}.col-xs-offset-3{margin-left:25%}.col-xs-offset-2{margin-left:16.66666667%}.col-xs-offset-1{margin-left:8.33333333%}.col-xs-offset-0{margin-left:0}@media (min-width: 768px){.col-sm-1,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9,.col-sm-10,.col-sm-11,.col-sm-12{float:left}.col-sm-12{width:100%}.col-sm-11{width:91.66666667%}.col-sm-10{width:83.33333333%}.col-sm-9{width:75%}.col-sm-8{width:66.66666667%}.col-sm-7{width:58.33333333%}.col-sm-6{width:50%}.col-sm-5{width:41.66666667%}.col-sm-4{width:33.33333333%}.col-sm-3{width:25%}.col-sm-2{width:16.66666667%}.col-sm-1{width:8.33333333%}.col-sm-pull-12{right:100%}.col-sm-pull-11{right:91.66666667%}.col-sm-pull-10{right:83.33333333%}.col-sm-pull-9{right:75%}.col-sm-pull-8{right:66.66666667%}.col-sm-pull-7{right:58.33333333%}.col-sm-pull-6{right:50%}.col-sm-pull-5{right:41.66666667%}.col-sm-pull-4{right:33.33333333%}.col-sm-pull-3{right:25%}.col-sm-pull-2{right:16.66666667%}.col-sm-pull-1{right:8.33333333%}.col-sm-pull-0{right:auto}.col-sm-push-12{left:100%}.col-sm-push-11{left:91.66666667%}.col-sm-push-10{left:83.33333333%}.col-sm-push-9{left:75%}.col-sm-push-8{left:66.66666667%}.col-sm-push-7{left:58.33333333%}.col-sm-push-6{left:50%}.col-sm-push-5{left:41.66666667%}.col-sm-push-4{left:33.33333333%}.col-sm-push-3{left:25%}.col-sm-push-2{left:16.66666667%}.col-sm-push-1{left:8.33333333%}.col-sm-push-0{left:auto}.col-sm-offset-12{margin-left:100%}.col-sm-offset-11{margin-left:91.66666667%}.col-sm-offset-10{margin-left:83.33333333%}.col-sm-offset-9{margin-left:75%}.col-sm-offset-8{margin-left:66.66666667%}.col-sm-offset-7{margin-left:58.33333333%}.col-sm-offset-6{margin-left:50%}.col-sm-offset-5{margin-left:41.66666667%}.col-sm-offset-4{margin-left:33.33333333%}.col-sm-offset-3{margin-left:25%}.col-sm-offset-2{margin-left:16.66666667%}.col-sm-offset-1{margin-left:8.33333333%}.col-sm-offset-0{margin-left:0}}@media (min-width: 992px){.col-md-1,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9,.col-md-10,.col-md-11,.col-md-12{float:left}.col-md-12{width:100%}.col-md-11{width:91.66666667%}.col-md-10{width:83.33333333%}.col-md-9{width:75%}.col-md-8{width:66.66666667%}.col-md-7{width:58.33333333%}.col-md-6{width:50%}.col-md-5{width:41.66666667%}.col-md-4{width:33.33333333%}.col-md-3{width:25%}.col-md-2{width:16.66666667%}.col-md-1{width:8.33333333%}.col-md-pull-12{right:100%}.col-md-pull-11{right:91.66666667%}.col-md-pull-10{right:83.33333333%}.col-md-pull-9{right:75%}.col-md-pull-8{right:66.66666667%}.col-md-pull-7{right:58.33333333%}.col-md-pull-6{right:50%}.col-md-pull-5{right:41.66666667%}.col-md-pull-4{right:33.33333333%}.col-md-pull-3{right:25%}.col-md-pull-2{right:16.66666667%}.col-md-pull-1{right:8.33333333%}.col-md-pull-0{right:auto}.col-md-push-12{left:100%}.col-md-push-11{left:91.66666667%}.col-md-push-10{left:83.33333333%}.col-md-push-9{left:75%}.col-md-push-8{left:66.66666667%}.col-md-push-7{left:58.33333333%}.col-md-push-6{left:50%}.col-md-push-5{left:41.66666667%}.col-md-push-4{left:33.33333333%}.col-md-push-3{left:25%}.col-md-push-2{left:16.66666667%}.col-md-push-1{left:8.33333333%}.col-md-push-0{left:auto}.col-md-offset-12{margin-left:100%}.col-md-offset-11{margin-left:91.66666667%}.col-md-offset-10{margin-left:83.33333333%}.col-md-offset-9{margin-left:75%}.col-md-offset-8{margin-left:66.66666667%}.col-md-offset-7{margin-left:58.33333333%}.col-md-offset-6{margin-left:50%}.col-md-offset-5{margin-left:41.66666667%}.col-md-offset-4{margin-left:33.33333333%}.col-md-offset-3{margin-left:25%}.col-md-offset-2{margin-left:16.66666667%}.col-md-offset-1{margin-left:8.33333333%}.col-md-offset-0{margin-left:0}}@media (min-width: 1200px){.col-lg-1,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9,.col-lg-10,.col-lg-11,.col-lg-12{float:left}.col-lg-12{width:100%}.col-lg-11{width:91.66666667%}.col-lg-10{width:83.33333333%}.col-lg-9{width:75%}.col-lg-8{width:66.66666667%}.col-lg-7{width:58.33333333%}.col-lg-6{width:50%}.col-lg-5{width:41.66666667%}.col-lg-4{width:33.33333333%}.col-lg-3{width:25%}.col-lg-2{width:16.66666667%}.col-lg-1{width:8.33333333%}.col-lg-pull-12{right:100%}.col-lg-pull-11{right:91.66666667%}.col-lg-pull-10{right:83.33333333%}.col-lg-pull-9{right:75%}.col-lg-pull-8{right:66.66666667%}.col-lg-pull-7{right:58.33333333%}.col-lg-pull-6{right:50%}.col-lg-pull-5{right:41.66666667%}.col-lg-pull-4{right:33.33333333%}.col-lg-pull-3{right:25%}.col-lg-pull-2{right:16.66666667%}.col-lg-pull-1{right:8.33333333%}.col-lg-pull-0{right:auto}.col-lg-push-12{left:100%}.col-lg-push-11{left:91.66666667%}.col-lg-push-10{left:83.33333333%}.col-lg-push-9{left:75%}.col-lg-push-8{left:66.66666667%}.col-lg-push-7{left:58.33333333%}.col-lg-push-6{left:50%}.col-lg-push-5{left:41.66666667%}.col-lg-push-4{left:33.33333333%}.col-lg-push-3{left:25%}.col-lg-push-2{left:16.66666667%}.col-lg-push-1{left:8.33333333%}.col-lg-push-0{left:auto}.col-lg-offset-12{margin-left:100%}.col-lg-offset-11{margin-left:91.66666667%}.col-lg-offset-10{margin-left:83.33333333%}.col-lg-offset-9{margin-left:75%}.col-lg-offset-8{margin-left:66.66666667%}.col-lg-offset-7{margin-left:58.33333333%}.col-lg-offset-6{margin-left:50%}.col-lg-offset-5{margin-left:41.66666667%}.col-lg-offset-4{margin-left:33.33333333%}.col-lg-offset-3{margin-left:25%}.col-lg-offset-2{margin-left:16.66666667%}.col-lg-offset-1{margin-left:8.33333333%}.col-lg-offset-0{margin-left:0}}.section_map{margin:0;position:relative}.section_map .map_wrapper{overflow:hidden;position:relative;z-index:1}.section_map .map_container{position:absolute;top:0;right:-44%;bottom:0;left:0;z-index:1}.section_map .map_captions__off{right:0}.section_map .map_wrapper__small{padding:19.53% 0 0 0}.section_map .map_wrapper__medium{padding:29.29% 0 0 0}.section_map .map_wrapper__large{padding:39.06% 0 0 0}
		</style>

    <script>
        var theme = {
            moneyFormat: "$2",
        };
    </script>
</head>

<div class="page_wrapper">

    <div id="page_preloader__bg">
        <!-- <img id="page_preloader__img" src="https://cdn.shopify.com/s/files/1/2321/3015/t/2/assets/shopify_logo.gif?2215465451326053447" alt=""> -->
    </div>

    <script>
        preloaderBg = document.getElementById('page_preloader__bg');
        preloaderImg = document.getElementById('page_preloader__img');

        window.addEventListener('load', function () {
            preloaderBg.className += " off";
            preloaderImg.className += " off";
        });

        window.addEventListener('beforeunload', function () {
            preloaderBg.className -= " off";
            preloaderImg.className -= " off";
        });
    </script>



    <div id="shopify-section-header" class="shopify-section">
        <div id="pseudo_sticky_block"></div>








    </div>

    <div class="page_container">




        <div class="main_content ">
            <!-- BEGIN content_for_index -->
            <div id="shopify-section-1504691427459" class="shopify-section index-section">


                <div class="section section_homepage section_slideshow section_slideshow__large swiper-container" id="slideshow_1504691427459"
                    data-autoplay="true" data-speed="7000" data-animation="slide_right">
                    <div class="swiper-wrapper">


                        <div class="swiper-slide image_slide">

                            <div class="img_placeholder__wrap img_placeholder__large" style="background-image: url( https://cdn.shopify.com/s/files/1/2321/3015/files/03_2048x758_crop_top.jpg?v=1504251555 );"></div>


                            <div class="slide_caption">
                                <div>
                                    <h2 class="caption_title">
                                        <p>hot stuff</p>
                                    </h2>
                                    <div class="caption_text">
                                        <p>burger the&nbsp;<strong>mexican</strong></p>
                                    </div><a class="btn slider_btn" href="https://theme355-pizza.myshopify.com/collections/burgers-and-fast-food">Shop
                                        now</a>
                                </div>
                            </div>
                        </div>





                        <div id="pagination_1504691427459" class="swiper_pagination"></div>

                    </div>

                </div>



            </div>
            <div id="shopify-section-1504254151430" class="shopify-section section section_homepage section_banners">
                <div class="container">
                    <div class="row">
                        <div class="banners_big col-sm-8">
                            <div class="banners_item" style="background-image: url( https://cdn.shopify.com/s/files/1/2321/3015/files/04_770x321_crop_center.jpg?v=1504254188 );">
                                <div class="banner_caption">

                                    <h3 class="banner_title">build your special pizza</h3>



                                    <h5 class="banner_text">from $6.00</h5>



                                    <a class="btn banner_btn" href="https://theme355-pizza.myshopify.com/collections/pizza-builder">order
                                        now</a>

                                </div>
                            </div>
                        </div>

                        <div class="banners_small col-sm-4">
                            <div class="banners_item">
                                <div class="banner_caption">

                                    <h3 class="banner_title">New menu</h3>



                                    <p class="banner_text">We have something on our menu for every appetite</p>



                                    <a class="btn banner_btn btn_inverted" href="https://theme355-pizza.myshopify.com/collections/burger-builder">Shop
                                        now</a>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>


            </div>

            @foreach($allcat as $cat)

            <div id="shopify-section-1504252125678" class="shopify-section section section_homepage section_products-carousel">

                <div class="carousel_wrap container">

                    <h2 class="section_heading">{{$cat->name}}</h2>





                    <div class="products_carousel swiper-container" id="products_carousel_1504268848209" data-products="5">
                        <div class="swiper-wrapper product_listing__main">

                            <?php

                            $food="SELECT * FROM food WHERE cat_id = $cat->id";
                            $food=  DB::select( $food);
                           
                           
                    
                            ?>

                            @foreach($food as $meal)
                            <div class="swiper-slide">
                                <div class="product_item">
                                    <div class="product_img">
                                        <a class="img_change">
                                            <img class="img_1" src="https://cdn.shopify.com/s/files/1/2321/3015/collections/burger_270x295_crop_top.png?v=1504268490"
                                                alt="Burger builder">
                                        </a>
                                    </div>

                                    <div class="product_info">
                                        <p class="product_name">
                                            <a href="https://theme355-pizza.myshopify.com/collections/burger-builder">
                                                                    {{$meal->name}}
                                            </a>
                                        </p>
                                        <p class="product_price">
                                            <span class="money">${{$meal->price}}</span>
                                        </p>
                                        <div class="product_links">
                                            <a class="btn btn-cart" href="/addtocart/{{$meal->id}}">Add
                                                to cart</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            @endforeach


                        </div>
                    </div>

                    <div id="carousel_swiper__prev_1504268848209" class="swiper_btn swiper_btn__prev"></div>
                    <div id="carousel_swiper__next_1504268848209" class="swiper_btn swiper_btn__next"></div>




                </div>

            </div>
            @endforeach
            <div id="shopify-section-1504863648283" class="shopify-section section section_homepage section_countdown_banner">


                <div class="section_wrap flexible_block parallax_block">

                    <div class="img_placeholder__wrap parallax_layer" style="background-image: url( https://cdn.shopify.com/s/files/1/2321/3015/files/05_2048x758_crop_center.jpg?v=1504526640 );"></div>


                    <div class="section_txt">

                        <div class="container">

                            <a class="section_txt_link" href="https://theme355-pizza.myshopify.com/collections/sale">

                                <h4>Deal of the Day</h4>



                                <div>
                                    <p><strong>Free</strong>&nbsp;cheese sticks</p>
                                </div>

                            </a>



                            <div class="countdown_block">







                                <div class="timer_countdown_wrap" data-day="13" data-month="09" data-year="2023">
                                    <div class="timer_counter">


                                        <div class="timer_countdown">
                                            <div class="point_wrap">
                                                <input class="days" value="75" disabled>
                                            </div>

                                            <div class="point_wrap">
                                                <input class="hour" value="75" disabled>
                                            </div>

                                            <div class="point_wrap">
                                                <input class="minute" value="75" disabled>
                                            </div>

                                            <div class="point_wrap">
                                                <input class="second" value="75" disabled>
                                            </div>
                                        </div>


                                    </div>

                                </div>
                            </div>



                        </div>

                    </div>
                </div>



                <script>
                    var passwordText = {
                        daysTr: "days",
                        hoursTr: "hours",
                        minutesTr: "minutes",
                        secondsTr: "seconds"
                    };
                </script>

            </div>
            <div id="shopify-section-1504700199529" class="shopify-section section section_homepage section_newsletter">
                <div class="container">
                    <h3>STAY IN TOUCH WITH US</h3>



                    <form method="post" action="https://theme355-pizza.myshopify.com/contact#contact_form" id="newsletter_form"
                        accept-charset="UTF-8" class="contact-form"><input type="hidden" name="form_type" value="customer" /><input
                            type="hidden" name="utf8" value="✓" />
                        <p class="form_text">Sign up for our newsletter to stay up to date with the latest news,
                            special offers and other stuff.</p>
                        <p class="alert alert-success">You have successfully subscribed!</p> <input type="hidden" name="contact[tags]"
                            value="Newsletter subscriber">
                        <div class="form_wrapper"> <input type="email" name="contact[email]" class="input-group__field newsletter__input"
                                placeholder="Enter your email"> <button class="btn btn_inverted" type="submit">Subscribe</button>
                        </div>
                    </form>
                </div>



            </div><!-- END content_for_index -->
        </div>




        <div id="shopify-section-footer" class="shopify-section">
            <footer>
                <div class="footer_row__1">
                    <div class="container">

                        <div class="row">



                            <div class="col-sm-3 footer_block footer_block__2_1">

                                <div class="footer_item footer_item__links">
                                    <h3>Categories</h3>

                                    <ul>

                                        <li>
                                            <a href="https://theme355-pizza.myshopify.com/collections/traditional-pizzas">Traditional
                                                Pizzas</a>
                                        </li>

                                        <li>
                                            <a href="https://theme355-pizza.myshopify.com/collections/pizza-builder">Pizza
                                                builder</a>
                                        </li>

                                        <li>
                                            <a href="https://theme355-pizza.myshopify.com/collections/burgers-and-fast-food">Burgers
                                                and Fast food</a>
                                        </li>

                                        <li>
                                            <a href="https://theme355-pizza.myshopify.com/collections/burger-builder">Burger
                                                builder</a>
                                        </li>

                                        <li>
                                            <a href="https://theme355-pizza.myshopify.com/collections/sushi-rolls">Sushi
                                                & rolls</a>
                                        </li>

                                        <li>
                                            <a href="https://theme355-pizza.myshopify.com/collections/sushi-builder">Sushi
                                                builder</a>
                                        </li>

                                        <li>
                                            <a href="https://theme355-pizza.myshopify.com/collections/sale">Sale</a>
                                        </li>

                                    </ul>
                                </div>


                            </div>






                            <div class="col-sm-3 footer_block ">

                                <div class="footer_item footer_item__links">
                                    <h3>Information</h3>

                                    <ul>

                                        <li>
                                            <a href="https://theme355-pizza.myshopify.com/pages/about-us">About us</a>
                                        </li>

                                        <li>
                                            <a href="https://theme355-pizza.myshopify.com/pages/contact-us">Contact us</a>
                                        </li>

                                        <li>
                                            <a href="https://theme355-pizza.myshopify.com/cart">Cart</a>
                                        </li>

                                        <li>
                                            <a href="https://theme355-pizza.myshopify.com/blogs/news">Blog</a>
                                        </li>

                                        <li>
                                            <a href="https://theme355-pizza.myshopify.com/pages/privacy-policy">Privacy
                                                Policy</a>
                                        </li>

                                    </ul>
                                </div>


                            </div>






                            <div class="col-sm-3 footer_block footer_block__2_1">

                                <div class="footer_item footer_item__links">
                                    <h3>My Account</h3>

                                    <ul>

                                        <li>
                                            <a href="https://theme355-pizza.myshopify.com/account">My Account</a>
                                        </li>

                                        <li>
                                            <a href="https://theme355-pizza.myshopify.com/account/login">Login</a>
                                        </li>

                                        <li>
                                            <a href="https://theme355-pizza.myshopify.com/pages/wishlist">Wishlist</a>
                                        </li>

                                        <li>
                                            <a href="https://theme355-pizza.myshopify.com/account/addresses">Addresses</a>
                                        </li>

                                        <li>
                                            <a href="https://theme355-pizza.myshopify.com/account/orders">Orders</a>
                                        </li>

                                    </ul>
                                </div>


                            </div>






                            <div class="col-sm-3 footer_block ">

                                <div class="footer_item footer_item__contacts">
                                    <h3>Address</h3>

                                    <ul>

                                        <li>My Company Glasgow D04 89GR</li>



                                        <li><a href="tel:800-2345-6789">800-2345-6789</a></li>



                                        <li><a href="mailto:info@demolink.org">info@demolink.org</a></li>



                                        <li>7 Days a week from 9:00 am to 7:00 pm</li>

                                    </ul>
                                </div>



                            </div>


                            <div class="clearfix"></div>





                        </div>

                    </div>

                </div>


                <div class="footer_row__2">
                    <div class="container">
                        <div class="footer_wrap_1">

                            <div class="footer_wrap_2 footer_left no_payment">

                                <a target="_blank" rel="nofollow" href="https://www.shopify.com?utm_campaign=poweredby&amp;utm_medium=shopify&amp;utm_source=onlinestore">Powered
                                    by Shopify</a> © 2018.
                            </div>



                        </div>
                    </div>
                </div>

            </footer>

        </div>
    </div>

    <a id="back_top" href="index.html#">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </a>

</div>

<script src="https://cdn.shopify.com/s/files/1/2321/3015/t/2/assets/assets.js?2215465451326053447" defer></script>
<script src="https://cdn.shopify.com/s/files/1/2321/3015/t/2/assets/shop.js?2215465451326053447" defer></script>
<link href="https://cdn.shopify.com/s/files/1/2321/3015/t/2/assets/style.scss.css?2215465451326053447" rel="stylesheet"
    type="text/css" media="all" />





<noscript id="deferred_styles">
    <link href="https://cdn.shopify.com/s/files/1/2321/3015/t/2/assets/responsive.scss.css?2215465451326053447" rel="stylesheet"
        type="text/css" media="all" />










    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic"
        rel="stylesheet" type="text/css">


</noscript>

<script>
    var loadDeferredStyles = function () {
        var addStylesNode = document.getElementById('deferred_styles');
        var replacement = document.createElement('div');
        replacement.innerHTML = addStylesNode.textContent;
        document.body.appendChild(replacement)
        addStylesNode.parentElement.removeChild(addStylesNode);
    };
    var raf = requestAnimationFrame || mozRequestAnimationFrame || webkitRequestAnimationFrame || msRequestAnimationFrame;
    if (raf) raf(function () { window.setTimeout(loadDeferredStyles, 0); });
    else window.addEventListener('load', loadDeferredStyles);
</script>

<meta id="shopify-digital-wallet" name="shopify-digital-wallet" content="/23213015/digital_wallets/dialog">
<style>.shopify-payment-button__button--hidden {
  visibility: hidden;
}

.shopify-payment-button__button {
  border-radius: 4px;
  border: none;
  box-shadow: 0 0 0 0 transparent;
  color: white;
  cursor: pointer;
  display: block;
  font-size: 1em;
  font-weight: 500;
  line-height: 1;
  text-align: center;
  width: 100%;
  transition: background 0.2s ease-in-out;
}

.shopify-payment-button__button[disabled] {
  opacity: 0.6;
  cursor: default;
}

.shopify-payment-button__button--unbranded {
  background-color: #1990c6;
  padding: 1em 2em;
}

.shopify-payment-button__button--unbranded:hover:not([disabled]) {
  background-color: #136f99;
}

.shopify-payment-button__more-options {
  background: transparent;
  border: 0 none;
  cursor: pointer;
  display: block;
  font-size: 1em;
  margin-top: 1em;
  text-align: center;
  width: 100%;
}

.shopify-payment-button__more-options:hover:not([disabled]) {
  text-decoration: underline;
}

.shopify-payment-button__more-options[disabled] {
  opacity: 0.6;
  cursor: default;
}

.shopify-payment-button__button--branded {
  display: flex;
  flex-direction: column;
  min-height: 44px;
  position: relative;
  z-index: 1;
}

.shopify-payment-button__button--branded .shopify-cleanslate {
  flex: 1 !important;
  display: flex !important;
  flex-direction: column !important;
}
</style>
<script id="shopify-features" type="application/json">{"accessToken":"7e35d7dc35c23e90257703d34af49f85","betas":[],"domain":"theme355-pizza.myshopify.com","shopId":23213015,"smart_payment_buttons_url":"https:\/\/cdn.shopifycloud.com\/payment-sheet\/assets\/latest\/spb.js"}</script>
<script>var Shopify = Shopify || {};
    Shopify.shop = "theme355-pizza.myshopify.com";
    Shopify.currency = { "active": "USD" };
    Shopify.theme = { "name": "Theme355", "id": 595787803, "theme_store_id": null, "role": "main" };
    Shopify.theme.handle = "null";
    Shopify.theme.style = { "id": null, "handle": null };</script>
<script id="__st">var __st = { "a": 23213015, "offset": -18000, "reqid": "c2529c72-acb6-4ac9-9c4a-69ea70b726a9", "pageurl": "theme355-pizza.myshopify.com\/", "u": "018c85d87392", "p": "home" };</script>
<script>window.ShopifyPaypalV4VisibilityTracking = true;</script>
<script>window.Shopify = window.Shopify || {};
    window.Shopify.Checkout = window.Shopify.Checkout || {};
    window.Shopify.Checkout.apiHost = "theme355-pizza.myshopify.com";</script>
<script>window.ShopifyAnalytics = window.ShopifyAnalytics || {};
    window.ShopifyAnalytics.meta = window.ShopifyAnalytics.meta || {};
    window.ShopifyAnalytics.meta.currency = 'USD';
    var meta = { "page": { "pageType": "home" } };
    for (var attr in meta) {
        window.ShopifyAnalytics.meta[attr] = meta[attr];
    }</script>
<script>window.ShopifyAnalytics.merchantGoogleAnalytics = function () {

    };
</script>
<script class="analytics">(function () {
        var customDocumentWrite = function (content) {
            var jquery = null;

            if (window.jQuery) {
                jquery = window.jQuery;
            } else if (window.Checkout && window.Checkout.$) {
                jquery = window.Checkout.$;
            }

            if (jquery) {
                jquery('body').append(content);
            }
        };

        var trekkie = window.ShopifyAnalytics.lib = window.trekkie = window.trekkie || [];
        if (trekkie.integrations) {
            return;
        }
        trekkie.methods = [
            'identify',
            'page',
            'ready',
            'track',
            'trackForm',
            'trackLink'
        ];
        trekkie.factory = function (method) {
            return function () {
                var args = Array.prototype.slice.call(arguments);
                args.unshift(method);
                trekkie.push(args);
                return trekkie;
            };
        };
        for (var i = 0; i < trekkie.methods.length; i++) {
            var key = trekkie.methods[i];
            trekkie[key] = trekkie.factory(key);
        }
        trekkie.load = function (config) {
            trekkie.config = config;
            var script = document.createElement('script');
            script.type = 'text/javascript';
            script.onerror = function (e) {
                (new Image()).src = '//v.shopify.com/internal_errors/track?error=trekkie_load';
            };
            script.async = true;
            script.src = 'https://cdn.shopify.com/s/javascripts/tricorder/trekkie.storefront.min.js?v=2017.09.05.1';
            var first = document.getElementsByTagName('script')[0];
            first.parentNode.insertBefore(script, first);
        };
        trekkie.load(
            { "Trekkie": { "appName": "storefront", "development": false, "defaultAttributes": { "shopId": 23213015, "isMerchantRequest": null, "themeId": 595787803, "themeCityHash": 15750919317156132419 } }, "Performance": { "navigationTimingApiMeasurementsEnabled": true, "navigationTimingApiMeasurementsSampleRate": 1.0 }, "Session Attribution": {} }
        );

        var loaded = false;
        trekkie.ready(function () {
            if (loaded) return;
            loaded = true;

            window.ShopifyAnalytics.lib = window.trekkie;


            var originalDocumentWrite = document.write;
            document.write = customDocumentWrite;
            try { window.ShopifyAnalytics.merchantGoogleAnalytics.call(this); } catch (error) { };
            document.write = originalDocumentWrite;


            window.ShopifyAnalytics.lib.page(
                null,
                { "pageType": "home" }
            );


        });


        var eventsListenerScript = document.createElement('script');
        eventsListenerScript.async = true;
        eventsListenerScript.src = "//cdn.shopify.com/s/assets/shop_events_listener-76ce6d7f3e50d4b8c05874c34d2ea1340c45e5babba61276dadcaeed488ca16a.js";
        document.getElementsByTagName('head')[0].appendChild(eventsListenerScript);

    })();</script>
<script integrity="sha256-LSSd/irVbp++ejYsk3vd86UUqmyUoHsKhsADtERDioA=" defer="defer" src="https://cdn.shopify.com/s/assets/storefront/express_buttons-2d249dfe2ad56e9fbe7a362c937bddf3a514aa6c94a07b0a86c003b444438a80.js"
    crossorigin="anonymous"></script>
<script integrity="sha256-03brKlGJkFluEWuVU2bbMkmqtPMYe/svhru01Sq7y9E=" defer="defer" src="https://cdn.shopify.com/s/assets/storefront/features-d376eb2a518990596e116b955366db3249aab4f3187bfb2f86bbb4d52abbcbd1.js"
    crossorigin="anonymous"></script>
<script id="sections-script" data-sections="index-slideshow,index-products-carousel,index-countdown-banner,index-newsletter,header"
    defer="defer" src="https://cdn.shopify.com/s/files/1/2321/3015/t/2/compiled_assets/scripts.js?2215465451326053447"></script>

@endsection