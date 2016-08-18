<?php
/**
 * Created by PhpStorm.
 * User: ekirkland
 * Date: 8/17/16
 * Time: 3:57 PM
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ItemController extends Controller
{
    /**
     * @Route("/products/{item}")
     */
    public function showAction($item)
    {
        switch($item) {
            case 'QAV210':
                return $this->render('products/QAV210.html.twig');
                break;
            case 'BOLT180':
                return $this->render('products/BOLT180.html.twig');
                break;
            case 'ZMR250':
                return $this->render('products/ZMR250.html.twig');
                break;
            default:
                return $this->render('products/show.html.twig');
                break;
        }
    }
}