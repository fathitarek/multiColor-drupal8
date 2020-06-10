<?php

namespace Drupal\integration\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class Tour extends ConfigFormBase {

  /**
   * Config settings.
   *
   * @var string
   */
  const SETTINGS = 'crm.Tour';

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'integration_Tour_admin_settings';
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
    $config = \Drupal::config('crm.Tour');
    return $config->get('Tour');
  }
  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config(static::SETTINGS);
//    dd($config->get('credentials.password'));

    $form['Tour'] = [
      '#type' => 'details',
      '#title' => $this->t('Tour'),
      '#open' => TRUE,
    ];

    $form['Tour']['title'] = [
      '#type' => 'textfield',
      '#title' => $this->t('title'),
      '#default_value' => $config->get('Tour.title'),
      '#required' => TRUE,
    ];


    $form['Tour']['desc'] = [
      '#type' => 'textfield',
      '#title' => $this->t('description'),
      '#default_value' => $config->get('Tour.desc'),
      //            '#attributes' => array('readonly' => 'readonly'),
'#required' => TRUE,
    ];
    $form['Tour']['btn'] = [
      '#type' => 'textfield',
      '#title' => $this->t('button text'),
      '#default_value' => $config->get('Tour.btn'),
      //            '#attributes' => array('readonly' => 'readonly'),
'#required' => TRUE,
    ];

   

    $form['Tour']['btn_link'] = [
      '#title' => $this->t('button link'),
//      '#type' => 'textfield',
      '#type' => 'textfield',
      '#default_value' => $config->get('Tour.btn_link'),
      // '#attributes' => array('readonly' => 'readonly'),
'#required' => TRUE,
    ];


    return parent::buildForm($form, $form_state);
  }



  public function saveImage($fid) {
    $file = File::load($fid);
    $file->setPermanent();
    $file->save();
  }


  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Retrieve the configuration.
    $this->configFactory->getEditable(static::SETTINGS)
      ->set('Tour', $form_state->getValues('Tour'))
      ->save();
    parent::submitForm($form, $form_state);
  }



}
