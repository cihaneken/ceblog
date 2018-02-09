	<div class="post bg-white card my-3 mx-auto">
        <div class="post-thumbnail card-img-top">
          <?php if ( has_post_thumbnail() ) { the_post_thumbnail('medium' ,array('class' => 'img-responsive responsive--full entry-thumbnail')); } else { echo '<img class="img-responsive responsive--full entry-thumbnail" src="' . esc_url( get_template_directory_uri() ). '/img/no-post-thumbnail.jpg" alt="', the_title(),'" />';
					} ?>
        </div>
		<div class="entry-title card-title">
          <?php
			if ( is_single() ) :
				the_title( '<h1>', '</h1>' );
			else :
				the_title( sprintf( '<h3><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' );
			endif;
		?>
        </div>
        <div class="entry-summary bg-white text-justify card-text m-0 px-2 py-1">
          <!--?php the_excerpt(); ?-->
        </div>
        <div class="entry-meta row m-0 px-2 py-1">
          <div class="entry-date col-sm-6 px-0">
            <span><i class="far fa-calendar-alt"></i> <time class="post-full-meta-date entry-date published" datetime="<?php echo get_the_date('d m Y H:i'); ?>"><?php echo get_the_date(); ?></time></span>
          </div>
          <div class="entry-author col-sm-6 px-0">
            <span><i class="far fa-user"></i> <?php the_author(); ?></span>
          </div>
          <div class="entry-read text-center col-sm-12">
            <a href="<?php echo esc_url( get_permalink());?>"><i class="fas fa-mouse-pointer"></i> Devam...</a>
          </div>
      </div>
      </div><!--post-->