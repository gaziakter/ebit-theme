<?php get_header(); ?> 



<section  class="main_content_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <div class="post_content_area">

                      <?php if(have_posts()){
                     while(have_posts()) { the_post(); ?>
                <a  class="post_area"  href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail();?>
                        <h2><?php the_title(); ?></h2>
                        <?php the_excerpt(); ?>
                </a>
               
               <?php }
                } else{ echo 'No Post About this...';} ?>
                </div>



                <section class="custom_post_area">
                    <?php
                       $ebit_post = new WP_query(array(
                            'post_type' => 'ebit_prodect',
                            'posts_per_page' => 1
                       ));

                     if ($ebit_post->have_posts()) {
                        while ($ebit_post->have_posts()) {
                           $ebit_post->the_post(); 
                           
                           // For custom fields
                           $mobile = get_post_meta(get_the_ID(), 'mobile_np', true);
                           ?>
                    <div class="custom_post_content">
                        <h2><?php the_title(); ?></h2>
                        <?php echo  $mobile; ?>
                    </div>

                        <?php }
                    } 

                    wp_reset_postdata();
                    ?>
                   
                </section>





                <section class="custom_post_area">
                    <?php
                       $sport_news = new WP_query(array(
                            'post_type' => 'post',
                            'posts_per_page' => 2,
                            'category_name' => 'sports-news'
                       ));

                     if ($sport_news->have_posts()) {
                        while ($sport_news->have_posts()) {
                           $sport_news->the_post(); 
                      
                           ?>
                    <div class="custom_post_content">
                        <h2><?php the_title(); ?></h2>
                    </div>

                        <?php }
                    } 

                    wp_reset_postdata();
                    ?>
                   
                </section>
               
            </div>
            <div class="col-xl-4">
                 <div class="search_area">
                    <?php get_search_form(); ?>
                </div>
                <div class="widgets_area">
                    <?php dynamic_sidebar('first_widget'); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?> 


