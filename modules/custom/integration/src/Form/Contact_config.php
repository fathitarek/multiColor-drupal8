<?php

namespace Drupal\integration\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class Contact_config extends ConfigFormBase {

  /**
   * Config settings.
   *
   * @var string
   */
  const SETTINGS = 'crm.Contact';

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'integration_Contact_admin_settings';
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
    $config = \Drupal::config('crm.Contact');
    return $config->get('Contact');
  }
  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config(static::SETTINGS);
//    dd($config->get('credentials.password'));

    $form['Contact'] = [
      '#type' => 'details',
      '#title' => $this->t('Contact'),
      '#open' => TRUE,
    ];

    $form['Contact']['title'] = [
      '#type' => 'textfield',
      '#title' => $this->t('title'),
      '#default_value' => $config->get('Contact.title'),
      '#required' => TRUE,
    ];
$form['Contact']['slogan'] = [
      '#type' => 'textfield',
      '#title' => $this->t('slogan'),
      '#default_value' => $config->get('Contact.slogan'),
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
      ->set('Contact', $form_state->getValues('Contact'))
      ->save();
    parent::submitForm($form, $form_state);
  }



}
