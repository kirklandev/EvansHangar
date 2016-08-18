<?php
/**
 * Created by PhpStorm.
 * User: ekirkland
 * Date: 8/17/16
 * Time: 2:40 PM
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ServicesController extends Controller
{
    /**
     * @Route("/services/")
     */
    public function showAction()
    {
        return $this->render('products/services.html.twig');
    }
}