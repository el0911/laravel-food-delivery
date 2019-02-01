@extends('layouts.app')

@section('content')


<head>
	<meta charset="utf-8">



	<title>
		{{$item->name}}


		&ndash; {{$item->Resturant_name}}

	</title>

	<link rel="canonical" href="https://theme355-pizza.myshopify.com/products/spice_tobiko">


	<link rel="shortcut icon" href="https://cdn.shopify.com/s/files/1/2321/3015/files/favicon_1ffa9212-8e19-46da-b8a0-f385e259c9a5_32x32.png?v=1504712107"
	 type="image/png">



	<meta name="description" content="Flawless quality and low prices – these are the main cornerstones that have helped us build our business We are glad to welcome customers from all over the world and offer the best food and ingredients for your joy! We know that it is almost impossible to satisfy all cuisine whims of our visitors but we are working on ">


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


</head>

<body class="template-product">
	<div class="page_wrapper">

		<div id="page_preloader__bg">
			<img id="page_preloader__img" src="https://cdn.shopify.com/s/files/1/2321/3015/t/2/assets/shopify_logo.gif?11475216095625706209"
			 alt="">
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





		<div class="page_container">

			<div class="breadcrumbs">
				<div class="container">
					<ul>
						<li><a href="https://theme355-pizza.myshopify.com/">Home</a></li>



						<li><a href="https://theme355-pizza.myshopify.com/collections/all">Products</a></li>

						<li><span>{{$item->name}}</span></li>


					</ul>
				</div>
			</div>




			<div class="main_content ">
				<div id="shopify-section-template-product" class="shopify-section section section_single-product section_product section_template__product">






					<script type="application/json" id="product_json_template-product">
	{"id":52053180443,"title":"{{$item->name}}","handle":"spice_tobiko","description":"Flawless quality and low prices – these are the main cornerstones that have helped us build our business\n\n\u003cp\u003e\u003cstrong\u003eWe are glad to welcome customers from all over the world and offer the best food and ingredients for your joy!\u003c\/strong\u003e\u003c\/p\u003e\n\u003cp\u003eWe know that it is almost impossible to satisfy all cuisine whims of our visitors but we are working on it – so if you can't find what you were looking for, please feel free to contact our awesome Support to leave your request and we'll get back to you as soon as possible. Flawless quality and low prices – these are the main cornerstones that have helped us build our business. There is nothing more important than our client's needs and perfect reputation of our shop.\u003c\/p\u003e\n\u003cul\u003e\n\u003cli\u003eWagyu beef\u003c\/li\u003e\n\u003cli\u003eCured meats\u003c\/li\u003e\n\u003cli\u003eOils\u003c\/li\u003e\n\u003cli\u003eDesserts\u003c\/li\u003e\n\u003cli\u003eFresh fish\u003c\/li\u003e\n\u003c\/ul\u003e\n\u003cp\u003eSharing is everything and we are glad to share our latest creative ideas about banquet menus and decoration, original recipes etc. Our store offers you always fresh vegetables all year round, ensuring you eat only the best of what's in season. Buy from a wide range of high quality organic vegetables. Choose from frozen hard to find vegetables and fruits for when fresh is unavailable. They are safely packaged and keep maximum vitamin and nutritional value. We offer a great variety of carefully stored fruits that resplendent with color and vibrant with health. Give a treat to the whole family with our fresh organic fruits.\u003c\/p\u003e\n\u003cp\u003eWhat do you expect from your purchase? Our Store offers only fresh organic products at the lowest possible prices.\u003c\/p\u003e","published_at":"2017-09-04T10:52:19-04:00","created_at":"2017-09-04T10:52:30-04:00","vendor":"{{$item->Resturant_name}}","type":"Sushi","tags":[],"price":1000,"price_min":1000,"price_max":1000,"available":true,"price_varies":false,"compare_at_price":1200,"compare_at_price_min":1200,"compare_at_price_max":1200,"compare_at_price_varies":false,"variants":[{"id":462482669595,"title":"Default Title","option1":"Default Title","option2":null,"option3":null,"sku":"327038","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"name":"{{$item->name}}","public_title":null,"options":["Default Title"],"price":1000,"weight":4500,"compare_at_price":1200,"inventory_quantity":100,"inventory_management":"shopify","inventory_policy":"deny","barcode":"555-6322-1"}],"images":["\/\/cdn.shopify.com\/s\/files\/1\/2321\/3015\/products\/spice_tobiko_1.png?v=1504536750","\/\/cdn.shopify.com\/s\/files\/1\/2321\/3015\/products\/spice_tobiko_2.png?v=1504536750","\/\/cdn.shopify.com\/s\/files\/1\/2321\/3015\/products\/spice_tobiko_3.png?v=1504536750","\/\/cdn.shopify.com\/s\/files\/1\/2321\/3015\/products\/spice_tobiko_4.png?v=1504536750","\/\/cdn.shopify.com\/s\/files\/1\/2321\/3015\/products\/spice_tobiko_5.png?v=1504536750"],"featured_image":"\/\/cdn.shopify.com\/s\/files\/1\/2321\/3015\/products\/spice_tobiko_1.png?v=1504536750","options":["Title"],"content":"Flawless quality and low prices – these are the main cornerstones that have helped us build our business\n\n\u003cp\u003e\u003cstrong\u003eWe are glad to welcome customers from all over the world and offer the best food and ingredients for your joy!\u003c\/strong\u003e\u003c\/p\u003e\n\u003cp\u003eWe know that it is almost impossible to satisfy all cuisine whims of our visitors but we are working on it – so if you can't find what you were looking for, please feel free to contact our awesome Support to leave your request and we'll get back to you as soon as possible. Flawless quality and low prices – these are the main cornerstones that have helped us build our business. There is nothing more important than our client's needs and perfect reputation of our shop.\u003c\/p\u003e\n\u003cul\u003e\n\u003cli\u003eWagyu beef\u003c\/li\u003e\n\u003cli\u003eCured meats\u003c\/li\u003e\n\u003cli\u003eOils\u003c\/li\u003e\n\u003cli\u003eDesserts\u003c\/li\u003e\n\u003cli\u003eFresh fish\u003c\/li\u003e\n\u003c\/ul\u003e\n\u003cp\u003eSharing is everything and we are glad to share our latest creative ideas about banquet menus and decoration, original recipes etc. Our store offers you always fresh vegetables all year round, ensuring you eat only the best of what's in season. Buy from a wide range of high quality organic vegetables. Choose from frozen hard to find vegetables and fruits for when fresh is unavailable. They are safely packaged and keep maximum vitamin and nutritional value. We offer a great variety of carefully stored fruits that resplendent with color and vibrant with health. Give a treat to the whole family with our fresh organic fruits.\u003c\/p\u003e\n\u003cp\u003eWhat do you expect from your purchase? Our Store offers only fresh organic products at the lowest possible prices.\u003c\/p\u003e"}
</script>

					<script type="application/json" id="variant_weights_template-product">
	{"462482669595":"4.5 kg"}
</script>

					<div class="container">
						<div class="row">
							<div class="single_product__img col-xs-6">

								<div id="gallery_big-template-product" class="gallery_big swiper-container">
									<div class="swiper-wrapper">
										<div class="swiper-slide">
											<img id="primary_img_template-product" src="{{$item->img_url}}" alt="{{$item->name}}">
										</div>




									</div>

									<div id="prev_template-product" class="swiper_btn swiper_btn__prev"></div>
									<div id="next_template-product" class="swiper_btn swiper_btn__next"></div>
								</div>

								<div id="gallery_thumbs-template-product" class="gallery_thumbs gallery_thumbs__medium swiper-container">
									<div class="swiper-wrapper">

										<div class="swiper-slide">
											<img src="https://cdn.shopify.com/s/files/1/2321/3015/products/spice_tobiko_1_98x98_crop_top.png?v=1504536750"
											 alt="">
										</div>



									</div>
								</div>



							</div>

							<div class="single_product__info col-xs-6 medium">
								<h2 class="single_product__title">{{$item->name}}</h2>

								<div class="single_product__details">
									<form action="https://theme355-pizza.myshopify.com/cart/add" method="post" enctype="multipart/form-data"
									 data-section="template-product">
										<div class="single_product__options hidden">
											<select name="id" id="product_select_template-product">

												<option value="462482669595">Default Title</option>

											</select>
										</div>

										<div class="clearfix"></div>
										<div class="details_separator"></div>

										<div class="details_wrapper">
											<div class="details_left">


												<p class="single_product__type">
													<b>Product type:</b>

													<span>

														<?php

															$brand="SELECT * FROM cat WHERE id = $item->cat_id";
															$cname_=  DB::select( $brand)[0]->name;
														   
													
															?>
													</span>

													{{$cname_}}
												</p>



												<p class="single_product__vendor">
													<b>Vendor:</b>
													<span>{{$item->Resturant_name}}</span>
												</p>



												<p class="single_product__tags">
													<b>Tags:</b>


													—

												</p>

											</div>

											<div class="details_right">
												<p class="single_product__availability">
													<b>Availability:</b>

													<span id="single_product__availability-template-product"></span>
												</p>

												<p class="single_product__price"><span id="single_product__price-template-product"><span class="money">{{$item->name}}</span></span></p>

												<div class="single_product__quantity">
													<label for="single_product__quantity-template-product">Quantity: </label>

													<div class="quantity_box">
														<input id="single_product__quantity-template-product" class="quantity_input" type="text" name="quantity"
														 value="1">

														<span class="quantity_down"><i class="fa fa-minus" aria-hidden="true"></i></span>
														<span class="quantity_up"><i class="fa fa-plus" aria-hidden="true"></i></span>

														<button type="submit" name="add" class="btn" id="single_product__addtocart-template-product">Add to cart</button>
													</div>
												</div>



												<p class="wishlist_section"><a href="https://theme355-pizza.myshopify.com/pages/wishlist" class="wishlist_form"><i
														 class="fa fa-heart" aria-hidden="true"></i> Add to the wishlist</a></p>




												<div class="social_sharing_block">

													<a target="_blank" href="https://www.facebook.com/sharer.php?u=https://theme355-pizza.myshopify.com/products/spice_tobiko"
													 title="Share">
														<i class="fa fa-facebook" aria-hidden="true"></i>
													</a>



													<a target="_blank" href="https://twitter.com/share?text=Spice%20Tobiko&amp;url=https://theme355-pizza.myshopify.com/products/spice_tobiko"
													 title="Share">
														<i class="fa fa-twitter" aria-hidden="true"></i>
													</a>



													<a target="_blank" href="https://plus.google.com/share?url=https://theme355-pizza.myshopify.com/products/spice_tobiko"
													 title="Share">
														<i class="fa fa-google-plus" aria-hidden="true"></i>
													</a>



													<a target="_blank" href="https://pinterest.com/pin/create/button/?url=https://theme355-pizza.myshopify.com/products/spice_tobiko&amp;media=//cdn.shopify.com/s/assets/no-image-2048-5e88c1b20e087fb7bbe9a3771824e743c244f437e4f8ba93bbf7b11b53f7824c_1024x1024.gif&amp;description=Spice%20Tobiko"
													 title="Share">
														<i class="fa fa-pinterest" aria-hidden="true"></i>
													</a>

												</div>

											</div>
										</div>

									</form>

								</div>

							</div>

						</div>


						<form accept-charset="UTF-8" action="https://theme355-pizza.myshopify.com/contact" id="wishlist_form" method="post">
							<input name="form_type" type="hidden" value="customer">
							<input name="utf8" type="hidden" value="✓">
							<input type="hidden" name="contact[email]" value="" />
							<input id="update-me" type="hidden" name="contact[tags]" value="" />
						</form>



						<div class="product_description rte">

							<p>
								{{$item->desc_}}
							</p>
						</div>
					</div>


				</div>



				<script>
					var producText = {
						available: "Available",
						unavailable: "Unavailable",
						items: "items",
					};
					var productImage = true;
				</script>

			</div>
		</div>





		<footer>
			<div class="footer_row__2">
				<div class="container">
					<div class="footer_wrap_1">

						<div class="footer_wrap_2 footer_left no_payment">

							<a target="_blank" rel="nofollow" href="https://www.shopify.com?utm_campaign=poweredby&amp;utm_medium=shopify&amp;utm_source=onlinestore">Powered
								Kaytez</a> © 2018.
						</div>



					</div>
				</div>
			</div>

		</footer>

	</div>
	</div>

	<a id="back_top" href="spice_tobiko@variant=462482669595.html#">
		<i class="fa fa-angle-up" aria-hidden="true"></i>
	</a>

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


	@endsection