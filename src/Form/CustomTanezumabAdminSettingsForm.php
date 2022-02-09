<?php

namespace Drupal\tanezumab_clinical_data\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * CustomMegaMenu Form Function.
 */
class CustomTanezumabAdminSettingsForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'tanezumab_clinical_data.settings',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'tanezumab_clinical_data_dashboard_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('tanezumab_clinical_data.settings');

    $form['tanezumab_header'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Header Structure'),
      '#description' => $this->t('Adding html for header.'),
      '#default_value' => $config->get('tanezumab_header'),
    ];

    $form['tanezumab_footer'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Footer Structure'),
      '#description' => $this->t('Adding html for footer.'),
      '#default_value' => $config->get('tanezumab_footer'),
    ];

    $form['tanezumab_menu'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Menu Structure'),
      '#description' => $this->t('Adding html for menu.'),
      '#default_value' => $config->get('tanezumab_menu'),
    ];

    $form['actions'] = [
      '#type' => 'actions',
    ];
    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    parent::submitForm($form, $form_state);

    $this->config('tanezumab_clinical_data.settings')
      ->set('tanezumab_header', $form_state->getValue('tanezumab_header'))
      ->set('tanezumab_footer', $form_state->getValue('tanezumab_footer'))
      ->set('tanezumab_menu', $form_state->getValue('tanezumab_menu'))
      ->save();

  }

}
