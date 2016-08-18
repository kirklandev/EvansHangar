<?php
/**
 * Created by PhpStorm.
 * User: ekirkland
 * Date: 8/17/16
 * Time: 2:39 PM
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AboutController extends Controller
{
    /**
     * @Route("/about/")
     */
    public function showAction()
    {
        return $this->render('products/about.html.twig');
    }
}