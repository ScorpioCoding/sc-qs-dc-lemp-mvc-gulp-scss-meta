<?php

namespace App\Modules\Site\Controllers;

use App\Core\Controller;
use App\Core\View;

use App\Modules\Site\Utils\Meta;


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
    //echo "here - home controller";
    $meta = array();
    $trans = array();
    $data = array();

    $meta = (new Meta($args))->getMeta();

    /*
    * render the view
    * @params string 	$viewname
    * @params array 	$meta
    * @params array 	$trans
    * @params array 	$data
    */
    View::render($args, $meta, $trans, $data);
  }

  protected function after()
  {
  }

  //END-Class
}