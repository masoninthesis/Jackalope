<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo home_url(); ?>/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/jackalope_dark.png" alt="<?php bloginfo('name'); ?>" width="30" height="30" /></a>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
    </nav>
  </div>
</header>

<section class="hero" id="hero">
	<div class="wrap container demo-1">
		<div class="row large-header" id="large-header">
			<canvas id="demo-canvas"></canvas>
			<div class="col-sm-12 main-head">
 			    <h1>Digital strategy.</h1>
 			    <h2>Arming you with the tools your business needs to kick ass.</h2>
			    <a href="//fast.wistia.net/embed/iframe/va8o82dilx?popover=true" class="wistia-popover[height=360,playerColor=ffffff,width=640]"><img src="https://embed-ssl.wistia.com/deliveries/b1d475a810d5c1b174c980e1e3ee033985c16c7a.jpg?image_play_button=true&image_play_button_color=ffffffe0&image_crop_resized=150x84" alt="" /></a>
<script charset="ISO-8859-1" src="//fast.wistia.com/assets/external/popover-v1.js"></script>
				<button href="#" type="button" type="button" class="btn btn-default hero-btn" data-toggle="modal" data-target="#myModal">Subscribe</button>
			</div>
	    </div>
	  </div> <!-- /Video -->
	    
	 <!-- <div class="alert-header col-sm-10 col-sm-offset-1"><!-- Optin --
	      <div class="row">
	        <h4 class="optin-h4">11 powerful lifehacks to your inbox, one day at a time.</h4>
	      </div>
		  <div class="row">
		      <div class="top-optin col-sm-offset-4">
		      
		      <!-- Mailchimp --
				<form class="form-inline" id="before_header" action="//howdareyou.us8.list-manage.com/subscribe/post?u=4c05f20503bc3a9d84d1a63c9&amp;id=488afa7633" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
					<input type="email" value="" name="EMAIL" class="form-control email" id="mce-EMAIL" placeholder="Email address.." required>
				<button id="header-optin-click" name="submit" onClick="ga('send', 'event', 'optin', 'subscribe', 'header optin');" class="submit btn btn-primary btn-lg" type="submit" value="Submit" tabindex="501">I Dare</button>
				
				</form> <!-- /Mailchimp -->
		      </div>
	      </div>
	    </div>
	  </div>
	</div>
</section>
<script src="http://masonlawlor.com//assets/TweenLite.min.js"></script>
<script src="http://masonlawlor.com//assets/EasePack.min.js"></script>
<script src="http://masonlawlor.com//assets/rAF.js"></script>
<script src="http://masonlawlor.com//assets/demo-1.js"></script>

