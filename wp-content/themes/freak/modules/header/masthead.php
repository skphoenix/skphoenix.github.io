<header id="masthead" class="site-header <?php do_action('freak_header_class'); ?>" role="banner" <?php do_action('freak_parallax_options'); ?>>
<div class="layer">
    <div class="container">

        <div class="site-branding col-md-12">
            <?php if ( function_exists( 'the_custom_logo' ) ) : ?>
                           <div class="site-logo">
                               <?php the_custom_logo();?>
                           </div>
                       <?php endif; ?>
            <div id="text-title-desc">
                <h1 class="site-title title-font"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
            </div>
        </div>


            <?php get_template_part('modules/social/social', 'sociocon'); ?>


        <?php if ( !get_theme_mod('freak_topsearch_disable', false) ) : ?>
            <div class="top-search col-md-12">
                <?php get_search_form(); ?>
            </div>
        <?php endif; ?>

    </div>	<!--container-->

    <?php get_template_part('modules/navigation/top','menu'); ?>
</div>
</header><!-- #masthead -->