
          <div
            class="md:[&:nth-child(1)]:h-[470px] md:[&:nth-child(4)]:h-[470px] max-md:[&:nth-child(1)]:aspect-[1/1] max-md:[&:nth-child(2)]:aspect-[1/1] max-md:[&:nth-child(3)]:aspect-[2/1] max-md:[&:nth-child(4)]:aspect-[1/1] max-md:[&:nth-child(5)]:aspect-[1/1] max-md:[&:nth-child(6)]:aspect-[2/1] max-md:[&:nth-child(3)]:col-span-2 max-md:[&:nth-child(6)]:col-span-2  max-md:[&:nth-child(3)]:order-first   max-md:[&:nth-child(6)]:order-last max-md:[&:nth-child(3)]:aspect-[2/1] flex odd:items-end even:items-start md:[&:nth-child(1)]:col-span-2 md:[&:nth-child(2)]:col-span-2 md:[&:nth-child(3)]:col-span-3 md:[&:nth-child(4)]:col-span-2 md:[&:nth-child(5)]:col-span-3 md:[&:nth-child(6)]:col-span-2 md:[&:nth-child(1)]:row-span-2 md:[&:nth-child(2)]:row-span-1 md:[&:nth-child(3)]:row-span-1 md:[&:nth-child(4)]:row-span-2 md:[&:nth-child(5)]:row-span-1 md:[&:nth-child(6)]:row-span-1 bg-[url('<?php the_post_thumbnail_url(  ) ?>')] bg-cover bg-center p-3 rounded-lg"
          >
            <div
              class="flex flex-row items-center gap-2 backdrop-blur-xs px-2.5 py-2 rounded"
              style="background: rgba(19, 24, 36, 0.4)"
            >
              <img src="<?php echo get_template_directory_uri() ?>/assets/media/instagram.webp" alt="" class="w-4 h-4" />
              <a href="<?php the_field('instagram_link') ?>" class="font-medium text-xs text-white leading-[120%]">
                @<?php the_title(  ) ?>
              </a>
            </div>
          </div>