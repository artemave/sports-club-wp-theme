<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Sports Club Lite
 */
?>

<div class="footer-wrapper"> 
      <div class="container">           
          <?php if ( is_active_sidebar( 'site-footer-widget-column-1' ) ) : ?>
                <div class="widget-column-1">  
                    <?php dynamic_sidebar( 'site-footer-widget-column-1' ); ?>
                </div>
           <?php endif; ?>
          
          <?php if ( is_active_sidebar( 'site-footer-widget-column-2' ) ) : ?>
                <div class="widget-column-2">  
                    <?php dynamic_sidebar( 'site-footer-widget-column-2' ); ?>
                </div>
           <?php endif; ?>
           
           <?php if ( is_active_sidebar( 'site-footer-widget-column-3' ) ) : ?>
                <div class="widget-column-3">  
                    <?php dynamic_sidebar( 'site-footer-widget-column-3' ); ?>
                </div>
           <?php endif; ?>
           
           <?php if ( is_active_sidebar( 'site-footer-widget-column-4' ) ) : ?>
                <div class="widget-column-4">  
                    <?php dynamic_sidebar( 'site-footer-widget-column-4' ); ?>
                </div>
           <?php endif; ?>
           
           <div class="clear"></div>
      </div><!--end .container-->

        <div class="footer_bottom"> 
            <div class="container">
                <div class="wp_powerd_by">
				  <?php bloginfo('name'); ?> | 
                  <a href="<?php echo esc_url( 'https://featurist.io'  ); ?>">
Developed &amp; sponsored by Featurist
                  </a>
                </div>
                        	
                <div class="gt_design_by">				
                  Wordpress | 
                  <a href="<?php echo esc_url( __( 'https://gracethemes.com/themes/free-sports-league-wordpress-theme/', 'sports-club-lite' ) ); ?>" target="_blank">
				    <?php printf( __( 'Theme by %s', 'sports-club-lite' ), 'Grace Themes' ); ?>
                  </a>
                </div>
                <div class="clear"></div>
             </div><!--end .container-->             
        </div><!--end .footer_bottom-->  
                     
     </div><!--end #footer-wrapper-->
</div><!--#end layout_forsite-->

<?php wp_footer(); ?>
</body>
</html>
