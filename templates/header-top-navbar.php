<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo home_url(); ?>/"><img src="http://masonlawlor.com//howdareyoudotio/wp-content/themes/howdareyou/assets/img/HDY.png" alt="<?php bloginfo('name'); ?>" /></a>
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
	<div class="wrap container">
		<div class="row">
			<div class="col-sm-12">
 			    <h1>Welcome to my mind.</h1>
 			    <h2>This is my external operating system.</h2>
			    <a href="//fast.wistia.net/embed/iframe/5tl43fy1m9?popover=true" class="wistia-popover[height=360,playerColor=a7aab4,width=640]"><img src="https://embed-ssl.wistia.com/deliveries/b9dbc6afad01a1a2f8662ecf5054e48f17e65088.jpg?image_play_button=true&image_play_button_color=a7aab4e0&image_crop_resized=150x84" alt="" /></a>
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

