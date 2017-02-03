<?php
	date_default_timezone_set('Asia/Kolkata');
	$time = date("ymdhis");
	echo $time;
	die;
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
		//header("Location: http://www.alphanuke.com");
	}
	require 'parts/header.php';
?>


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
<?php
	require 'parts/footer.php';
?>