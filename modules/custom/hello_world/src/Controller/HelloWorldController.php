<?php

namespace Drupal\hello_world\Controller;

class HelloWorldController {
	public function helloworld() {
			return array(
				'#type' => 'markup',
				'#markup' => t('Hello world!!!'),
			);
	}
}