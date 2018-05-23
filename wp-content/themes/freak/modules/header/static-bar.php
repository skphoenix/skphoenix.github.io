<?php if ( !get_theme_mod('freak_disable_static_bar') ) : ?>
<div id="static-bar">
    <div id="static-logo">
        <?php if ( get_theme_mod('freak_logo') != "" ) : ?>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( get_theme_mod('freak_logo') ); ?>"></a>
        <?php else : ?>
            <h1 class="site-title title-font"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
        <?php endif; ?>
    </div>
    <?php get_template_part('modules/navigation/static','menu'); ?>
    <a id="searchicon" >
        <i class="fa fa-search"></i>
    </a>
</div>
<?php endif; ?>