<?php

namespace Drupal\integration\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class IntegrationCredentials extends ConfigFormBase {

  /**
   * Config settings.
   *
   * @var string
   */
  const SETTINGS = 'crm.settings';

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'integration_credentials_admin_settings';
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
    $config = \Drupal::config('crm.settings');
    return $config->get('credentials');
  }
  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config(static::SETTINGS);
//    dd($config->get('credentials.password'));

    $form['credentials'] = [
      '#type' => 'details',
      '#title' => $this->t('Credentials'),
      '#open' => TRUE,
    ];

    $form['credentials']['email'] = [
      '#type' => 'email',
      '#title' => $this->t('email'),
      '#default_value' => $config->get('credentials.email'),
      '#required' => TRUE,
    ];


    $form['credentials']['phone'] = [
      '#type' => 'number',
      '#title' => $this->t('Phone'),
      '#default_value' => $config->get('credentials.phone'),
      //            '#attributes' => array('readonly' => 'readonly'),
'#required' => TRUE,
    ];
    $form['credentials']['fax'] = [
      '#type' => 'number',
      '#title' => $this->t('fax'),
      '#default_value' => $config->get('credentials.fax'),
      //            '#attributes' => array('readonly' => 'readonly'),
'#required' => TRUE,
    ];

    $form['credentials']['street'] = [
      '#type' => 'textfield',
      '#title' => $this->t('street'),
      '#default_value' => $config->get('credentials.street'),
      // '#attributes' => array('readonly' => 'readonly'),
'#required' => TRUE,
    ];

    $form['credentials']['city'] = [
      '#title' => $this->t('city'),
//      '#type' => 'textfield',
      '#type' => 'textfield',
      '#default_value' => $config->get('credentials.city'),
      // '#attributes' => array('readonly' => 'readonly'),
'#required' => TRUE,
    ];


   $form['credentials']['country'] = [
      '#title' => $this->t('country'),
      '#type' => 'textfield',
      '#default_value' => $config->get('credentials.country'),
'#required' => TRUE,
    ];
// qoutes

  $form['credentials']['qoute1'] = [
      '#title' => $this->t('qoute1'),
      '#type' => 'textfield',
      '#default_value' => $config->get('credentials.qoute1'),
'#required' => TRUE,
    ];

  $form['credentials']['name1'] = [
      '#title' => $this->t('name1'),
      '#type' => 'textfield',
      '#default_value' => $config->get('credentials.name1'),
'#required' => TRUE,
    ];

 


      $form['credentials']['image1'] = [
        '#type' => 'managed_file',
        '#title' => $this->t('Image1'),
'#default_value' => $config->get('credentials.image1') ? $config->get('credentials.image1'): '',        '#upload_location' => 'public://img',
        '#required' => TRUE,
        '#description' => $this->t('Maximum upload size: 2MB , Allowed file extensions: jpg, jpeg, png, gif'),
//        '#upload_location' => 'public://themes/custom/sabgsd/assets/img',
        '#upload_validators' =>[
          'file_validate_extensions' => ['jpg jpeg png gif'],
          'file_validate_size' => [2 * 1024 * 1024], // 2MB
        ]
      ];





  $form['credentials']['qoute2'] = [
      '#title' => $this->t('qoute2'),
      '#type' => 'textfield',
      '#default_value' => $config->get('credentials.qoute2'),
'#required' => TRUE,
    ];

  $form['credentials']['name2'] = [
      '#title' => $this->t('name2'),
      '#type' => 'textfield',
      '#default_value' => $config->get('credentials.name2'),
'#required' => TRUE,
    ];

 


      $form['credentials']['image2'] = [
        '#type' => 'managed_file',
        '#title' => $this->t('Image2'),
        '#default_value' => $config->get('credentials.image2') ? $config->get('credentials.image2'): '',
        '#upload_location' => 'public://img',
        '#required' => TRUE,
        '#description' => $this->t('Maximum upload size: 2MB , Allowed file extensions: jpg, jpeg, png, gif'),
//        '#upload_location' => 'public://themes/custom/sabgsd/assets/img',
        '#upload_validators' =>[
          'file_validate_extensions' => ['jpg jpeg png gif'],
          'file_validate_size' => [2 * 1024 * 1024], // 2MB
        ]
      ];
// links social meida

    $form['credentials']['facebook'] = [
      '#type' => 'url',
      '#title' => $this->t('Facebook URL'),
      '#default_value' => $config->get('credentials.facebook'),
      '#required' => TRUE,
    ];
$form['credentials']['twitter'] = [
      '#type' => 'url',
      '#title' => $this->t('Twitter URL'),
      '#default_value' => $config->get('credentials.twitter'),
      '#required' => TRUE,
    ];

    $form['credentials']['google'] = [
      '#type' => 'url',
      '#title' => $this->t('google URL'),
      '#default_value' => $config->get('credentials.google'),
      '#required' => TRUE,
    ];

    $form['credentials']['dribbble'] = [
      '#type' => 'url',
      '#title' => $this->t('dribbble URL'),
      '#default_value' => $config->get('credentials.dribbble'),
      '#required' => TRUE,
    ];

    $form['credentials']['linked'] = [
      '#type' => 'url',
      '#title' => $this->t('linkedin URL'),
      '#default_value' => $config->get('credentials.linked'),
      '#required' => TRUE,
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
        $image_form_value = $form_values['image1']['0'];
        $this->saveImage($image_form_value);


         $form_values = $form_state->cleanValues()->getValues();
        $image_form_value = $form_values['image2']['0'];
        $this->saveImage($image_form_value);
    $this->configFactory->getEditable(static::SETTINGS)
      ->set('credentials', $form_state->getValues('credentials'))
      ->save();
    parent::submitForm($form, $form_state);
  }



}
