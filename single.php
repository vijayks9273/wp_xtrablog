
<?php
                get_template_part('includes/section', 'posts'); ?>
            <div class="row tm-row">
                <div class="col-lg-8 tm-post-col">
                    <div class="tm-post-full">
                        <?php
                        if (have_posts()) :
                            while (have_posts()) :
                                the_post(); ?>
                                <div class="mb-4">
                                    <h2 class="pt-2 tm-color-primary tm-post-title"><?php the_title(); ?> </h2>
                                    <p class="tm-mb-40"><?php the_date();
                                                        the_author(); ?></p>
                                    <p>
                                        <?php the_content(); ?> </p>
                                </div>
                        <?php endwhile;
                        endif; ?>
                        <!-- Comments -->
                        <div>
                            <h2 class="tm-color-primary tm-post-title">Comments</h2>
                            <hr class="tm-hr-primary tm-mb-45">
                            <?php
                            // Start the loop.
                            while (have_posts()) :
                                 the_post();
                                // If comments are open or we have at least one comment, load up the comment template.
                                if (comments_open() || get_comments_number()) {
                                    comments_template();
                                }
                            // End of the loop.
                            endwhile;
                            ?>
                        </div>
                    </div>
                </div>
                <?php
                get_template_part('includes/section', 'aside'); ?>
            </div>
            <footer class="row tm-row">
                <?php get_footer();
                ?>
            </footer>
        </main>
    </div>
</body>