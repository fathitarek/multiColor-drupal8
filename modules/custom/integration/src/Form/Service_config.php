<?php

namespace Drupal\integration\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class Service_config extends ConfigFormBase {

  /**
   * Config settings.
   *
   * @var string
   */
  const SETTINGS = 'crm.Service';

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'integration_Service_admin_settings';
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
    $config = \Drupal::config('crm.Service');
    return $config->get('Service');
  }
  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config(static::SETTINGS);
//    dd($config->get('credentials.password'));

    $form['Service'] = [
      '#type' => 'details',
      '#title' => $this->t('Service'),
      '#open' => TRUE,
    ];

    $form['Service']['title'] = [
      '#type' => 'textfield',
      '#title' => $this->t('title'),
      '#default_value' => $config->get('Service.title'),
      '#required' => TRUE,
    ];
$form['Service']['slogan'] = [
      '#type' => 'textfield',
      '#title' => $this->t('slogan'),
      '#default_value' => $config->get('Service.slogan'),
      '#required' => TRUE,
    ];

    $form['Service']['desc'] = [
      '#type' => 'textarea',
      '#title' => $this->t('description'),
      '#default_value' => $config->get('Service.desc'),
      //            '#attributes' => array('readonly' => 'readonly'),
'#required' => TRUE,
    ];

   
 $form['Service']['image'] = [
        '#type' => 'managed_file',
        '#title' => $this->t('Image'),
        '#default_value' => $config->get('Service.image') ? $config->get('Service.image'): '',
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
      ->set('Service', $form_state->getValues('Service'))
      ->save();
    parent::submitForm($form, $form_state);
  }



}
