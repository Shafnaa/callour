        <!-- Footer -->
        <footer
          class="text-white px-5 pt-16 pb-12"
          style="
            background: linear-gradient(
                140deg,
                #131824 30%,
                rgba(19, 24, 36, 0.02) 100.99%
              ),
              linear-gradient(
                220deg,
                #131824 30%,
                rgba(19, 24, 36, 0.02) 100.99%
              ),
              url('<?php echo get_template_directory_uri() ?>/assets/media/footer.webp');
            background-position: top;
            background-size: cover;
          "
        >
          <div class="max-w-screen-lg mx-auto">
            <a 
              href="<?php get_home_url(  ) ?>"
              class="flex flex-row items-center justify-center gap-8 font-bold text-[54px] mx-auto mb-5"
            >
              <h2 class="hidden md:block w-[300px] text-right">Discovering</h2>
              <img src="<?php echo get_template_directory_uri() ?>/assets/media/logo.svg" alt="" class="h-32" />
              <h2 class="hidden md:block w-[300px]">Minnesota</h2>
            </a>
            <div
              class="max-w-screen-xl flex flex-row flex-wrap justify-center md:justify-between gap-7 text-center border-y-4 border-gray py-8 mb-8"
            >
              <div class="max-w-[260px] flex flex-col space-y-8">
                <h4 class="font-bold text-2xl">Company</h4>
                <?php
                  wp_nav_menu(
                    array(
                      'menu' => 'Company menu',
                      'container' => '',
                      'theme_location' => 'Company menu',
                      'items_wrap' => '<ul id="" class="flex flex-col space-y-4 text-lg">%3$s</ul>',
                    )
                  )
                ?>
              </div>

              <div class="max-w-[260px] flex flex-col space-y-8">
                <h4 class="font-bold text-2xl">Others</h4>
                <?php
                  wp_nav_menu(
                    array(
                      'menu' => 'Others menu',
                      'container' => '',
                      'theme_location' => 'Others menu',
                      'items_wrap' => '<ul id="" class="flex flex-col space-y-4 text-lg">%3$s</ul>',
                    )
                  )
                ?>
              </div>
            </div>
            <div class="w-fit mx-auto">
              <?php
                wp_nav_menu(
                  array(
                    'menu' => 'Social menu',
                    'container' => '',
                    'theme_location' => 'Social menu',
                    'items_wrap' => '<ul id="" class="flex flex-row justify-center space-x-6 mb-8">%3$s</ul>',
                  )
                )
              ?>
              <div>©Copyright Discovering Minnesota 2023</div>
            </div>
          </div>
        </footer>
      </div>
    </div>

    <?php wp_footer() ?>
  </body>
</html>
