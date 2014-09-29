<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->

  <?php
    do_action('get_header');
    // Use Bootstrap's navbar if enabled in config.php
    if (current_theme_supports('bootstrap-top-navbar') && is_category(podcast) ) {
      get_template_part('templates/header-podcast');
    } else if (current_theme_supports('bootstrap-top-navbar') && !is_page(podcast) ) {
      get_template_part('templates/header-top-navbar');
    } else {
      get_template_part('templates/header');
    }
  ?>

  <div class="supreme-container">

  <div class="wrap container" role="document">
    <div class="content row">
      <main class="main <?php echo roots_main_class(); ?>" role="main">
        <?php include roots_template_path(); ?>
      </main><!-- /.main -->
      <?php if (roots_display_sidebar()) : ?>
        <aside class="sidebar <?php echo roots_sidebar_class(); ?>" role="complementary">
          <?php include roots_sidebar_path(); ?>
        </aside><!-- /.sidebar -->
      <?php endif; ?>
    </div><!-- /.content -->
  </div><!-- /.wrap -->

  <?php get_template_part('templates/footer'); ?>

    </div> <!-- SUPREME -->
    
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
				    	<div class="col-sm-4 col-xs-12"><center><a href="http://jackalope.tv/pricing/" type="button" class="btn btn-default btn-lg ppc-btn">PPC</a></center></div>
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
          	<center></center>
    			
	      
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

</body>
</html>
