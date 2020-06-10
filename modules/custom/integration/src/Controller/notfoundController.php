<?php

namespace Drupal\integration\Controller;
use Drupal\Core\Controller\ControllerBase;


class notfoundController extends ControllerBase  {


 public  function notFound() {
    return [
      '#theme' => 'page__404'
    ];
  }


}


?>