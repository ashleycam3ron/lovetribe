<?php
function wpa_collection_permalinks( $post_link, $post ){
    if ( is_object( $post ) && $post->post_type == 'products' ){
        $terms = wp_get_object_terms( $post->ID, 'collections' );
        if( $terms ){
            return str_replace( '%collections%' , $terms[0]->slug , $post_link );
        }
    }
    return $post_link;
}
add_filter( 'post_type_link', 'wpa_collection_permalinks', 1, 2 );