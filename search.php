<?php get_header(); ?> 



<section  class="main_content_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <div class="post_content_area">
                                        <h2><?php printf ('The Search Result for : %s', get_search_query());?> </h2>

                    <?php if(have_posts()){
                     while(have_posts()) { the_post(); ?>
                         <div  class="single_post_area">
                        <?php the_post_thumbnail('post_img');?>
                        <h2><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                		</div>
               
                <?php }
                } else{ echo 'No Post About this...';} ?>
                </div>
                 <div class="search_area">
                    <?php get_search_form(); ?>
                </div>
            </div>
            <div class="col-xl-4"></div>
        </div>
    </div>
</section>

<?php get_footer(); ?> 