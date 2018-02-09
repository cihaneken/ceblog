<?php get_header(); ?>

  <main class="main-page container-fluid mt-5 cebg-light">

<div class="row content">

	<div class="main-left col-md row mx-0 pl-2 pt-1 pb-1">

	
	<div class="post-ads col-sm-12 text-center bg-white mx-auto mb-4">

        <?php if ( is_active_sidebar( 'reklamlar' ) ) : ?><?php dynamic_sidebar( 'reklamlar' ); ?><?php endif; ?>

      </div>
	
	
	 <header class="page-header col-sm-12">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->



		<?php if ( have_posts() ) : ?>
			<?php

			while ( have_posts() ) : the_post();

				get_template_part( 'content', get_post_format() );

			endwhile;

			else :

			get_template_part( 'content' );

			endif;

			?>

	

	

	<div class="post-ads col-sm-12 text-center bg-white mx-auto mb-4">

        <?php if ( is_active_sidebar( 'reklamlar' ) ) : ?><?php dynamic_sidebar( 'reklamlar' ); ?><?php endif; ?>

      </div>

</div>

<?php get_sidebar(); ?>

</div>

  </main>

<?php get_footer(); ?>

