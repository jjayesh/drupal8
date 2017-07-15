<?php

namespace Drupal\hello_world\Controller;

/**
 * Provides route responses for /hello/world.
 */
class HelloWorldController {

  /**
   * Greet with Hello World.
   */
  public function greetHello() {
    return [
      '#title' => 'Hello World',
      '#markup' => "Greet with hello world!!!!!",
    ];
  }

}
