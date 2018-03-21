<?php
/** 
 * The search template.
 * 
 * @package bootstrap-basic4
 */


// begins template. -------------------------------------------------------------------------
get_header();
get_sidebar();
?> 
                <main id="main" class="col-md-<?php echo \BootstrapBasic4\Bootstrap4Utilities::getMainColumnSize(); ?> site-main" role="main">
                    <?php
                    if (have_posts()) {
                    ?> 
                    <header class="page-header">
                        <h1 class="page-title"><?php printf(__('Kết quả tìm kiếm của: %s', 'bootstrap-basic4'), '<span>' . get_search_query() . '</span>'); ?></h1>
                    </header><!-- .page-header -->
                    <div class="page-content row-with-vspace">
                        <?php get_template_part('template-parts/partial', 'search-form'); ?> 
                    </div><!-- .page-content -->
                    <div class="my-3 p-3 bg-white rounded box-shadow">
                        <?php
                            while (have_posts()) {
                                the_post();
                                get_template_part('template-parts/content', get_post_format());
                            }// endwhile;

                            $Bsb4Design = new \BootstrapBasic4\Bsb4Design();
                            $Bsb4Design->pagination();
                            unset($Bsb4Design);
                        } else {
                            get_template_part('template-parts/section', 'no-results');
                        }// endif;
                        ?>
                    </div>
                </main>
<?php
get_sidebar('right');
get_footer();