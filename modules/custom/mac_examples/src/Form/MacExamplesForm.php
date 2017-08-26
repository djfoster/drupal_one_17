<?php

namespace Drupal\mac_examples\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a mac examples form.
 */
class MacExamplesForm extends FormBase {
  
  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'mac_examples_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['caja_de_texto_1'] = array(
      '#type' => 'textfield',
      '#title' => 'Inserta tu nombre aqui ',
      '#required' => TRUE
    );
    
    $form['area_de_texto_1'] = array(
      '#type' => 'textarea',
      '#title' => 'Danos tu Opinion Aqui ',
      '#resizable' => 'none',
    );
    
    $form['checkbox_1'] = array(
      '#type' => 'checkbox',
      '#title' => 'Marca esta opción',
      '#required' => TRUE,
      '#default_value'=> TRUE
    );
    
    $form['color_1'] = array(
      '#type' => 'color',
      '#title' => 'Elije un color',
    );
    
    $form['fecha_1'] = array(
      '#type' => 'date',
      '#title' => 'DateTime ',
    );
    
    $form['email_1'] = array(
      '#type' => 'email',
      '#title' => 'Ingresa tu correo electrónico',
      '#required' => TRUE
    );
    
    $form['numero_1'] = array(
      '#type' => 'number',
      '#title' => 'Ingresa un número que desees',
    );
    
    $form['actions']['#type'] = 'actions';
    
    $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#value' => 'submit',
    );
    
    return $form;
  }
  
  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    drupal_set_message('Inserta tu nombre aqui : ' . $form_state->getValue('Inserta_tu_nombre_aqui'), 'status');
    
    drupal_set_message('Danos tu Opinion Aqui : ' . $form_state->getValue('Danos_tu_Opinio_Aqui'), 'status');
    
    drupal_set_message('Marca esta opción: ' . $form_state->getValue('checkbox_1'), 'status');
    
    drupal_set_message('Elije un color: ' . $form_state->getValue('color_1'), 'status');
    
    drupal_set_message('DateTime : ' . $form_state->getValue('DateTime'), 'status');
    
    drupal_set_message('Ingresa tu correo electrónico: ' . $form_state->getValue('email_1'), 'status');
    
    drupal_set_message('Ingresa un número que desees: ' . $form_state->getValue('numero_1'), 'status');
  }
  
}
