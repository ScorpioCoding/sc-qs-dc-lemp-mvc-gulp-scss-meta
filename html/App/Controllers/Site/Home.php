<?php

namespace App\Controllers\Site;

use App\Core\Controller;
use App\Core\View;

use App\Utils\Site\Meta;


/**
 *  Home
 */
class Home extends Controller
{
  protected function before()
  {
  }

  public function indexAction($args = array())
  {
    //MetaData
    $meta = array();

    // Translation
    $trans = array();

    // Extra data
    $data = array();



    $args['template'] = 'Template';
    View::render($args, $meta, $trans, [
      'data' => $data
    ]);
  }

  protected function after()
  {
  }

  //END-Class
}
