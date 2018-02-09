    <div class="main-right bg-white col-lg mx-auto px-0">
	<div class="container-fluid m-0 px-0">
	<div class="card-header col-sm-12"><h3>Kategorilerden Son Yazılar</h3></div>
 <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home">Wordpress</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1">Webmaster</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu2">SEO</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
      <?php
	  // The Query
	  query_posts( array ( 'category_name' => 'inspiration', 'posts_per_page' => -1 ) );
	  // The Loop
	 while ( have_posts() ) : the_post();

	 get_template_part( 'category-list', get_post_format() );
	 ?>

	  <?php endwhile;

	  // Reset Query
	  wp_reset_query();

	?>
    </div>
    <div id="menu1" class="container tab-pane fade"><br>
       <?php
	  // The Query
	  query_posts( array ( 'category_name' => 'visualization', 'posts_per_page' => -1 ) );
	  // The Loop
	 while ( have_posts() ) : the_post();

	 get_template_part( 'category-list', get_post_format() );
	 ?>

	  <?php endwhile;

	  // Reset Query
	  wp_reset_query();

	?>
    </div>
    <div id="menu2" class="container tab-pane fade"><br>
        <?php
	  // The Query
	  query_posts( array ( 'category_name' => 'design', 'posts_per_page' => -1 ) );
	  // The Loop
	 while ( have_posts() ) : the_post();

	 get_template_part( 'category-list', get_post_format() );
	 ?>

	  <?php endwhile;

	  // Reset Query
	  wp_reset_query();

	?>
    </div>
  </div>
	</div>
	<div class="container-fluid m-0 px-0">
      <?php if ( ! is_single () && is_active_sidebar( 'sidebar-1' ) ) : ?><?php dynamic_sidebar( 'sidebar-1' ); ?><?php endif; ?>
    </div>
	<div class="container-fluid m-0 px-0">
	<?php if ( is_single () && is_active_sidebar( 'sidebar-2' )  ) : ?><?php dynamic_sidebar( 'sidebar-2' ); ?><?php endif; ?>
	</div>
	</div>