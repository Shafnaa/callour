<!-- Instagram -->
<section
          class="grid grid-cols-2 md:grid-cols-9 gap-2 md:gap-3 px-2 md:px-5 py-2 md:py-12"
        >
          <?php
          $blog_args = array(
            'post_type' => 'instagram',
            'posts_per_page' => 6
          );
        
          $blog_query = new WP_Query($blog_args);
        
          if ($blog_query->have_posts()) {
            while ($blog_query->have_posts()) {
              $blog_query->the_post();
              get_template_part('template-parts/instagram', 'posts');
            }
          }
          ?>
        </section>