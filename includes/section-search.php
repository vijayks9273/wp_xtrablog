<?php
get_header();
 
?>
<div class="row tm-row">
    <?php
if (have_posts()) :
    while (have_posts()) :
        the_post();
   
?>
                <article class="col-12 col-md-6 tm-post">
                    <hr class="tm-hr-primary">
                    <a href="" class="effect-lily tm-post-link tm-pt-60">
                        <div class="tm-post-link-inner">
                            <?php  if (has_post_thumbnail()) :
            the_post_thumbnail('<img src="" alt="Image" class="img-fluid">  ');
        endif;
                        ?>                              
                        </div>
                        <?php the_title('<h2 class="tm-pt-30 tm-color-primary tm-post-title">', '</h2>');
                        ?>
                    </a>  
                    <?php the_content( '<p class="tm-pt-30">','</p>');  
                                  
                    ?>
                    <div class="d-flex justify-content-between tm-pt-45">
                        <span class="tm-color-primary">Travel . Events</span>
                        <span class="tm-color-primary"><?php the_date();?></span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <span>36 comments</span>
                        <span>by Admin Nat</span>
                    </div>
                </article>
                <?php
            endwhile;
                    endif; 
                    ?> 
</div>