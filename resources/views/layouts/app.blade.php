<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
</head>
<body>
    <div id="app">

<header id="page_header">
	<div class="page_container">
		<div class="top-pannel">
			<div class="container">
				<div class="top_pannel_menu_left">

						<div class="top_pannel_customer">
							<a href="https://theme355-pizza.myshopify.com/account">My account</a>


						</div>

				</div>

				<div class="top_pannel_phone">

						<a href="tel:80012345678"><i class="material-design-phone370"></i>+234000000000000</a>

				</div>

				<div class="top_pannel_menu_right">

						<a class="btn top_pannel_btn" href="https://theme355-pizza.myshopify.com/pages/contact-us">Previous Orders</a>
                        <script src="https://cdn.shopify.com/s/javascripts/currencies.js" defer></script>
						<script src="https://cdn.shopify.com/s/files/1/2321/3015/t/2/assets/currency-tools.js?2215465451326053447" defer></script>
                        <div class="header_search">
							<span class="header_search_trigger"><i class="material-design-search100"></i></span>

							<form action="https://theme355-pizza.myshopify.com/search" method="get" role="search" class="search_form">
								<input type="search" name="q" placeholder="Search store" aria-label="Search store">

								<button type="submit">
									<i class="material-design-search100"></i>
								</button>
							</form>
						</div>



						<div class="top_pannel_cart">
							<a href="https://theme355-pizza.myshopify.com/cart" title="Cart"><i class="material-design-shopping232"></i></a>
						</div>

				</div>
			</div>
		</div>

		<div class="header_wrap1 container">
			<div class="header_wrap2 header_left">




							<a class="header_logo" href="index.html">
<h2>
    Kaytez Delivery
</h2>

							</a>



			</div>

			<div class="header_wrap2 header_right">

					<nav id="megamenu" class="megamenu">
						<h2 id="megamenu_mobile_toggle"><i class="fa fa-bars" aria-hidden="true"></i>Menu</h2>

						<div id="megamenu_mobile_close">
							<div class="close_icon"></div>
						</div>

						<ul id="megamenu_level__1" class="level_1">




                        @guest
                            <li class="level_1__item">
                                <a class="level_1__link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="level_1__item">
                                <a class="level_1__link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else

                           <li class="level_1__item">
                                <a class="level_1__link" href="{{ route('register') }}">{{ Auth::user()->name }} </a>
                            </li>

                            <li class="level_1__item">
                            <a class="level_1__link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            </li>
                        @endguest


								<li class="level_1__item ">
									<a class="level_1__link " href="https://theme355-pizza.myshopify.com/pages/contact-us">Contact us

									</a>



								</li>


						</ul>
					</nav>

			</div>

		</div>
	</div>
</header>

        <main class="">
            @yield('content')
        </main>
    </div>
</body>
</html>
