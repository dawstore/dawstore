$(document).ready(function () {
	"use strict";

	Cursor();
});


//Main Animations
TweenMax.from(".artist", 2, {
	delay: 2,
	opacity: 0,
	y: 20,
	ease: Expo.easeInOut
});

TweenMax.from(".about-us", 2, {
	delay: 2.1,
	opacity: 0,
	y: 20,
	ease: Expo.easeInOut
});

TweenMax.from(".menu", 2, {
	delay: 2.2,
	opacity: 0,
	y: 20,
	ease: Expo.easeInOut
});

TweenMax.from(".ellipse-container", 2, {
	delay: 3,
	opacity: 0,
	ease: Expo.easeInOut
});

TweenMax.staggerFrom(".menu-social-warp", 2, {
	delay: 2.2,
	opacity: 0,
	y: 20,
	ease: Expo.easeInOut
}, 0.1);


TweenMax.staggerFrom(".button-wrap", 2, {
	delay: 2,
	opacity: 0,
	y: 20,
	ease: Expo.easeInOut
}, 0.1);

TweenMax.staggerFrom(".main-title", 2, {
	delay: 3,
	opacity: 0,
	y: 20,
	ease: Expo.easeInOut
}, 0.1);


(function ($) {


	//AOS Init
	AOS.init({
		disable: 'mobile'
	});


	// Preloader
	$(".loader").fadeOut();
	$("#preloder").delay(400).fadeOut("slow");


	//Sound
	window.addEventListener('load', function () {
		$('body').append('<audio loop volume="0.2" id="audio"><source src="sound.mp3" type="audio/mpeg"/></audio>');
	});

	$(".button-wrap").on('click', function () {

		var audio = document.getElementById("audio");

		$('body').toggleClass("mute");
		$(this).toggleClass("disabled");

		if ($(this).hasClass('disabled')) {
			$('.button-text span').text($('.button-text span').data('off'));
			$('.button-text span').attr("data-off", $('.button-text span').data('on'));
			$('.button-text span').attr("data-on", $('.button-text span').text());

			audio.volume = 0;
			audio.pause();
		} else {

			$('.button-text span').text($('.button-text span').data('on'));
			$('.button-text span').attr("data-on", $('.button-text span').data('on'));
			$('.button-text span').attr("data-off", $('.button-text span').data('off'));

			audio.volume = 0.2;
			audio.play();
		}

	});


	//Menu
	var t1 = new TimelineMax({
		paused: true
	});

	t1.to(".block", 1.2, {
		width: "25%",
		ease: Power4.easeInOut
	});

	t1.staggerFrom(".menu-list ul li", 0.8, {
		y: 40,
		opacity: 0,
		ease: Power2.easeOut
	}, 0.2);
	t1.staggerFrom(".menu-list-info ul li", 0.8, {
		y: 40,
		opacity: 0,
		ease: Power2.easeOut
	}, 0.2);


	t1.reverse();


	$(document).on("click", ".menu-btn", function () {


		var x = document.getElementById('menu-overlay');
		var n = document.getElementById('menu');


		if (n.style.visibility === "visible") {
			setTimeout(function () {
				n.style.visibility = "hidden";
			}, 4000);
		} else {
			n.style.visibility = "visible";
		}

		if (x.style.display === "block") {
			setTimeout(function () {
				x.style.display = "none";
			}, 4000);
		} else {
			x.style.display = "block";
		}

		t1.reversed(!t1.reversed());
	});


	//Circle
	const circleType = new CircleType(
		document.getElementById("rotated")
	).radius(80);

	$(window).on('scroll', function () {
		var offset = $(window).scrollTop();
		offset = offset * 0.4;

		$(".circular-text").css({
			"-moz-transform": "rotate(" + offset + "deg)",
			"-webkit-transform": "rotate(" + offset + "deg)",
			"-o-transform": "rotate(" + offset + "deg)",
			"-ms-transform": "rotate(" + offset + "deg)",
			transform: "rotate(" + offset + "deg)"
		});
	});


	$(document).ready(function () {
		TweenMax.set(".project-preview", {
			width: 0
		});

		var tl = new TimelineLite();

		$(document)
			.on("mouseover", ".navigation-item", function (evt) {
				tl = new TimelineLite();
				tl.to($(".project-preview"), 1, {
					width: "600px",
					ease: Expo.easeInOut
				});
			})
			.on("mouseout", ".navigation-item", function (evt) {
				tl = new TimelineLite();
				tl.to($(".project-preview"), 0.5, {
					width: 0,
					ease: Expo.easeInOut
				});
			});
	});

	$(".navigation-link-1").on("mouseover", function () {
		$(".project-preview").css({
			"background-image": "url(img/portfolio/img-1.jpg)"
		});
	});

	$(".navigation-link-2").on("mouseover", function () {
		$(".project-preview").css({
			"background-image": "url(img/portfolio/img-2.jpg)"
		});
	});

	$(".navigation-link-3").on("mouseover", function () {
		$(".project-preview").css({
			"background-image": "url(img/portfolio/img-3.jpg)"
		});
	});

	$(".navigation-link-4").on("mouseover", function () {
		$(".project-preview").css({
			"background-image": "url(img/portfolio/img-4.jpg)"
		});
	});

	$(".navigation-link-5").on("mouseover", function () {
		$(".project-preview").css({
			"background-image": "url(img/portfolio/img-5.gif)"
		});
	});

	$(".navigation-link-6").on("mouseover", function () {
		$(".project-preview").css({
			"background-image": "url(img/portfolio/img-6.jpg)"
		});
	});

	$(".navigation-link-7").on("mouseover", function () {
		$(".project-preview").css({
			"background-image": "url(img/portfolio/img-7.gif)"
		});
	});

	$(".navigation-link-8").on("mouseover", function () {
		$(".project-preview").css({
			"background-image": "url(img/portfolio/img-8.jpg"
		});
	});


	// go to top
	$(window).on('scroll', function () {
		if ($(this).scrollTop() > 100) {
			$('#back-to-top').fadeIn();
		} else {
			$('#back-to-top').fadeOut();
		}
	});
	// scroll body to 0px on click
	$('#back-to-top').on('click', function () {
		$('body,html').animate({
			scrollTop: 0
		}, 800);
		return false;
	});


})(jQuery);


