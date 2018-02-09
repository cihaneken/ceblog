<article class="row">
<div class="col-sm-12 row m-0 p-0">
<header class="col-sm-12">
<?php
	the_title( sprintf( '<h5 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' );
?>
</header>
<main class="col-sm-12" style="font-size:14px;">
<figure class="float-left pr-0 mr-1" style="width:110px;">
<?php if ( has_post_thumbnail() ) { the_post_thumbnail('thumbnail' ,array('class' => 'img-fluid')); } else { echo '<img class="img-fluid" src="' . esc_url( get_template_directory_uri() ). '/img/no-post-thumbnail.jpg" alt="', the_title(),'" />';
					} ?>
</figure>
<?php the_excerpt();?>
</main>
</div>
<footer class="">
</footer>

</article>