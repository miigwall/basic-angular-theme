<?php $sitename = get_bloginfo('name'); ?>
<!doctype html>
<head>
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
</head>
<body ng-app="basicAngularThemeApp">
	<section class="hero is-info is-medium">
	  <!-- Hero header: will stick at the top -->
	  <div class="hero-head">
	    <header class="nav">
	      <div class="container">
	        <div class="nav-left">
	          <a class="nav-item">
	            <img src="images/bulma-type-white.png" alt="Logo">
	          </a>
	        </div>
	        <span class="nav-toggle">
	          <span></span>
	          <span></span>
	          <span></span>
	        </span>
	        <div class="nav-right nav-menu">
	          <a class="nav-item is-active">
	            Home
	          </a>
	          <a class="nav-item">
	            Examples
	          </a>
	          <a class="nav-item">
	            Documentation
	          </a>
	          <span class="nav-item">
	            <a class="button is-info is-inverted">
	              <span class="icon">
	                <i class="fa fa-github"></i>
	              </span>
	              <span>Download</span>
	            </a>
	          </span>
	        </div>
	      </div>
	    </header>
	  </div>

	  <!-- Hero content: will be in the middle -->
	  <div class="hero-body">
	    <div class="container has-text-centered">
	      <h1 class="title">
	        Title
	      </h1>
	      <h2 class="subtitle">
	        Subtitle
	      </h2>
	    </div>
	  </div>

	  <!-- Hero footer: will stick at the bottom -->
	  <div class="hero-foot">
	    <nav class="tabs is-boxed is-fullwidth">
	      <div class="container">
	        <ul>
	          <li class="is-active"><a>Overview</a></li>
	          <li><a>Modifiers</a></li>
	          <li><a>Grid</a></li>
	          <li><a>Elements</a></li>
	          <li><a>Components</a></li>
	          <li><a>Layout</a></li>
	        </ul>
	      </div>
	    </nav>
	  </div>
	</section>

	<section class="hero is-primary">
	  <div class="hero-body">
	    <div class="container">
	      <h1 class="title">
	        Primary title
	      </h1>
	      <h2 class="subtitle">
	        Primary subtitle
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