// Cursor
function Cursor() {

	var cursor = $(".cursor"),
		follower = $(".cursor-follower");

	var posX = 0,
		posY = 0,
		mouseX = 0,
		mouseY = 0;

	TweenMax.to({}, 0.016, {
		repeat: -1,
		onRepeat: function () {
			posX += (mouseX - posX) / 9;
			posY += (mouseY - posY) / 9;

			TweenMax.set(follower, {
				css: {
					left: posX - 25,
					top: posY - 25
				}
			});

			TweenMax.set(cursor, {
				css: {
					left: mouseX - 5,
					top: mouseY - 5
				}
			});
		}
	});

	const link = document.querySelectorAll('.hover-this');

	const animateit = function (e) {
		const span = this.querySelector('span');
		const {
			offsetX: x,
			offsetY: y
		} = e, {
			offsetWidth: width,
			offsetHeight: height
		} = this,

		move = 25,
			xMove = x / width * (move * 2) - move,
			yMove = y / height * (move * 2) - move;

		span.style.transform = `translate(${xMove}px, ${yMove}px)`;

		if (e.type === 'mouseleave') span.style.transform = '';
	};


	$(document).on('mousemove', function (e) {
		mouseX = e.pageX;
		mouseY = e.pageY;
	});

	$(".portfolio-item").on('mouseenter', function () {
		cursor.addClass("active");
		follower.addClass("active");
	});

	$(".portfolio-item").on('mouseleave', function () {
		cursor.removeClass("active");
		follower.removeClass("active");
	});


	$(".cursor-item").on('mouseenter', function () {
		cursor.addClass("active");
		follower.addClass("active");
	});

	$(".cursor-item").on('mouseleave', function () {
		cursor.removeClass("active");
		follower.removeClass("active");
	});


	link.forEach(b => b.addEventListener('mousemove', animateit));
	link.forEach(b => b.addEventListener('mouseleave', animateit));
	window.addEventListener('mousemove', editCursor);
}

