<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>RoboWar</title>
		<meta name="description" content="Inspiration for Article Intro Effects" />
		<meta name="keywords" content="title, header, effect, scroll, inspiration, medium, web design" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="assets/event_layout/css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="assets/event_layout/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="assets/event_layout/css/component.css" />
		<link rel="stylesheet" type="text/css" href="assets/event_layout/css/glow.css" />
		
		<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-159141308-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-159141308-1');
    </script>
	</head>
	<body class="demo-1">
		<div id="container" class="container intro-effect-push">
			<!-- Top Navigation -->
			
			<header class="header">
				<div class="bg-img"><img src="assets/event_layout/img/robo.jpg" alt="Background Image"/></div>
				<div class="title">
				<h1 style="color:#ff9900;text-shadow: 2px 2px 4px #000000;">Robowar</h1>
				</div>
			</header>
			<div class="title">
				
				<h1>Robowar</h1>
				<p class="subline">Event Information</p>

			</div>
            <article class="content">
				<div>
					<h1>About The Event<h1>
                    <p style="font-size: 30px"> Technunctus 2.0 presents to you for the first time the ultimate test of engineering excellence, ROBOWAR! Create, innovate and participate in this intense battle and defeat your opponents to your way to glory. Witness destructive robots fight for the ultimate prize. Come and be a part of this amazing event and enjoy the fierce battle amongst teams showcasing their epitome of skills and creativity.  </p>
                    <br>
					<h1>Guidelines</h1>
                    <p>Refer to <a href="assets/files/GENERAL_RULES_Robowar.pdf">Guidelines</a></p>
                    <br>
					<h1>Date and Time</h1>
					<p>13th - 14th March 2020</p>
					<br>
					<h1>Prizes</h1>
                    <p>Prizes worth ₹150,000/- to be won</p>
					<br>
					<h1>Registration Fee</h1>
                    <p>Rs 800/-</p>
					<br>
					<h1>Contact</h1>
					<p>Shivang Vijay:  +91-9079896145</p>
                    <br>
                    <blockquote>You just can't differentiate between a robot and the very best of humans.</blockquote>
                </div>
			</article>
			
			
			
			<article class="content">
				<div>
						
						<p><button><a href="https://www.townscript.com/e/robowar-213302"><div class="glowing"><h1 class="glow_h1">Pay<span class="first">H</span>e<span class="first">r</span>e</h1></div></a></button></p>
				</div>
				<center><p><a class="typeform-share button" href="https://codingclub.typeform.com/to/tdDhSQ" data-mode="drawer_left" style="display:inline-block;text-decoration:none;background-color:#00060C;color:white;cursor:pointer;font-family:Helvetica,Arial,sans-serif;font-size:23px;line-height:57.5px;text-align:center;margin:0;height:57.5px;padding:0px 38px;border-radius:7px;max-width:100%;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;font-weight:bold;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;" target="_blank">Fill Details </a> <script> (function() { var qs,js,q,s,d=document, gi=d.getElementById, ce=d.createElement, gt=d.getElementsByTagName, id="typef_orm_share", b="https://embed.typeform.com/"; if(!gi.call(d,id)){ js=ce.call(d,"script"); js.id=id; js.src=b+"embed.js"; q=gt.call(d,"script")[0]; q.parentNode.insertBefore(js,q) } })() </script>
			</p></center>
			</article>
			 
			
			
			
		</div><!-- /container -->
		<script src="assets/event_layout/js/classie.js"></script>
		<script>
			(function() {

				// detect if IE : from http://stackoverflow.com/a/16657946		
				var ie = (function(){
					var undef,rv = -1; // Return value assumes failure.
					var ua = window.navigator.userAgent;
					var msie = ua.indexOf('MSIE ');
					var trident = ua.indexOf('Trident/');

					if (msie > 0) {
						// IE 10 or older => return version number
						rv = parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
					} else if (trident > 0) {
						// IE 11 (or newer) => return version number
						var rvNum = ua.indexOf('rv:');
						rv = parseInt(ua.substring(rvNum + 3, ua.indexOf('.', rvNum)), 10);
					}

					return ((rv > -1) ? rv : undef);
				}());


				// disable/enable scroll (mousewheel and keys) from http://stackoverflow.com/a/4770179					
				// left: 37, up: 38, right: 39, down: 40,
				// spacebar: 32, pageup: 33, pagedown: 34, end: 35, home: 36
				var keys = [32, 37, 38, 39, 40], wheelIter = 0;

				function preventDefault(e) {
					e = e || window.event;
					if (e.preventDefault)
					e.preventDefault();
					e.returnValue = false;  
				}

				function keydown(e) {
					for (var i = keys.length; i--;) {
						if (e.keyCode === keys[i]) {
							preventDefault(e);
							return;
						}
					}
				}

				function touchmove(e) {
					preventDefault(e);
				}

				function wheel(e) {
					// for IE 
					//if( ie ) {
						//preventDefault(e);
					//}
				}

				function disable_scroll() {
					window.onmousewheel = document.onmousewheel = wheel;
					document.onkeydown = keydown;
					document.body.ontouchmove = touchmove;
				}

				function enable_scroll() {
					window.onmousewheel = document.onmousewheel = document.onkeydown = document.body.ontouchmove = null;  
				}

				var docElem = window.document.documentElement,
					scrollVal,
					isRevealed, 
					noscroll, 
					isAnimating,
					container = document.getElementById( 'container' ),
					trigger = container.querySelector( 'button.trigger' );

				function scrollY() {
					return window.pageYOffset || docElem.scrollTop;
				}
				
				function scrollPage() {
					scrollVal = scrollY();
					
					if( noscroll && !ie ) {
						if( scrollVal < 0 ) return false;
						// keep it that way
						window.scrollTo( 0, 0 );
					}

					if( classie.has( container, 'notrans' ) ) {
						classie.remove( container, 'notrans' );
						return false;
					}

					if( isAnimating ) {
						return false;
					}
					
					if( scrollVal <= 0 && isRevealed ) {
						toggle(0);
					}
					else if( scrollVal > 0 && !isRevealed ){
						toggle(1);
					}
				}

				function toggle( reveal ) {
					isAnimating = true;
					
					if( reveal ) {
						classie.add( container, 'modify' );
					}
					else {
						noscroll = true;
						disable_scroll();
						classie.remove( container, 'modify' );
					}

					// simulating the end of the transition:
					setTimeout( function() {
						isRevealed = !isRevealed;
						isAnimating = false;
						if( reveal ) {
							noscroll = false;
							enable_scroll();
						}
					}, 1200 );
				}

				// refreshing the page...
				var pageScroll = scrollY();
				noscroll = pageScroll === 0;
				
				disable_scroll();
				
				if( pageScroll ) {
					isRevealed = true;
					classie.add( container, 'notrans' );
					classie.add( container, 'modify' );
				}
				
				window.addEventListener( 'scroll', scrollPage );
				trigger.addEventListener( 'click', function() { toggle( 'reveal' ); } );
			})();
		</script>
	</body>
</html>
