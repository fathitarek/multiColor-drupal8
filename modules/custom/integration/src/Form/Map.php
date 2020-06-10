<?php

namespace Drupal\integration\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class Map extends ConfigFormBase {

  /**
   * Config settings.
   *
   * @var string
   */
  const SETTINGS = 'crm.Map';

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'integration_Map_admin_settings';
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
    $config = \Drupal::config('crm.Map');
    return $config->get('Map');
  }
  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config(static::SETTINGS);
//    dd($config->get('credentials.password'));

    $form['Map'] = [
      '#type' => 'details',
      '#title' => $this->t('Map'),
      '#open' => TRUE,
    ];

    $form['Map']['latitude'] = [
      '#type' => 'textfield',
      '#title' => $this->t('latitude'),
      '#default_value' => $config->get('Map.latitude'),
      '#required' => TRUE,
    ];


    $form['Map']['longitude'] = [
      '#type' => 'textfield',
      '#title' => $this->t('longitude'),
      '#default_value' => $config->get('Map.longitude'),
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
      ->set('Map', $form_state->getValues('Map'))
      ->save();
    parent::submitForm($form, $form_state);
  }



}
