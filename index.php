<?php
	/*
	 * Created by PhpStorm.
	 * User: Hardik
	 * Date: 01-02-2017
	 * Time: 21:12
	 * Patch #1
	 */
	require 'lib/conf.php';
	if(!isset($_GET['id']) || $_GET['id']<1)
	{
		header("Location: http://www.alphanuke.com");
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
	  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">

    <title>AlphaNuke Download Link Terminal</title>

    <!-- Bootstrap core CSS -->
    <link href="/assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/assets/css/style.css" rel="stylesheet">
    <link href="/assets/css/font-awesome.min.css" rel="stylesheet">


    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="/assets/js/modernizr.js"></script>
  </head>

  <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" target="_blank" href="http://www.alphanuke.com">AlphaNuke</a>
        </div>
        <div class="navbar-collapse collapse navbar-right">
          <!--<ul class="nav navbar-nav">
            <li><a href="index.html">HOME</a></li>
            <li><a href="about.html">ABOUT</a></li>
            <li><a href="contact.html">CONTACT</a></li>
          </ul>-->
        </div><!--/.nav-collapse -->
      </div>
    </div>


	<!-- *****************************************************************************************************************
	 BLUE WRAP
	 ***************************************************************************************************************** -->
	<div id="blue">
	    <div class="container">
			<div class="row">
				<h3>Please wait until Download Link Appears</h3>
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /blue -->

	<!-- *****************************************************************************************************************
	 TITLE & CONTENT
	 ***************************************************************************************************************** -->

	 <div class="container mt">
	 	<div class="row">
		 	<div class="col-lg-10 col-lg-offset-1 centered">
			 	<! --/Carousel -->
		 	</div>

		 	<div class="col-lg-2 col-lg-offset-1 centered">
			 	<!--<div class="spacing"></div>
		 		<h4>Project Details</h4>
		 		<div class="hline"></div>
		 		<p><b>Date:</b> April 18, 2014</p>
		 		<p><b>Author:</b> Marcel Newman</p>
		 		<p><b>Categories:</b> Illustration, Web Design, Wordpress</p>
		 		<p><b>Tagged:</b> Flat, UI, Development</p>
		 		<p><b>Client:</b> Wonder Corp.</p>
		 		<p><b>Website:</b> <a href="http://blacktie.co">http://blacktie.co</a></p>-->
		 	</div>
		    <div class="col-lg-4 centered col-lg-offset-1">
			    <div id="wait-block" style="display: block">
			    <h4>Wait for </h4><h1><div id="counter-down">20</div></h1><h4> seconds to start Download...</h4>
			    <br>
			    </div>
			    <div id="down-block" style="display: none">
			    <div class="hline"></div>
			    <h3>File Password : <code>pass_word</code></h3>
			    <p></p>
			    <div class="hline"></div>
			    <br><br>
			    <a target="_blank" href="<?php if($to>=1) { echo "http://go.alphanuke.com/to/".$to; } else { echo "http://www.alphanuke.com"; } ?>" id="down" class="btn btn-danger btn-lg">Direct Download</a>
			    </div>
		    </div>
		    <div class="col-lg-2 col-lg-offset-1 centered">
			    <!--<div class="spacing"></div>
			    <h4>Project Details</h4>
			    <div class="hline"></div>
			    <p><b>Date:</b> April 18, 2014</p>
			    <p><b>Author:</b> Marcel Newman</p>
			    <p><b>Categories:</b> Illustration, Web Design, Wordpress</p>
			    <p><b>Tagged:</b> Flat, UI, Development</p>
			    <p><b>Client:</b> Wonder Corp.</p>
			    <p><b>Website:</b> <a href="http://blacktie.co">http://blacktie.co</a></p>-->
		    </div>

	 	</div><! --/row -->
	 </div><! --/container -->
    <br><br><br><br><br><br>

	<!-- *****************************************************************************************************************
	 FOOTER
	 ***************************************************************************************************************** -->
	 <div id="footerwrap">
	 	<div class="container">
		 	<div class="row">
		 		<div class="col-lg-4">
		 			<h4>About - go.AlphaNuke.com</h4>
		 			<div class="hline-w"></div>
		 			<p>This is dedicated redirection system of AlphaNuke.com, which avails the direct link of latest and desired software you ever wanted. Your need is just a click away..!</p>
		 		</div>
		 		<div class="col-lg-4">
		 			<h4>Social Links</h4>
		 			<div class="hline-w"></div>
		 			<p>
		 				<a href="https://plus.google.com/118282109843275736061" target="_blank"><i class="fa fa-google-plus"></i></a>
		 				<a href="https://www.facebook.com/AlphaNuke" target="_blank"><i class="fa fa-facebook"></i></a>
		 				<a href="http://www.alphanuke.com/" target="_blank"><i class="fa fa-globe"></i></a>
		 				<!--<a href="#"><i class="fa fa-instagram"></i></a>
		 				<a href="#"><i class="fa fa-tumblr"></i></a>-->
		 			</p>
		 		</div>
		 		<div class="col-lg-4">
		 			<h4>Links</h4>
		 			<div class="hline-w"></div>
		 			<p><a href="http://go.alphanuke.com/members/">Members</a></p>
				    <p><a href="http://go.alphanuke.com/Administration">Administrator</a></p>
		 		</div>

		 	</div><! --/row -->
	 	</div><! --/container -->
	 </div><! --/footerwrap -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->
    <script src="/assets/js/bootstrap.min.js"></script>
	<script src="/assets/js/retina-1.1.0.js"></script>
	<script src="/assets/js/jquery.hoverdir.js"></script>
	<script src="/assets/js/jquery.hoverex.min.js"></script>
	<script src="/assets/js/jquery.prettyPhoto.js"></script>
  	<script src="/assets/js/jquery.isotope.min.js"></script>
  	<script src="/assets/js/custom.js"></script>

    <script src="/assets/js/jquery.easing.js" type="text/javascript"></script>
    <script src="/assets/js/counter.min.js" type="text/javascript"></script>
    <script>

        var cDown = $("#counter-down");
        cDown.counter({
            autoStart: true,
            countTo: 0,
            duration: 21000,
            easing: "easeOutCubic"
        });

        $(document).ready(
            function()
            {
                counterUp.counter("start");
                cDown.counter("start");
            });
        setTimeout( function(){
            $("#down-block").attr("style", "display: block");
            $("#wait-block").attr("style", "display: none");
        }  , 20000 );

        // Portfolio
(function($) {
	"use strict";
	var $container = $('.portfolio'),
		$items = $container.find('.portfolio-item'),
		portfolioLayout = 'fitRows';

		if( $container.hasClass('portfolio-centered') ) {
			portfolioLayout = 'masonry';
		}

		$container.isotope({
			filter: '*',
			animationEngine: 'best-available',
			layoutMode: portfolioLayout,
			animationOptions: {
			duration: 750,
			easing: 'linear',
			queue: false
		},
		masonry: {
		}
		}, refreshWaypoints());

		function refreshWaypoints() {
			setTimeout(function() {
			}, 1000);
		}

		$('nav.portfolio-filter ul a').on('click', function() {
				var selector = $(this).attr('data-filter');
				$container.isotope({ filter: selector }, refreshWaypoints());
				$('nav.portfolio-filter ul a').removeClass('active');
				$(this).addClass('active');
				return false;
		});

		function getColumnNumber() {
			var winWidth = $(window).width(),
			columnNumber = 1;

			if (winWidth > 1200) {
				columnNumber = 5;
			} else if (winWidth > 950) {
				columnNumber = 4;
			} else if (winWidth > 600) {
				columnNumber = 3;
			} else if (winWidth > 400) {
				columnNumber = 2;
			} else if (winWidth > 250) {
				columnNumber = 1;
			}
				return columnNumber;
			}

			function setColumns() {
				var winWidth = $(window).width(),
				columnNumber = getColumnNumber(),
				itemWidth = Math.floor(winWidth / columnNumber);

				$container.find('.portfolio-item').each(function() {
					$(this).css( {
					width : itemWidth + 'px'
				});
			});
		}

		function setPortfolio() {
			setColumns();
			$container.isotope('reLayout');
		}

		$container.imagesLoaded(function () {
			setPortfolio();
		});

		$(window).on('resize', function () {
		setPortfolio();
	});
})(jQuery);

    </script>
  </body>
</html>
