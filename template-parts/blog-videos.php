
              <div
                class="blog max-md:w-[100%] flex flex-col gap-4 items-start snap-center"
              >
                <div
                  class="relative w-full aspect-[4/5] md:aspect-[2/3] flex flex-col justify-end rounded-lg overflow-hidden"
                >
                  <video class="absolute w-full h-full object-cover m-0">
                    <source src="<?php the_field('video_url') ?>" />
                  </video>
                  <div
                    class="absolute w-full h-[50%] mb-0"
                    style="
                      background: linear-gradient(
                        0deg,
                        #131824 -49.33%,
                        rgba(19, 24, 36, 0) 100%
                      );
                    "
                  ></div>
                  <div class="relative text-white px-4 md:px-6 py-7">
                    <div class="font-medium text-xl md:text-2xl"><?php the_excerpt_rss(  ) ?></div>
                    <h4 class="font-bold text-3xl md:text-4xl"><?php the_title(  ) ?></h4>
                  </div>
                </div>
                <div class="flex flex-row items-center justify-center gap-4">
                  <img
                    src="<?php the_field('profile_pic') ?>"
                    alt=""
                    class="rounded-lg"
                  />
                  <div class="flex flex-col">
                    <h4 class="font-bold text-xl"><?php the_author(  ) ?></h4>
                    <p class="font-medium text-base">Visit on <?php the_date(  ) ?></p>
                  </div>
                </div>
              </div>

              