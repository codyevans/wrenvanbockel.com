<?php 

// add classes to prev / next post links
add_filter('next_post_link', 'post_link_attributes_1');
add_filter('previous_post_link', 'post_link_attributes_2');

function post_link_attributes_1($output) {
    $injection = 'class="next-post"';
    return str_replace('<a href=', '<a '.$injection.' href=', $output);
}

function post_link_attributes_2($output) {
    $injection = 'class="previous-post"';
    return str_replace('<a href=', '<a '.$injection.' href=', $output);
}




 ?>