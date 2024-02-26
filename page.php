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
               
            </div>
            <div class="col-xl-4">
                 <div class="search_area">
                    <?php get_search_form(); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?> 


