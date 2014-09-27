<?php
/*
Template Name: HDY Homepage
*/
?>

<?php get_template_part('templates/page', 'header'); ?>

		<div class="row home-section">
			<div class="col-sm-6 col-sm-push-6">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home/graph.png" alt="graph" width="468" height="212" />
			</div>
			<div class="col-sm-6 col-sm-pull-6">
				<h4>Growth Hacking.</h4>
				<p>"What is a growth hacking? It’s simple, we use unconventional methods to make you more money. Whether you’re looking to bring more traffic to your website, make more of that traffic convert, or both– we can help you with that. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor."</p>
				<p><a href="#">link goes here</a></p>
				<button class="btn btn-defualt btn-md">View Pricing</button>
			</div>
		</div>
		<div class="row home-section">
			<div class="col-sm-6">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home/placeholder.png" alt="placeholder" width="462" height="267" />
			</div>
			<div class="col-sm-6">
				<h4>Websites.</h4>
				<p>"Jackalope is an open source company, which means that all the web templates we’ve built are available to you for free. The trick is to know how to install them, we can help you with that too in our tutorial videos. If it’s still too hard, you can pay us to do it. How awesome is that?"</p>
				<p><a href="#">Tutorials</a></p>
				<button class="btn btn-defualt btn-md">Browse Themes</button>
			</div>
		</div>
		<div class="row home-section">
			<div class="col-sm-12">
				<h4>Videos.</h4>
				<p>"What is a growth hacking? It’s simple, we use unconventional methods to make you more money. hether you’re looking to bring more traffic to your website, make more of that traffic convert, or both– we can help you with that. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor."</p>
				<div class="row">
					<div class="col-xs-4">
						<center><a href="//fast.wistia.net/embed/iframe/5tl43fy1m9?popover=true" class="wistia-popover[height=360,playerColor=a7aab4,width=640]"><img src="https://embed-ssl.wistia.com/deliveries/b9dbc6afad01a1a2f8662ecf5054e48f17e65088.jpg?image_play_button=true&image_play_button_color=a7aab4e0&image_crop_resized=150x84" alt="" /></a></center>
					</div>
					<div class="col-xs-4">
						<center><a href="//fast.wistia.net/embed/iframe/5tl43fy1m9?popover=true" class="wistia-popover[height=360,playerColor=a7aab4,width=640]"><img src="https://embed-ssl.wistia.com/deliveries/b9dbc6afad01a1a2f8662ecf5054e48f17e65088.jpg?image_play_button=true&image_play_button_color=a7aab4e0&image_crop_resized=150x84" alt="" /></a></center>
					</div>
					<div class="col-xs-4">
						<center><a href="//fast.wistia.net/embed/iframe/5tl43fy1m9?popover=true" class="wistia-popover[height=360,playerColor=a7aab4,width=640]"><img src="https://embed-ssl.wistia.com/deliveries/b9dbc6afad01a1a2f8662ecf5054e48f17e65088.jpg?image_play_button=true&image_play_button_color=a7aab4e0&image_crop_resized=150x84" alt="" /></a></center>
					</div>
				</div>
				<button class="btn btn-defualt btn-md">Get quote</button>
			</div>
		</div> 

<!-- pop-up modal -->
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

   <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
        	<center><h3>Get with the program.</h3></center>
          	<div class="modal-body">
          	<center><iframe src="//fast.wistia.net/embed/iframe/5tl43fy1m9?videoFoam=true" allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed" name="wistia_embed" allowfullscreen mozallowfullscreen webkitallowfullscreen oallowfullscreen msallowfullscreen width="640" height="360"></iframe><script src="//fast.wistia.net/assets/external/iframe-api-v1.js"></script></center>
    			
	      
					      <!-- Mailchimp -->
							<center><form class="form-inline" id="before_header" action="//smartk.us8.list-manage.com/subscribe/post?u=99a776394eb3b3549e7c5e53c&amp;id=6a60137cbc" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
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