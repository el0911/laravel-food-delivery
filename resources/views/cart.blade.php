@extends('layouts.app')

@section('content')

<head>
    <meta charset="utf-8">
    <script src="https://js.paystack.co/v1/inline.js"></script>
                                       


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


<div class="page_container">

    <div class="breadcrumbs">
        <div class="container">
            <ul>
                <li><a href="/">Home</a></li>


                <li><span>Your Shopping Cart</span></li>


            </ul>
        </div>
    </div>




    <div class="main_content ">
        <div class="template_cart">
            <div class="container">
                <h1 class="page_heading">Your Shopping Cart</h1>



                <form action="/cart" method="post" novalidate="" class="cart">
                    <table class="table table-bordered cart_items">
                        <thead>
                            <tr>
                                <th class="column_product" colspan="2">Product</th>
                                <th class="column_price">Price</th>
                                <th class="column_quantity">Quantity</th>
                                <th class="column_total">Total</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
$totalprice = 0;
?>

                            @foreach($items as $item)

                            <?php
$totalprice = $totalprice + $item->price;
?>


                            <tr>
                                <td class="column_product_img">
                                    <a href="/products/taco_bell?variant=462455406619">
                                        <img class="cart__image" src="{{$item->img_url}}" alt="Taco Bell">
                                    </a>
                                </td>

                                <td class="column_product_info">
                                    <p class="cart_item__name product_name">
                                        <a href="/products/taco_bell?variant=462455406619">{{$item->name}}</a>
                                    </p>



                                    <div class="cart_item__details">
                                        <p class="item_type"><b>Resturant name:</b> {{$item->Resturant_name}}</p>

                                    </div>

                                    <a class="btn cart_item__remove" href="/cart/change?line=1&amp;quantity=0">Remove</a>
                                </td>

                                <td class="column_price">
                                    <span class="money" data-currency-usd="$19.00">${{$item->price}}</span>
                                </td>

                                <td class="column_quantity">
                                    <div class="quantity_box">
                                        <input id="updates_462455406619:1384d099b0fd21b08b7ec4380985a058" name="updates[]"
                                            value="1" class="quantity_input" type="text">

                                        <span class="quantity_down"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        <span class="quantity_up"><i class="fa fa-plus" aria-hidden="true"></i></span>

                                        <button type="submit" name="update" class="btn">Update</button>
                                    </div>
                                </td>

                                <td class="column_total">
                                    <span class="money" data-currency-usd="$19.00">${{$item->price}}</span>
                                </td>
                            </tr>

                            @endforeach

                        </tbody>

                        <tfoot>

                            <tr>
                                <td colspan="5">
                                    <p class="cart_total">Total price <span class="money" data-currency-usd="$19.00">${{$totalprice}}</span></p>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="5">
                                    <label for="cart_note">Add a note to your order</label>
                                    <textarea name="note" id="cart_note"></textarea>


                                </td>
                            </tr>





                            <tr class="cart_buttons">
                                <td colspan="5">
                                    <a class="btn" href="/home">Continue shopping</a>
                                    <a href="/cart/clear" class="btn btn_clear_all">Clear cart</a>
                                      <button class="btn btn_alt"  type="button" onclick="payWithPaystack()"> Pay </button>
                                     
                                 
                                    <div class="clearfix"></div>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </form>


            </div>
        </div>


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
                                        <a href="/collections/traditional-pizzas">Traditional Pizzas</a>
                                    </li>

                                    <li>
                                        <a href="/collections/pizza-builder">Pizza builder</a>
                                    </li>

                                    <li>
                                        <a href="/collections/burgers-and-fast-food">Burgers and Fast food</a>
                                    </li>

                                    <li>
                                        <a href="/collections/burger-builder">Burger builder</a>
                                    </li>

                                    <li>
                                        <a href="/collections/sushi-rolls">Sushi &amp; rolls</a>
                                    </li>

                                    <li>
                                        <a href="/collections/sushi-builder">Sushi builder</a>
                                    </li>

                                    <li>
                                        <a href="/collections/sale">Sale</a>
                                    </li>

                                </ul>
                            </div>


                        </div>






                        <div class="col-sm-3 footer_block ">

                            <div class="footer_item footer_item__links">
                                <h3>Information</h3>

                                <ul>

                                    <li>
                                        <a href="/pages/about-us">About us</a>
                                    </li>

                                    <li>
                                        <a href="/pages/contact-us">Contact us</a>
                                    </li>

                                    <li>
                                        <a href="/cart">Cart</a>
                                    </li>

                                    <li>
                                        <a href="/blogs/news">Blog</a>
                                    </li>

                                    <li>
                                        <a href="/pages/privacy-policy">Privacy Policy</a>
                                    </li>

                                </ul>
                            </div>


                        </div>






                        <div class="col-sm-3 footer_block footer_block__2_1">

                            <div class="footer_item footer_item__links">
                                <h3>My Account</h3>

                                <ul>

                                    <li>
                                        <a href="/account">My Account</a>
                                    </li>

                                    <li>
                                        <a href="/account/login">Login</a>
                                    </li>

                                    <li>
                                        <a href="/pages/wishlist">Wishlist</a>
                                    </li>

                                    <li>
                                        <a href="/account/addresses">Addresses</a>
                                    </li>

                                    <li>
                                        <a href="/account/orders">Orders</a>
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
                                by Shopify</a> © 2019.
                        </div>



                    </div>
                </div>
            </div>

        </footer>

    </div>
</div>


<script src="https://cdn.shopify.com/s/files/1/2321/3015/t/2/assets/assets.js?11475216095625706209" defer></script>
<script src="https://cdn.shopify.com/s/files/1/2321/3015/t/2/assets/shop.js?11475216095625706209" defer></script>
<link href="https://cdn.shopify.com/s/files/1/2321/3015/t/2/assets/style.scss.css?11475216095625706209" rel="stylesheet"
    type="text/css" media="all" />



<noscript id="deferred_styles">
    <link href="https://cdn.shopify.com/s/files/1/2321/3015/t/2/assets/responsive.scss.css?11475216095625706209" rel="stylesheet"
        type="text/css" media="all" />










    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic"
        rel="stylesheet" type="text/css">


</noscript>



<meta id="shopify-digital-wallet" name="shopify-digital-wallet" content="/23213015/digital_wallets/dialog">
<link rel="alternate" type="application/json+oembed" href="https://theme355-pizza.myshopify.com/products/spice_tobiko.oembed">
<style>
    .shopify-payment-button__button--hidden {
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
   <script>
    function payWithPaystack() {
        var handler = PaystackPop.setup({
            key: 'pk_test_39a8567daa4cd75bb5b36a2975fc0a2c7d9773f3',
            email: 'customer@email.com',
            amount: {{$totalprice}},
            currency: "NGN",
            ref: '' + Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
            metadata: {
                custom_fields: [
                    {
                        display_name: "Mobile Number",
                        variable_name: "mobile_number",
                        value: "+2348012345678"
                    }
                ]
            },
            callback: function (response) {
                alert('success. transaction ref is ' + response.reference);
            },
            onClose: function () {
                alert('window closed');
            }
        });
        handler.openIframe();
    }
</script>

@endsection