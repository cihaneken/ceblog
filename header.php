<!DOCTYPE html>
<html lang="tr">
<head>
  <title><?php wp_title(); ?></title>
  <meta charset="<?php bloginfo( 'charset' ); ?>"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#66ACFF">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
  <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/style.css">
    <style>
  html, body, h1, h2, h3, h4, h5, h6, p, a {font-family: "Roboto", cursive, sans-serif;}
  h1{font-size:36px} h2{font-size:30px} h3{font-size:24px} h4{font-size:20px} h5{font-size:18px} h6{font-size:16px}
  a{color:#0056b3;}
  
  body, .site-top, .navbar{max-width:1920px;}
  body, .post-full{box-shadow:0 0 4px 0 rgba(0,0,0,0.14);}
  .main-right{max-width:350px;}
  .cebg-primary{background-color:#66ACFF!important;}
  .cebg-light{background-color:#fcfcfc;}
  .cebg-grey{background-color:rgba(0,0,0,.07);}
  .post{box-shadow:0 1px 4px 0 rgba(0,0,0,0.14);width:300px;}
  .post img{border-radius:4px 4px 0 0;width:300px;height:200px;}
  .post p, .post-full p{font-size:18px;margin-bottom:0;padding-bottom:0;}
  .card-title{margin:0 2px -5px 5px;padding:0px;}
  .card-title a{font-size:20px;}
  .entry-meta{border-top:1px solid #007bff;}
  .main-right{box-shadow:0 0 4px 0 rgba(0,0,0,0.14);}
  .widget ul, .site-footer ul {display: -webkit-box;display: -ms-flexbox;display: flex;-webkit-box-orient: vertical;-webkit-box-direction: normal;-ms-flex-direction: column;flex-direction: column;padding-left: 0;margin-bottom: 0;}
  .widget ul li, .site-footer ul li {position: relative;display: block;padding: .75rem 1.25rem;margin-bottom: -1px;background-color: #fff;border: 1px solid rgba(0,0,0,.125);}
  .post-ads{height:90px;}
  .nav-item a {display: block;padding: .5rem 1rem;color: #343a40!important;}
  .widget div {padding: 10px;}
	</style>
  <?php wp_head(); ?>
</head>
<body class="cebg-light mx-auto">
  <header class="site-top mx-auto">
    <nav class="navbar navbar-expand-lg fixed-top mx-auto cebg-primary">
      <a class="navbar-brand cebg-primary text-dark" href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ); ?></a>
		<button class="navbar-toggler btn-outline-light" type="button" data-toggle="collapse" data-target="#navbardegistir01" aria-controls="navbardegistir01" aria-expanded="false" aria-label="Gezinmeyi aç / kapat">
        <i class="fas fa-align-justify"></i>
		</button>

      <div class="collapse navbar-collapse" id="navbardegistir01">
									<?php
										// Primary navigation menu.
										wp_nav_menu( array(
											'container' => false,
											'container_class' => '',
											'menu_class'     => 'navbar-nav mr-auto mt-2 mt-lg-0',
											'theme_location' => 'siteheadermenu',
											'fallback_cb'    => false
										) );
									?>					
		<form class="form-inline my-2 my-lg-0" role="search" method="get" action="<?php echo home_url( '/' ); ?>">
		<input class="form-control mr-sm-2" type="search"  placeholder="Aramak istermisin?" name="s">
        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Bul</button>
        </form>
      </div>
    </nav>
  </header>