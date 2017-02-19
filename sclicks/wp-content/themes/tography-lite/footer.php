	<?php
	wp_reset_query();
	?>
	<?php if(!is_page_template('gallery-fullscreen.php') && !is_page_template('page-home.php') && !is_page_template('page-home-fullscreen.php') && !is_page_template('page-fullscreen.php')){ ?>

        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <footer id="footer">
                        <div class="pull-left">
                            <p>
                            <?php esc_html_e( 'Copyrighted to', 'tography-lite' ); ?><a href="<?php echo esc_url( __( 'http://sclicks.in', 'tography-lite' ) ); ?>"><?php esc_html_e( 'S Clicks', 'tography-lite' ); ?></a>. <?php esc_html_e( 'A Gift to ', 'tography-lite' ); ?><a rel="nofollow" href="<?php echo esc_url( __( 'https://www.facebook.com/surya.teja.184007', 'Our Dandu Boy' ) ); ?>"><?php esc_html_e( 'Dandu Boy', 'tography-lite' ); ?></a>.
                            </p>
                            
                                    
                        </div>

                        <?php get_template_part( '/templates/menu', 'social' ); ?>

                        <div class="clearfix"></div>
                    </footer>

                </div><!-- /col-md-12 -->
            </div><!-- /row -->
        </div><!-- /container -->


    <?php }//if fullscreen gallery?>

</div><!-- /wrap -->

    
        
    <!-- WP_Footer --> 
    <?php wp_footer(); ?>
    <!-- /WP_Footer --> 

      
    </body>
</html>