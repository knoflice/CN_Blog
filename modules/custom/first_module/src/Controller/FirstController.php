<?php
/**
* @file
* Contains \Drupal\first_module\Controller\FirstController.
*/
   
namespace Drupal\first_module\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Session\AccountInterface;
    
class FirstController extends ControllerBase {

  /**
   * @return array
   */
  public function content() {
		$name = \Drupal::currentUser()->getUsername();
		if ($name != null) {
      return array(
        '#type' => 'markup',
        '#markup' => '<p>' . t('Hello ' . $name) . '</p>'
      );
    }
    else {
        return array(
          '#type' => 'markup',
          '#markup' => '<p>'.t('Access denied.').'</p>'
        );
    }
  }
  }