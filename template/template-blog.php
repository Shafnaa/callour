<!-- Blog -->
<section class="px-5 py-6 md:py-12" id="blog">
          <div class="max-w-screen-xl mx-auto">
            <h3 class="font-bold text-2xl md:text-4xl mb-7">
              Interesting Story
            </h3>
            <div
              class="scrollbar-hide flex flex-wrap md:grid md:grid-cols-3 gap-6 overflow-x-auto max-md:snap-x max-md:snap-mandatory"
            >
              <?php
              $blog_args = array(
                'post_type' => 'post',
                'posts_per_page' => 3
              );
        
              $blog_query = new WP_Query($blog_args);
        
              if ($blog_query->have_posts()) {
                while ($blog_query->have_posts()) {
                  $blog_query->the_post();
                  get_template_part('template-parts/blog', 'videos');
                }
              }
              ?>
            </div>
          </div>
        </section>