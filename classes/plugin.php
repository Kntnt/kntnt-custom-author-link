<?php

namespace Kntnt\Custom_Author_Link;

class Plugin extends Abstract_Plugin {

	public function classes_to_load() {

		return [
			'public' => [
				'init' => [
                    'Replacer',
                    'Disabler',
				],
			],
			'admin' => [
				'init' => [
					'Settings',
				],
			],
		];

	}

}
