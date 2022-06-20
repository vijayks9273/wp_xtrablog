<body>
    <header class="tm-header" id="tm-header">
        <?php get_header(); ?>
    </header>
    <div class="container-fluid">
        <main class="tm-main">
            <!-- Search form -->
            <div class="row tm-row">
                <?php get_search_form() ?>
            </div>
            <div class="row tm-row">
                <div class="col-12">
                    <hr class="tm-hr-primary tm-mb-55">
                    <!-- Video player 1422x800 -->

                    <div class="row tm-row tm-mb-45">
                        <div class="col-12">
                            <?php the_post_thumbnail(); ?>
                        </div>
                    </div>
                </div>
            </div>
