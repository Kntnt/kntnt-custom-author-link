<?php

namespace Kntnt\Custom_Author_Link;

class Disabler {

    public function __construct() {
        $this->ns = Plugin::ns();
    }

    public function run() {
        if ( Plugin::option( 'disable-archive', false ) ) {
            add_action( 'template_redirect', [ $this, 'disable_author_archives' ] );
        }
    }

    public function disable_author_archives() {
        if ( is_author() ) {
            global $wp_query;
            $wp_query->set_404();
            status_header( 404 );
        }
    }

}
