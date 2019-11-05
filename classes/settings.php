<?php

namespace Kntnt\Custom_Author_Link;

require_once Plugin::plugin_dir( 'classes/abstract-settings.php' );

class Settings extends Abstract_Settings {

    /**
     * Returns the settings menu title.
     */
    protected function menu_title() {
        return __( 'Custom Author Link', 'kntnt-custom-author-link' );
    }

    /**
     * Returns the settings page title.
     */
    protected function page_title() {
        return __( "Kntnt Custom Author Link", 'kntnt-custom-author-link' );
    }

    /**
     * Returns all fields used on the settings page.
     */
    protected function fields() {

        $fields['slug'] = [
            'type' => 'text',
            'label' => __( 'Author slug', 'kntnt-custom-author-link' ),
            'size' => 80,
            'description' => __( 'The slug to be used instead of <code>author</code> in the author link.', 'kntnt-custom-author-link' ),
        ];

        $fields['disable-archive'] = [
            'type' => 'checkbox',
            'label' => __( 'Disbale author archives', 'kntnt-custom-author-link' ),
            'description' => __( 'Check to disable WordPress standard author archives.', 'kntnt-custom-author-link' ),
        ];

        $fields['submit'] = [
            'type' => 'submit',
        ];

        return $fields;

    }

}
