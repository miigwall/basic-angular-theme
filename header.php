<?php 
$sitename = get_bloginfo('name'); 
$sitedescription = get_bloginfo('description'); 
?>
<!doctype html>
<head>
<base href="/">
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title><?php echo !empty($sitename) ? $sitename : 'A Basic Angular.js based WP Theme'; ?></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/bulma-0.5.1/css/bulma.css" />
<script type="text/javascript">var themeUrl = '<?php echo get_template_directory_uri(); ?>';</script>

<?php wp_head(); ?>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/angular/angular.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/angular/angular-animate.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/angular/angular-cookies.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/angular/angular-route.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/angular/angular-sanitize.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/app.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/app-services.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/app-directives.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/app-routes.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/app-controllers.js"></script>
</head>
<body ng-app="basicAngularThemeApp" ng-controller="siteCtrl">
	<section class="hero is-info is-medium">
	  <!-- Hero header: will stick at the top -->
	  <div class="hero-head">
	    <header class="nav">
	      <div class="container">
	        <div class="nav-left">
	          <a class="nav-item">
	          	<?php
				$custom_logo_id = get_theme_mod( 'custom_logo' );
				$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
				if ( has_custom_logo() ) {
				        echo '<img src="'. esc_url( $logo[0] ) .'">';
				} else {
				        echo '<h1>'. $sitename .'</h1>';
				}
	          	?>
	          </a>
	        </div>
	        <span class="nav-toggle">
	          <span></span>
	          <span></span>
	          <span></span>
	        </span>
	        <div class="nav-right nav-menu" ng-init="getTopMenu()">
	          <a ng-repeat="item in menus.top" class="nav-item" href="{{ item.url }}">{{ item.title }}</a>
	        </div>
	      </div>
	    </header>
	  </div>

	  <!-- Hero content: will be in the middle -->
	  <div class="hero-body">
	    <div class="container has-text-centered">
	      <h1 class="title">
	        <?php echo $sitename; ?>
	      </h1>
	      <h2 class="subtitle">
	        <?php echo $sitedescription; ?>
	      </h2>
	    </div>
	  </div>

	  <!-- Hero footer: will stick at the bottom -->
	  <div class="hero-foot">
	    <nav class="tabs is-boxed is-fullwidth">
	      <div class="container">
	        <ul ng-init="getMainMenu()">
	        	<li ng-repeat="item in menus.main">
	        		<a href="{{ item.url }}">{{ item.title }}</a>
	        	</li>
	        </ul>
	      </div>
	    </nav>
	  </div>
	</section>

	<section class="hero is-primary">
	  <div class="hero-body">
	    <div class="container">
	      <h1 class="title">
	        {{ current.primaryTitle }}
	      </h1>
	      <h2 class="subtitle">
	        {{ current.primarySubTitle }}
	      </h2>
	    </div>
	  </div>
	</section>

	<section class="hero">
	  <div class="hero-body">
	    <div class="container">
		<div class="columns">
		  <div class="column">
		  	<div ng-view></div>
		  </div>
		  <div class="column is-one-quarter">is-one-quarter</div>
		</div>
	    </div>
	  </div>
	</section>

	<footer class="footer">
	  <div class="container">
	    <div class="content has-text-centered">
	      <p>
	        <strong>Bulma</strong> by <a href="http://jgthms.com">Jeremy Thomas</a>. The source code is licensed
	        <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The website content
	        is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC ANS 4.0</a>.
	      </p>
	      <p>
	        <a class="icon" href="https://github.com/jgthms/bulma">
	          <i class="fa fa-github"></i>
	        </a>
	      </p>
	    </div>
	  </div>
	</footer>

</body>
</html>