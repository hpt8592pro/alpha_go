
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
				<p style="color: white"><a style="color: white" href="http://go.alphanuke.com/members/">Members</a></p>
				<p style="color: white"><a style="color: white" href="http://go.alphanuke.com/Administration">Administrator</a></p>
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