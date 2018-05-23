<section class="entry-content cf" itemprop="articleBody">
  
  <?php

    the_content();

    
    wp_link_pages( array(
      'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'fitspiration' ) . '</span>',
      'after'       => '</div>',
      'link_before' => '<span>',
      'link_after'  => '</span>',
    ) );
  ?>
</section> <?php // end article section ?>