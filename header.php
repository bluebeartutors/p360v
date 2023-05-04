<!DOCTYPE html>
<html lang="en" class="no-js no-svg">
<head>
<meta name="google-site-verification" content="kA33oYIgmA14J3Fcy-WBFK8rV6LRlf6W7Vfh7Z82_Vs" />
<meta name="msvalidate.01" content="E88998ED954350179E2EC8DBD661CD15" />
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">
  <!-- Bootstrap core CSS -->
  <link href="<?php echo get_theme_file_uri( '/vendor/bootstrap/css/bootstrap.min.css' );?>" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Custom styles for this template -->
  <link href="<?php echo get_theme_file_uri('/vendor/custom.css');?>" rel="stylesheet">
  <link href="<?php echo get_theme_file_uri('/vendor/font-awesome-4.7.0/css/font-awesome.min.css');?>" rel="stylesheet">
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-133675806-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-133675806-1');
</script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
   <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
		 <?php		
					if(has_custom_logo())
					{
					// Display the Custom Logo
					the_custom_logo();
					}
		 ?>
       <!-- <a class="navbar-brand" href="<?php echo site_url();?>">PROPERTY 360 VIEW</a> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="https://property360view.net/">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
	    <li class="nav-item">
              <a class="nav-link" href="https://property360view.net/pricing/#table1">Prices</a>
            </li>
	    <li class="nav-item">
              <a class="nav-link" href="#faq">FAQs</a>
            </li>
	    <li class="nav-item">
              <a class="nav-link" href="https://property360view.net/blogs/">Blogs</a>
            </li>
	    <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
	    <li class="nav-item nav-item-login">
              <a class="nav-link login-link" href="#">|<i class="fa fa-user fa-fw"></i>Login</a>
			
            </li>
          </ul>
        </div>
      </div>
    </nav>
 <!-- Navigation  Over -->