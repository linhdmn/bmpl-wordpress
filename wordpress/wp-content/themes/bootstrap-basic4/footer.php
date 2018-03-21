<?php
/** 
 * The theme footer.
 * 
 * @package bootstrap-basic4
 */
?>
            </div><!--.site-content-->


            <footer id="site-footer" class="site-footer page-footer">
                <div id="footer-row" class="row">
                    <div class="col-md-6 footer-left">
                        <?php 
                        if (!dynamic_sidebar('footer-left')) {
                            printf(__('Powered by %s', 'Linh N. Doan'), '<a href="https://github.com/nhatlinhdoan" rel="nofollow">Linh N. Doan</a>');
                            echo ' | ';
                            printf(__('Theme: %s', 'bootstrap 4'), '<a href="https://getbootstrap.com/" rel="nofollow">bootstrap 4</a>');
                        } 
                        ?> 
                    </div>
                    <div class="col-md-6 footer-right text-right">
                        <?php dynamic_sidebar('footer-right'); ?> 
                    </div>
                </div>
            </footer><!--.page-footer-->
        </div><!--.page-container-->


        <!--wordpress footer-->
        <?php wp_footer(); ?> 
        <!--end wordpress footer-->
    </body>
</html>
