<?php

namespace Kntnt\Custom_Author_Link;

class Replacer {

    private $pattern;

    private $replacement;

    public function __construct() {
        $this->ns = Plugin::ns();
    }

    public function run() {
        if ( Plugin::option( 'slug' ) ) {
            $this->init();
            add_filter( 'author_link', [ $this, 'author_link' ], 10, 3 );
        }
    }

    public function init() {

        global $wp_rewrite;
        if ( $author_permastruct = $wp_rewrite->get_author_permastruct() ) {
            $author_permastruct = preg_quote( $author_permastruct, '/' );
            $pattern = str_replace( '%author%', '(.*)', $author_permastruct );
        }
        else {
            $pattern = home_url( '/' ) . '\?author=(.*)';
        }
        $this->pattern = "/$pattern/";
        Plugin::log( 'The regular expression used to find the original slug: %s', $this->pattern );

        $this->replacement = '/' . Plugin::option( 'slug', 'author' ) . '/$1';
        Plugin::log( 'The replacement string: %s', $this->replacement );

    }

    public function author_link( $link, $author_id, $author_nicename ) {
        return preg_replace( $this->pattern, $this->replacement, $link );
    }

}
