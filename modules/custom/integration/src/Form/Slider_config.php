<?php

namespace Drupal\integration\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class Slider_config extends ConfigFormBase {

  /**
   * Config settings.
   *
   * @var string
   */
  const SETTINGS = 'crm.Slider';

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'integration_Slider_admin_settings';
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
    $config = \Drupal::config('crm.Slider');
    return $config->get('Slider');
  }
  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config(static::SETTINGS);
//    dd($config->get('credentials.password'));

    $form['Slider'] = [
      '#type' => 'details',
      '#title' => $this->t('Slider'),
      '#open' => TRUE,
    ];

    $form['Slider']['title'] = [
      '#type' => 'textfield',
      '#title' => $this->t('title'),
      '#default_value' => $config->get('Slider.title'),
      '#required' => TRUE,
    ];


    $form['Slider']['desc'] = [
      '#type' => 'textarea',
      '#title' => $this->t('description'),
      '#default_value' => $config->get('Slider.desc'),
      //            '#attributes' => array('readonly' => 'readonly'),
'#required' => TRUE,
    ];
$form['Slider']['btn_link'] = [
      '#type' => 'textfield',
      '#title' => $this->t('btn_link'),
      '#default_value' => $config->get('Slider.btn_link'),
      '#required' => TRUE,
    ];

    $form['Slider']['btn_text'] = [
      '#type' => 'textfield',
      '#title' => $this->t('btn_text'),
      '#default_value' => $config->get('Slider.btn_text'),
      '#required' => TRUE,
    ];
   
 $form['Slider']['image1'] = [
        '#type' => 'managed_file',
        '#title' => $this->t('Image1'),
        '#default_value' => $config->get('Slider.image1') ? $config->get('Slider.image1'): '',
        '#upload_location' => 'public://img',
        '#required' => TRUE,
        '#description' => $this->t('Maximum upload size: 2MB , Allowed file extensions: jpg, jpeg, png, gif'),
//        '#upload_location' => 'public://themes/custom/sabgsd/assets/img',
        '#upload_validators' =>[
          'file_validate_extensions' => ['jpg jpeg png gif'],
          'file_validate_size' => [2 * 1024 * 1024], // 2MB
        ]
      ];


       $form['Slider']['image2'] = [
        '#type' => 'managed_file',
        '#title' => $this->t('Image2'),
        '#default_value' => $config->get('Slider.image2') ? $config->get('Slider.image2'): '',
        '#upload_location' => 'public://img',
        '#required' => TRUE,
        '#description' => $this->t('Maximum upload size: 2MB , Allowed file extensions: jpg, jpeg, png, gif'),
//        '#upload_location' => 'public://themes/custom/sabgsd/assets/img',
        '#upload_validators' =>[
          'file_validate_extensions' => ['jpg jpeg png gif'],
          'file_validate_size' => [2 * 1024 * 1024], // 2MB
        ]
      ];


       $form['Slider']['image3'] = [
        '#type' => 'managed_file',
        '#title' => $this->t('Image3'),
        '#default_value' => $config->get('Slider.image3') ? $config->get('Slider.image3'): '',
        '#upload_location' => 'public://img',
        '#required' => TRUE,
        '#description' => $this->t('Maximum upload size: 2MB , Allowed file extensions: jpg, jpeg, png, gif'),
//        '#upload_location' => 'public://themes/custom/sabgsd/assets/img',
        '#upload_validators' =>[
          'file_validate_extensions' => ['jpg jpeg png gif'],
          'file_validate_size' => [2 * 1024 * 1024], // 2MB
        ]
      ];


       $form['Slider']['image4'] = [
        '#type' => 'managed_file',
        '#title' => $this->t('Image4'),
        '#default_value' => $config->get('Slider.image4') ? $config->get('Slider.image4'): '',
        '#upload_location' => 'public://img',
        '#required' => TRUE,
        '#description' => $this->t('Maximum upload size: 2MB , Allowed file extensions: jpg, jpeg, png, gif'),
//        '#upload_location' => 'public://themes/custom/sabgsd/assets/img',
        '#upload_validators' =>[
          'file_validate_extensions' => ['jpg jpeg png gif'],
          'file_validate_size' => [2 * 1024 * 1024], // 2MB
        ]
      ];



 $form['Slider']['image5'] = [
        '#type' => 'managed_file',
        '#title' => $this->t('Image5'),
        '#default_value' => $config->get('Slider.image5') ? $config->get('Slider.image5'): '',
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
        $image_form_value = $form_values['image1']['0'];
        $this->saveImage($image_form_value);

$image_form_value = $form_values['image2']['0'];
        $this->saveImage($image_form_value);

        $image_form_value = $form_values['image3']['0'];
        $this->saveImage($image_form_value);

$image_form_value = $form_values['image4']['0'];
        $this->saveImage($image_form_value);

$image_form_value = $form_values['image1']['0'];
        $this->saveImage($image_form_value);
    $this->configFactory->getEditable(static::SETTINGS)
      ->set('Slider', $form_state->getValues('Slider'))
      ->save();
    parent::submitForm($form, $form_state);
  }



}
