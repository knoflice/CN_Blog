<?php
/**
* @file
* Contains \Drupal\first_module\Controller\FirstController.
*/
   
namespace Drupal\first_module\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Session\AccountInterface;
    
class FirstController extends ControllerBase {
	public function content() {
		$name = \Drupal::currentUser()->getUsername();
		return array(
			'#type' => 'markup',
			'#markup' => '<p>'.t('Hello '.$name).'</p>'
		);
	}
}