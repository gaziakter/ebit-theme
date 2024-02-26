<?php get_header(); ?> 



<section  class="main_content_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <div class="post_content_area">
                    <?php while(have_posts()) : the_post(); ?>
                         <div  class="single_post_area">
                        <?php the_post_thumbnail('post_img');?>
                        <h2><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                		</div>
               
                <?php endwhile; ?>
                </div>
            </div>
            <div class="col-xl-4"></div>
        </div>
    </div>
</section>

<?php get_footer(); ?> 