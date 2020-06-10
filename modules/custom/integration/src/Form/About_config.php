<?php

namespace Drupal\integration\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class About_config extends ConfigFormBase {

  /**
   * Config settings.
   *
   * @var string
   */
  const SETTINGS = 'crm.About';

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'integration_About_admin_settings';
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
    $config = \Drupal::config('crm.About');
    return $config->get('About');
  }
  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config(static::SETTINGS);
//    dd($config->get('credentials.password'));

    $form['About'] = [
      '#type' => 'details',
      '#title' => $this->t('About'),
      '#open' => TRUE,
    ];

    $form['About']['title'] = [
      '#type' => 'textfield',
      '#title' => $this->t('title'),
      '#default_value' => $config->get('About.title'),
      '#required' => TRUE,
    ];
$form['About']['slogan'] = [
      '#type' => 'textfield',
      '#title' => $this->t('slogan'),
      '#default_value' => $config->get('About.slogan'),
      '#required' => TRUE,
    ];

    $form['About']['desc'] = [
      '#type' => 'textarea',
      '#title' => $this->t('description'),
      '#default_value' => $config->get('About.desc'),
      //            '#attributes' => array('readonly' => 'readonly'),
'#required' => TRUE,
    ];

   
 $form['About']['image'] = [
        '#type' => 'managed_file',
        '#title' => $this->t('Image'),
        '#default_value' => $config->get('About.image') ? $config->get('About.image'): '',
        '#upload_location' => 'public://img',
        '#required' => TRUE,
        '#description' => $this->t('Maximum upload size: 2MB , Allowed file extensions: jpg, jpeg, png, gif'),
//        '#upload_location' => 'public://themes/custom/sabgsd/assets/img',
        '#upload_validators' =>[
          'file_validate_extensions' => ['jpg jpeg png gif'],
          'file_validate_size' => [2 * 1024 * 1024], // 2MB
        ]
      ];

    return parent::buildForm($form, $form_state);
  }


public function saveImage($fid) {
    $file =  \Drupal\file\Entity\File::load($fid);
    $file->setPermanent();
    $file->save();
  }



  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Retrieve the configuration.
       $form_values = $form_state->cleanValues()->getValues();
        $image_form_value = $form_values['image']['0'];
        $this->saveImage($image_form_value);
    $this->configFactory->getEditable(static::SETTINGS)
      ->set('About', $form_state->getValues('About'))
      ->save();
    parent::submitForm($form, $form_state);
  }



}
