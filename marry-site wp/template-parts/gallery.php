<section id="gallery" class="section gallery">
  <div class="gallery-container">
    <div class="gallery-block">
      <?php		
        global $post;
          $query = new WP_Query( [
            'posts_per_page' => 999,
            'post_type' => 'gallery'
          ] );

          if ( $query->have_posts() ) {
            while ( $query->have_posts() ) {
              $query->the_post();
              ?>
              <div class="gallery-block__item">
                <div class="gallery-block__wrap">
                  <img src="<?php echo get_the_post_thumbnail_url() ?>" class="gallery-item__img">
                </div>
              </div>
              <?php 
            }
          } else {
            // Постов не найдено
        }

      wp_reset_postdata(); // Сбрасываем $post
      ?>
      
      
    </div>
    
  </div>
</section>