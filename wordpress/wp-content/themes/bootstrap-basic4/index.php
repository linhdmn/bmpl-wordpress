<?php
/**
 * The main template file.
 * 
 * To override home page (for listing latest post) add home.php into the theme.<br>
 * If front page displays is set to static, the index.php file will be use.<br>
 * If front-page.php exists, it will be override any home page file such as home.php, index.php.<br>
 * To learn more please go to https://developer.wordpress.org/themes/basics/template-hierarchy/ .
 * 
 * @package bootstrap-basic4
 */


// begins template. -------------------------------------------------------------------------
get_header();
get_sidebar();
?> 
    <main id="main" class="col-md-<?php echo \BootstrapBasic4\Bootstrap4Utilities::getMainColumnSize(); ?> site-main" role="main">
    <div class="card bg-transparent text-center">
        <div class="box-shadow">
            <h1 class=" card-body text-success">Tìm kiếm văn bản</h1>
            <p class="card-text">
                <form   
                    class="form-inline row justify-content-md-center" 
                    role="search" 
                    method="get" 
                    id="searchform" 
                    action="<?php echo esc_url( home_url( '/' ) ); ?>"
                >
                    <label class="col col-md-auto form-label">
                        Từ khóa tìm kiếm:
                    </label>
                    <input 
                        class="form-control mr-sm-1" 
                        type="text" 
                        value="<?php echo get_search_query(); ?>" 
                        placeholder="vd: tên bộ luật " 
                        name="s" 
                        id="s">
                    <button 
                        type="submit" 
                        id="searchsubmit" 
                        value="<?php esc_attr_x('Search', 'b4st') ?>" 
                        class="btn btn-outline-secondary my-2 my-sm-0">
                    <i class="fas fa-search"></i>
                    </button>
                </form>
            </p>
        </div>
    </div>
        <div class="my-3 p-3 row justify-content-around">
            <a class="btn btn-link" href="./category/luat-hinh-su">
                <img src="<?= get_template_directory_uri(); ?>/assets/img/hinhsu.png" width="500" />
            </a>
            <a class="btn btn-link" href="./category/luat-to-tung-hinh-su">
                <img src="<?= get_template_directory_uri(); ?>/assets/img/totunghinhsu.png" width="500" />
            </a>
        </div>
    </main>
                
<?php
get_sidebar('right');
get_footer();