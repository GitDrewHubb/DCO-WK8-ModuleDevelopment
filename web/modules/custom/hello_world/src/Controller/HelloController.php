<?php

namespace Drupal\hello_world\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Defines HelloController class.
 */
class HelloController extends ControllerBase {

  /**
   * Returns a "Hello, $name!" message.
   * 
   * @param string $name
   *   The name to greet.
   * 
   * @return array
   *   A render array containing the greeting message.
   */
  public function hello(string $name): array {
    return [
      '#markup' => $this->t('Hello, @name!', ['@name' => $name]),
    ];
  }

}
