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
				<p>"What is a growth hacking? It’s simple, we use unconventional methods to make you more money. Whether you’re looking to bring more traffic to your website, or convert more of that traffic into dollars– we can help you with that."</p>
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

<!-- ppcModal -->
	<div class="modal fade" id="ppcModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<center><h3 class="modal-title">What kind of growth do you seek?</h3></center>
				</div>
				<div class="modal-body">
			    	<div class="row">
				    	<div class="col-sm-4 col-xs-12"><center><button type="button" class="btn btn-default btn-lg ppc-btn" id="myToolTip1" data-toggle="tooltip" data-placement="bottom" title="Coming Soon">CRO</button></center></div>
				    	<div class="col-sm-4 col-xs-12"><center><a href="http://localhost:8888/Jackalope/ppc-pricing/" type="button" class="btn btn-default btn-lg ppc-btn">PPC</a></center></div>
				    	<div class="col-sm-4 col-xs-12"><center><button type="button" class="btn btn-default btn-lg ppc-btn" id="myToolTip2" data-toggle="tooltip" data-placement="bottom" title="Coming Soon">SEO</button></center></div>
			    	</div>   	
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
<!-- /ppcModal -->

<!-- siteModal -->
	<div class="modal fade" id="siteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<center><h3 class="modal-title">What are you looking for?</h3></center>
				</div>
				<div class="modal-body">
			    	<div class="row">
				    	<div class="col-sm-4 col-xs-12"><center><button type="button" class="btn btn-default btn-lg ppc-btn" id="myToolTip3" data-toggle="tooltip" data-placement="bottom" title="Coming Soon">Browse Themes</button></center></div>
				    	<div class="col-sm-4 col-xs-12"><center><button type="button" class="btn btn-default btn-lg ppc-btn" id="myToolTip4" data-toggle="tooltip" data-placement="bottom" title="Coming Soon">Tutorials</button></center></div>
				    	<div class="col-sm-4 col-xs-12"><center><button type="button" class="btn btn-default btn-lg ppc-btn" id="myToolTip5" data-toggle="tooltip" data-placement="bottom" title="Coming Soon">Design on Demand</button></center></div>
			    	</div>   	
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
<!-- /siteModal -->

<!-- videoModal -->
	<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<center><h3 class="modal-title">What are you looking for?</h3></center>
				</div>
				<div class="modal-body">
			    	<div class="row">
				    	<div class="col-sm-4 col-xs-12"><center><button type="button" class="btn btn-default btn-lg ppc-btn" id="myToolTip6" data-toggle="tooltip" data-placement="bottom" title="Coming Soon">Animation</button></center></div>
				    	<div class="col-sm-4 col-xs-12"><center><button type="button" class="btn btn-default btn-lg ppc-btn" id="myToolTip7" data-toggle="tooltip" data-placement="bottom" title="Coming Soon">Live Action</button></center></div>
				    	<div class="col-sm-4 col-xs-12"><center><button type="button" class="btn btn-default btn-lg ppc-btn" id="myToolTip8" data-toggle="tooltip" data-placement="bottom" title="Coming Soon">Tutorials</button></center></div>
			    	</div>   	
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
<!-- /videoModal -->

<!-- pop-up script -->
<script type="text/javascript"
        src="//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.3.1/jquery.cookie.min.js"></script>
  <script type="text/javascript">
    function showPopup() {
      $('#myModal').modal('show');
    }

    function timeOut() {
      if ($.cookie('foreverjobless') !== '1') {
        setTimeout(function() {
          showPopup();
          jQuery.cookie('foreverjobless', '1', { expires: 7 });
        }, 400000);
      }
    }

    $(document).ready(function () {
      timeOut();
      stickyElement();
    });
  </script>
<!-- /pop-up script -->

<!-- popup modal -->
   <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
        	<center><h3>Get with the program.</h3></center>
          	<div class="modal-body">
          	<center><iframe src="//fast.wistia.net/embed/iframe/5tl43fy1m9?videoFoam=true" allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed" name="wistia_embed" allowfullscreen mozallowfullscreen webkitallowfullscreen oallowfullscreen msallowfullscreen width="640" height="360"></iframe><script src="//fast.wistia.net/assets/external/iframe-api-v1.js"></script></center>
    			
	      
					      <!-- Mailchimp -->
							<center><form class="form-inline" id="before_header" action="//jackalope.us9.list-manage.com/subscribe/post?u=74a8ddb6f1ff4b3eeb5966632&amp;id=fc7436b5de" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
								<input type="email" value="" name="EMAIL" class="form-control email" id="mce-EMAIL" placeholder="Email address.." required>
							<button id="header-optin-click" name="submit" onClick="ga('send', 'event', 'optin', 'subscribe', 'header optin');" class="modal-btn btn btn-lg" type="submit" value="Submit" tabindex="501">Subscribe</button>
							
							</form></center> <!-- /Mailchimp -->
	      </div><!-- /optin -->
		  <br><br>
          </div>
        </div>
      </div>
    </div>
<!-- /pop-up modal -->