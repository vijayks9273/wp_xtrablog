
<body>
	<header class="tm-header" id="tm-header">
        <?php get_header();?>
    </header>
    <div class="container-fluid">
        <main class="tm-main">
            <!-- Search form -->
            <div class="row tm-row">
            <?php get_search_form();?>            
            </div> 
                    
            <div class="row tm-row">
                <?php
            if (have_posts()) :
    while (have_posts()) :
        the_post();?>
                <article class="col-12 col-md-6 tm-post">
                    <hr class="tm-hr-primary">
                    <a href= "<?php get_permalink();?>" class="effect-lily tm-post-link tm-pt-60">
                    <div class="tm-post-link-inner">
                     <?php  the_post_thumbnail();?>                            
                 </div>
            
                        <span class="position-absolute tm-new-badge">new</span>
                        <h2 class="tm-pt-30 tm-color-primary tm-post-title"><?php the_title();?></h2>
                    </a>                    
                    <p class="tm-pt-30">
                    <?php the_content();?>
                    </p>
                    <div class="d-flex justify-content-between tm-pt-45">
                        <span class="tm-color-primary">Travel . Events</span>
                        <span class="tm-color-primary"><?php the_date();?></span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between"> 
                        <span>by <?php the_author();?></span>
                    </div>
                   
                </article>
              
                <?php endwhile;endif;?>
            </div>
            <div class="row tm-row tm-mt-100 tm-mb-75">
            <?php wp_pagenavi();?>                
            </div>            
            <?php
            get_footer(); ?>
        </main>
    </div>
    