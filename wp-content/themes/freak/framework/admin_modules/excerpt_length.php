<?php
//excerpt-length
function freak_excerpt_more( $more ) {
    return '...';
}
add_filter('excerpt_more', 'freak_excerpt_more');