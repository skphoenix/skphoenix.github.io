<nav id="mobile-static-menu">
    <?php wp_nav_menu( array( 'theme_location' => 'static' ) ); ?>
</nav>

<?php if ( !get_theme_mod('freak_disable_static_bar_mobile') ) : ?>
    <button class="mobile-toggle-button"><i class="fa fa-bars"></i></button>
<?php endif; ?>