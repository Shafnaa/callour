<?php 

get_header();

get_template_part('template/template', 'navbar');

?>

    

    <div
      class="scrollbar-hide relative w-full h-screen overflow-y-auto snap-y snap-mandatory scroll-smooth"
    >
    <?php 
    
    get_template_part('template/template', 'hero');
    
    get_template_part('template/template', 'services');

    ?>

      <div class="scrollbar-hide w-full h-screen overflow-y-scroll snap-center">
        
        <?php 
    
        get_template_part('template/template', 'about');
    
        get_template_part('template/template', 'information');
    
        get_template_part('template/template', 'blog');
    
        get_template_part('template/template', 'instagram');

        get_footer() 
        
        ?>

        