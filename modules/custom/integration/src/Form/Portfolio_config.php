<?php

namespace Drupal\integration\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class Portfolio_config extends ConfigFormBase {

  /**
   * Config settings.
   *
   * @var string
   */
  const SETTINGS = 'crm.Portfolio';

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'integration_Portfolio_admin_settings';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      static::SETTINGS,
    ];
  }

  protected function getCredentialsSettings() {
    $config = \Drupal::config('crm.Portfolio');
    return $config->get('Portfolio');
  }
  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config(static::SETTINGS);
//    dd($config->get('credentials.password'));

    $form['Portfolio'] = [
      '#type' => 'details',
      '#title' => $this->t('Portfolio'),
      '#open' => TRUE,
    ];

    $form['Portfolio']['title'] = [
      '#type' => 'textfield',
      '#title' => $this->t('title'),
      '#default_value' => $config->get('Portfolio.title'),
      '#required' => TRUE,
    ];


    $form['Portfolio']['desc'] = [
      '#type' => 'textfield',
      '#title' => $this->t('description'),
      '#default_value' => $config->get('Portfolio.desc'),
      //            '#attributes' => array('readonly' => 'readonly'),
      '#required' => TRUE,
    ];
  


    return parent::buildForm($form, $form_state);
  }
 


  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Retrieve the configuration.
    $this->configFactory->getEditable(static::SETTINGS)
      ->set('Portfolio', $form_state->getValues('Portfolio'))
      ->save();
    parent::submitForm($form, $form_state);
  }



}
