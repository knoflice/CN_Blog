<?php

namespace Drupal\my_form\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class FirstForm extends FormBase{

	public function getFormID(){
		return "first_form";
	}
	
	public function buildForm(array $form, FormStateInterface $form_state) {
		$form['numbers'] = array(
			'#type' => 'textfield',
			'#title' => t('Numbers:'),
			'#required' => TRUE,
			'#description' => 'Fill your favorite numbers, please...',
			);
			
		$form['submit'] = array(
			'#value' => t('Send'),
			'#type' => 'submit',
			);
		return $form;
	}
	
	public function validateForm(array &$form, FormStateInterface $form_state) {
		if (!is_numeric($form_state->getValue('numbers'))) {
           $form_state->setErrorByName('number_only', $this->t('Please, fill in only numeric value.'));
       }
	}
	
	public function submitForm(array &$form, FormStateInterface $form_state) {
//		foreach ($form_state->getValues() as $key => $value){
//			drupal_set_message($key.': '.$value);
//		    $numbers = $form_state->getValue('numbers');
			drupal_set_message($form_state->getValue('numbers'));
		}
	
}