<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="{{URL::asset('css/new-products.css')}}" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>

<body>
<svg class="hidden">
	<symbol id="icon-arrow" viewBox="0 0 24 24">
		<title>arrow</title>
		<polygon points="6.3,12.8 20.9,12.8 20.9,11.2 6.3,11.2 10.2,7.2 9,6 3.1,12 9,18 10.2,16.8 " />
	</symbol>
	<symbol id="icon-drop" viewBox="0 0 24 24">
		<title>drop</title>
		<path d="M12,21c-3.6,0-6.6-3-6.6-6.6C5.4,11,10.8,4,11.4,3.2C11.6,3.1,11.8,3,12,3s0.4,0.1,0.6,0.3c0.6,0.8,6.1,7.8,6.1,11.2C18.6,18.1,15.6,21,12,21zM12,4.8c-1.8,2.4-5.2,7.4-5.2,9.6c0,2.9,2.3,5.2,5.2,5.2s5.2-2.3,5.2-5.2C17.2,12.2,13.8,7.3,12,4.8z" />
		<path d="M12,18.2c-0.4,0-0.7-0.3-0.7-0.7s0.3-0.7,0.7-0.7c1.3,0,2.4-1.1,2.4-2.4c0-0.4,0.3-0.7,0.7-0.7c0.4,0,0.7,0.3,0.7,0.7C15.8,16.5,14.1,18.2,12,18.2z" />
	</symbol>
	<symbol id="icon-codepen" viewBox="0 0 24 24">
		<title>CodePen</title>
		<path d="m24 7.598c-.044-.264-.08-.47-.36-.641-11.449-6.791-11.287-7.297-12.03-6.848-8.677 5.394-11.092 6.597-11.439 7.017-.315.323-.171.818-.171 8.298-.021.851 7.743 5.462 11.519 8.404.333.237.752.199 1.003-.029 11.224-7.956 11.497-7.636 11.478-8.375 0 0-.012-7.927 0-7.826zm-1.5 6.491-3.876-2.359 3.876-2.697zm-5.277-3.212-4.473-2.722v-6.07l9.126 5.555zm-5.223 3.633-3.876-2.697 3.876-2.359 3.876 2.359zm-.75-12.426v6.074c-1.739 1.079-3.209 1.98-4.451 2.734l-4.675-3.252zm-5.857 9.658c-1.874 1.127-3.098 1.843-3.893 2.32v-5.029zm1.33.924 4.527 3.149v5.999l-9.126-6.349zm6.027 9.149v-5.999l4.527-3.149 4.599 2.799z" />
	</symbol>
	<symbol id="icon-cart">
		<title>cart</title>
		<path d="M11 21c0 1.105-0.895 2-2 2s-2-0.895-2-2c0-1.105 0.895-2 2-2s2 0.895 2 2z"></path>
		<path d="M22 21c0 1.105-0.895 2-2 2s-2-0.895-2-2c0-1.105 0.895-2 2-2s2 0.895 2 2z"></path>
		<path d="M23.8 5.4c-0.2-0.3-0.5-0.4-0.8-0.4h-16.2l-0.8-4.2c-0.1-0.5-0.5-0.8-1-0.8h-4c-0.6 0-1 0.4-1 1s0.4 1 1 1h3.2l0.8 4.2c0 0 0 0.1 0 0.1l1.7 8.3c0.3 1.4 1.5 2.4 2.9 2.4 0 0 0 0 0.1 0h9.7c1.5 0 2.7-1 3-2.4l1.6-8.4c0-0.3 0-0.6-0.2-0.8zM20.4 14.2c-0.1 0.5-0.5 0.8-1 0.8h-9.7c-0.5 0-0.9-0.3-1-0.8l-1.5-7.2h14.6l-1.4 7.2z"></path>
	</symbol>
	<symbol id="icon-caret" viewBox="0 0 16 24">
		<title>caret</title>
		<path d="M15.45 2.8L12.65 0l-12 12 12 12 2.8-2.8-9.2-9.2z" />
	</symbol>
