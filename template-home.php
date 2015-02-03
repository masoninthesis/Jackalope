<?php
/*
Template Name: Jackalope Homepage
*/
?>

<?php get_template_part('templates/page', 'header'); ?>

<script type="text/javascript">
	$('document').ready(function(){
		$('#myToolTip1').tooltip();
		$('#myToolTip2').tooltip();
		$('#myToolTip3').tooltip();
		$('#myToolTip4').tooltip();
		$('#myToolTip5').tooltip();
		$('#myToolTip6').tooltip();
		$('#myToolTip7').tooltip();
		$('#myToolTip8').tooltip();
	});
</script>

		<div class="row home-section">
			<div class="col-sm-6 col-sm-push-6">
				<img class="graph-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home/graph.png" alt="graph" width="468" height="212" />
			</div>
			<div class="col-sm-6 col-sm-pull-6">
				<h2>Growth Hacking.</h2>
				<p>"What is a growth hacking? It’s simple, we use unconventional methods to make you more money. Whether you’re looking to bring more traffic to your website, or convert more of that traffic into dollars– we can help you with that."</p>
				<p><a href="#">View case studies</a></p>
				<button class="btn btn-defualt btn-lg home-btn" data-toggle="modal" data-target="#ppcModal">Get hacked <i class="fa fa-chevron-right"></i></button>
			</div>
		</div>
		<div class="row home-section">
			<div class="col-sm-6">
				<img class="web-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home/placeholder.png" alt="placeholder" width="462" height="267" />
			</div>
			<div class="col-sm-6">
				<h2>Websites.</h2>
				<p>"Jackalope is an open source company, which means that all the web templates we’ve built are available to you for free. The trick is to know how to install them, we can help you with that too in our tutorial videos. If it’s still too hard, you can pay us to do it. How awesome is that?"</p>
				<p><a href="#">View Tutorials</a></p>
				<button class="btn btn-defualt btn-lg home-btn" data-toggle="modal" data-target="#siteModal">Get a site <i class="fa fa-chevron-right"></i></button>
			</div>
		</div>
		<div class="row home-section video-section">
			<div class="col-sm-12">
				<h2>Videos.</h2>
				<p>"There's no faster way to communicate a message than through a story. We can craft your story though motion graphic or live action videos."</p>
				<div class="row">
					<div class="col-sm-4 col-xs-12">
						<center><a href="//fast.wistia.net/embed/iframe/5we0mp1icc?popover=true" class="wistia-popover[height=360,playerColor=313131,width=640]"><img src="https://embed-ssl.wistia.com/deliveries/c6afb1a5786de38608f9f309c4967079d90cc164.jpg?image_play_button=true&image_play_button_color=313131e0&image_crop_resized=150x84" alt="" /></a></center>
					</div>
					<div class="col-sm-4 col-xs-12">
						<center><a href="//fast.wistia.net/embed/iframe/d011xn7ttu?popover=true" class="wistia-popover[height=360,playerColor=313131,width=640]"><img src="https://embed-ssl.wistia.com/deliveries/77e279bf4fc4108966829d551d50df1a05570800.jpg?image_play_button=true&image_play_button_color=313131e0&image_crop_resized=150x84" alt="" /></a></center>
					</div>
					<div class="col-sm-4 col-xs-12">
						<center><a href="//fast.wistia.net/embed/iframe/r1fd522ig5?popover=true" class="wistia-popover[height=360,playerColor=313131,width=640]"><img src="https://embed-ssl.wistia.com/deliveries/09f4e6500305a34149860ed667f1152630d1833c.jpg?image_play_button=true&image_play_button_color=313131e0&image_crop_resized=150x84" alt="" /></a></center>
					</div>
				</div>
				<button class="btn btn-defualt btn-lg home-btn" data-toggle="modal" data-target="#videoModal">Get quote <i class="fa fa-chevron-right"></i></button>
			</div>
		</div>
