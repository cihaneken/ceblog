      <div class="post-full hentry bg-white mx-auto my-4 w-100">
        <div class="entry-title bg-white border-bottom card-title m-3 p-2">
          <h1><?php the_title(); ?></h1>
        </div>
        <div class="entry-content bg-white card-text m-0 px-2 py-1">
<?php the_content(); ?>
        </div>
        <div class="entry-meta row m-0 px-2 py-1">
          <div class="entry-date col-sm-3 mx-0 px-0">
            <span><i class="far fa-calendar-alt"></i> <strong>Yayın T.:</strong><time class="post-full-meta-date entry-date published" datetime="<?php echo get_the_date('d m Y H:i'); ?>"><?php echo get_the_date(); ?></time></span>
          </div>
          <div class="entry-author col-sm-3 mx-0 px-0">
            <span><i class="far fa-user"></i> <strong>Yazar:</strong><?php the_author(); ?></span>
          </div>
          <div class="entry-cat col-sm-6 mx-0 px-0>
            <span><i class="fas fa-folder-open"></i> <strong>Kategori:</strong> 
			<?php $categories = get_the_category();
$separator = ' ';
$output = '';
if ( ! empty( $categories ) ) {
    foreach( $categories as $category ) {
        $output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
    }
    echo trim( $output, $separator );
} ?>
</span>
          </div>
          <div class="entry-tag col-sm-12 mx-0 px-0">
            <?php echo get_the_tag_list('<i class="fas fa-tags"></i> <strong>Etiketler:</strong> ',', ','');?>
          </div>
      </div>
      </div>