</svg>
<main>
	<div class="content content--fixed">
		<div class="page-header">
			<h1 class="page-header__title">
				<span class="page-header__title-inner">LikeNuShus</span>
				<span class="page-header__title-sub">man &amp; woman</span>
			</h1>
			<ul class="social">
				<li class="social__item">
					<a class="social__item-link" href="https://codepen.io/DivineBlow" target="_blank">
						<svg class="icon icon--social icon--codepen">
							<use xlink:href="#icon-codepen"></use>
						</svg>
					</a>
				</li>
			</ul>
		</div>
		<p class="tagline">Lightly Used Shoes, Cheap!</p>
	</div>
	<div class="slideshow">
		<div class="slide">
			<div class="slide__wrap">
				<div class="slide__img" style="background-image: url(https://images.pexels.com/photos/1456735/pexels-photo-1456735.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);"></div>
				<div class="slide__title-wrap">
					<h3 class="slide__title">Asics</h3>
					<h4 class="slide__subtitle">#AnimaSanaInCorporeSano.</h4>
				</div>
			</div>
		</div>
		<div class="slide">
			<div class="slide__wrap">
				<div class="slide__img" style="background-image: url(https://images.unsplash.com/flagged/photo-1556637640-2c80d3201be8);"></div>
				<div class="slide__title-wrap">
					<h3 class="slide__title">Adidas</h3>
					<h4 class="slide__subtitle">#ImpossibleIsNothing</h4>
				</div>
			</div>
		</div>
		<div class="slide">
			<div class="slide__wrap">
				<div class="slide__img" style="background-image: url(https://images.unsplash.com/photo-1612902377756-414b2139d5e2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1051&q=80);"></div>
				<div class="slide__title-wrap">
					<h3 class="slide__title">Nike</h3>
					<h4 class="slide__subtitle">#JustDoIt</h4>
				</div>
			</div>
		</div>
	</div><!-- /slideshow -->
	<nav class="boxnav">
		<button class="boxnav__item boxnav__item--prev">
			<svg class="icon icon--caret">
				<use xlink:href="#icon-caret"></use>
			</svg>
		</button>
		<div class="boxnav__item boxnav__item--label">
			<span class="boxnav__label boxnav__label--current">1</span>
			<span class="boxnav__label boxnav__label--total"></span>
		</div>
		<button class="boxnav__item boxnav__item--next">
			<svg class="icon icon--caret-rot">
				<use xlink:href="#icon-caret"></use>
			</svg>
		</button>
	</nav>
	<button class="action action--details">+ details</button>
	<!-- details -->
	<div class="details-wrap">
		<div class="details">
			<div class="details__item details__item-img" data-direction="ttb">
				<div class="details__inner">
					<img src="https://images.unsplash.com/photo-1584539696499-bff0b4768e4e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=100" alt="Some image" />
				</div>
			</div>
			<div class="details__item details__item-sizes">
				<div class="details__inner details__inner--sizes">
					<span class="details__size">6</span>
					<span class="details__size">6.5</span>
					<span class="details__size details__size--selected">7</span>
					<span class="details__size">7.5</span>
					<span class="details__size">8</span>
					<span class="details__size">9</span>
					<span class="details__size details__size--disabled">9.5</span>
					<span class="details__size">10</span>
				</div>
			</div>
			<div class="details__item details__item--addtocart" data-direction="ttb">
				<div class="details__inner">
					<button class="action action--addtocart">
						<svg class="icon icon--cart">
							<use xlink:href="#icon-cart"></use>
						</svg>
					</button>
				</div>
			</div>
			<div class="details__item details__item-colors" data-direction="ttb">
				<div class="details__inner details__inner--grid details__inner--colors">
					<span class="details__color details__color--BeigeGray">Beige and Gray</span>
					<span class="details__color details__color--red">Red</span>
					<span class="details__color details__color--green">Green</span>
				</div>
			</div>
			<div class="details__item details__item-price">
				<div class="details__inner details__inner--price">$65</div>
			</div>
			<div class="details__item details__item--close" data-direction="ttb">
				<div class="details__inner">
					<button class="action action--close">Close</button>
				</div>
			</div>
		</div><!-- /details -->
		<div class="details">
			<div class="details__item details__item-img" data-direction="ttb">
				<div class="details__inner">
					<img src="https://images.unsplash.com/photo-1597000610458-c910e915835f?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=100" alt="Some image" />
				</div>
			</div>
			<div class="details__item details__item-sizes">
				<div class="details__inner details__inner--sizes">
					<span class="details__size">6</span>
					<span class="details__size details__size--disabled">6.5</span>
					<span class="details__size">7</span>
					<span class="details__size">7.5</span>
					<span class="details__size details__size--selected">8</span>
					<span class="details__size">9</span>
					<span class="details__size details__size--disabled">9.5</span>
					<span class="details__size details__size--disabled">10</span>
				</div>
			</div>
			<div class="details__item details__item--addtocart" data-direction="ttb">
				<div class="details__inner">
					<button class="action action--addtocart">
						<svg class="icon icon--cart">
							<use xlink:href="#icon-cart"></use>
						</svg>
					</button>
				</div>
			</div>
			<div class="details__item details__item-colors" data-direction="ttb">
				<div class="details__inner details__inner--grid details__inner--colors">
					<span class="details__color details__color--WhiteBlack">White and Black</span>
					<span class="details__color details__color--BlueBlack">Blue and Black</span>
					<span class="details__color details__color--PinkBlack">Pink and Black</span>
				</div>
			</div>
			<div class="details__item details__item-price">
				<div class="details__inner details__inner--price">$30</div>
			</div>
			<div class="details__item details__item--close" data-direction="ttb">
				<div class="details__inner">
					<button class="action action--close">Close</button>
				</div>
			</div>
		</div><!-- /details -->
		<div class="details">
			<div class="details__item details__item-img" data-direction="ttb">
				<div class="details__inner">
					<img src="https://images.unsplash.com/photo-1611510338559-2f463335092c?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=100" alt="Some image" />
				</div>
			</div>
			<div class="details__item details__item-sizes">
				<div class="details__inner details__inner--sizes">
					<span class="details__size">6</span>
					<span class="details__size details__size--disabled">6.5</span>
					<span class="details__size">7</span>
					<span class="details__size details__size--disabled">7.5</span>
					<span class="details__size">8</span>
					<span class="details__size details__size--selected">9</span>
					<span class="details__size details__size--disabled">9.5</span>
					<span class="details__size">10</span>
				</div>
			</div>
			<div class="details__item details__item--addtocart" data-direction="ttb">
				<div class="details__inner">
					<button class="action action--addtocart">
						<svg class="icon icon--cart">
							<use xlink:href="#icon-cart"></use>
						</svg>
					</button>
				</div>
			</div>
			<div class="details__item details__item-colors" data-direction="ttb">
				<div class="details__inner details__inner--grid details__inner--colors">
					<span class="details__color details__color--WhiteRedBlue">White with Red and Blue trim</span>
					<span class="details__color details__color--WhiteGreenBlack">White with Green and Black trim</span>
					<span class="details__color details__color--sky">Sky</span>
				</div>
			</div>
			<div class="details__item details__item-price">
				<div class="details__inner details__inner--price">$45</div>
			</div>
			<div class="details__item details__item--close" data-direction="ttb">
				<div class="details__inner">
					<button class="action action--close">Close</button>
				</div>
			</div>
		</div><!-- /details -->
	</div>
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
<script src="{{URL::asset('js/new-products.js')}}"></script>
</body>

</html>
