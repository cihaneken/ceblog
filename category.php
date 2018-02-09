<?php get_header(); ?>
  <main class="main-page container-fluid mt-5 cebg-light">
<div class="row content">
	<div class="main-left col-lg">
			<div class="post-ads col-sm-12 text-center bg-white mx-auto mt-4">
        <?php if ( is_active_sidebar( 'reklamlar' ) ) : ?><?php dynamic_sidebar( 'reklamlar' ); ?><?php endif; ?>
      		</div>
		
	  <header class="page-header col-sm-12">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

<div class="row px-3">
		<?php if ( have_posts() ) : ?>
			<?php

			while ( have_posts() ) : the_post();

				get_template_part( 'content', get_post_format() );

			endwhile;

			else :

			get_template_part( 'content' );

			endif;

			?>

</div>
	<div class="post-ads text-center bg-white mx-auto mb-4">

        <?php if ( is_active_sidebar( 'reklamlar' ) ) : ?><?php dynamic_sidebar( 'reklamlar' ); ?><?php endif; ?>

      </div>

</div>

<?php get_sidebar(); ?>

</div>

  </main>

<?php get_footer(); ?>

