<?php
/**
 * Created by PhpStorm.
 * User: ekirkland
 * Date: 8/17/16
 * Time: 2:45 PM
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ContactController extends Controller
{
    /**
     * @Route("/contact/")
     */
    public function showAction()
    {
        return $this->render('products/contact.html.twig');
    }
}