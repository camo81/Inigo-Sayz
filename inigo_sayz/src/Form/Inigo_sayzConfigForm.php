<?php
 
 
namespace Drupal\inigo_sayz\Form;
 
use Drupal\Core\Form\ConfigFormBase;
 
use Drupal\Core\Form\FormStateInterface;
 
class Inigo_sayzConfigForm extends ConfigFormBase {
 
  /**
 
   * {@inheritdoc}
 
   */
 
  public function getFormId() {
 
    return 'inigo_sayz_config_form';
 
  }
 
  /**
 
   * {@inheritdoc}
 
   */
 
  public function buildForm(array $form, FormStateInterface $form_state) {
 
    $form = parent::buildForm($form, $form_state);
 
    $config = $this->config('inigo_sayz.settings');
 
    $form['quote'] = array(
 
      '#type' => 'textfield',
 
      '#title' => $this->t('Quote'),
 
      '#required' => TRUE,

      '#default_value' => $config->get('inigo_sayz.quote'),
 
    );


 
    return $form;
 
  }
 
  /**
 
   * {@inheritdoc}
 
   */
 
  public function submitForm(array &$form, FormStateInterface $form_state) {
 
    $config = $this->config('inigo_sayz.settings');
 
    $config->set('inigo_sayz.quote', $form_state->getValue('quote'));
 
    $config->save();
 
    return parent::submitForm($form, $form_state);
 
  }
 
  /**
 
   * {@inheritdoc}
 
   */
 
  protected function getEditableConfigNames() {
 
    return [
 
      'inigo_sayz.settings',
 
    ];
 
  }
 
}