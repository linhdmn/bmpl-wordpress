<?php
/** 
 * The archive template.
 * 
 * Use for display author archive, category, custom post archive, custom taxonomy archive, tag, date archive.<br>
 * These archive can override by each archive file name such as category will be override by category.php.<br>
 * To learn more, please read on this link. https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 * @package bootstrap-basic4
 */


// begins template. -------------------------------------------------------------------------
get_header();
get_sidebar();
?> 
    <main id="main" class="col-md-<?php echo \BootstrapBasic4\Bootstrap4Utilities::getMainColumnSize(); ?> site-main" role="main">
        <?php if (have_posts()) { ?> 
        <header class="page-header text-white badge badge-pill badge-info">
            <?php
            the_archive_title('<h1 class="page-title">', '</h1>');
            the_archive_description('<div class="taxonomy-description">', '</div>');
            ?>
        </header><!-- .page-header -->
        <br/>
        <?php if(is_category() || is_tag()){?>
            <a href="../../category/<?php $category = get_the_category(); echo $category[0]->slug; ?>" class="btn btn-info">Bộ luật hiện tại</a>
            <a href="../../tag/so-sanh-<?php $category = get_the_category(); echo $category[0]->slug; ?>" class="btn btn-info">So sánh luật hiện tại và luật cũ</a>
            <a href="../../tag/cac-van-ban-<?php $category = get_the_category(); echo $category[0]->slug; ?>" class="btn btn-info">Các văn bản liên quan</a>
            <a href="../../tag/tai-lieu-<?php $category = get_the_category(); echo $category[0]->slug; ?>" class="btn btn-info">Tài liệu tham khảo</a>
        <?php }?>

        <div class="my-3 p-3 bg-white rounded box-shadow">
        <?php 
            // Start the Loop
            while (have_posts()) {
                the_post();
                get_template_part('template-parts/category', get_post_format());
            } //endwhile; 

            $Bsb4Design = new \BootstrapBasic4\Bsb4Design();
            $Bsb4Design->pagination();
            unset($Bsb4Design);
        } else {
            get_template_part('template-parts/section', 'no-results');
        } //endif; 
        ?> 

        </div>
    </main>
<?php
get_sidebar('right');
get_footer();