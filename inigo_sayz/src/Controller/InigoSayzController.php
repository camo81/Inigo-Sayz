<?php

namespace Drupal\inigo_sayz\Controller;

use Drupal\Core\Controller\ControllerBase;

class InigoSayzController extends ControllerBase {

  /**
   * Display the markup.
   *
   * @return array
   */
  public function content() {

      $config = \Drupal::config('inigo_sayz.settings');
      // Will print 'Hello'.
      $name = $config->get('inigo_sayz.quote');

    return array(
      '#theme' => 'inigo_sayz',
      '#source_text' => $this->t("$name"),
    );
  }

}