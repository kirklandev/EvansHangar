<?php
/**
 * Created by PhpStorm.
 * User: ekirkland
 * Date: 8/17/16
 * Time: 8:19 AM
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ProductsController extends Controller
{
    /**
     * @Route("/products/")
     */
    public function showAction()
    {
        return $this->render('products/show.html.twig', [
            'products' => array(
                /* array format : (product name, cost, img, url extender, description) */
                0 => array(
                    "QAV 210",
                    79.99,
                    "/images/QAV210.jpeg",
                    "QAV210",
                    "This small quadcopter is perfect for competative racing, capable of sporting 5 inch props and 
                    powerful 2205 motors. With a clean solution for the power pigtail and vTx antenna, this can
                    withstand some of your worst crashes. The frame was design by FPV pilot Charpu, known for his
                    creative freestyle flows."
                ),
                1 => array(
                    "ZMR 250",
                    34.99,
                    "/images/ZMR250.jpeg",
                    "ZMR250",
                    "One of the original frames that started the mini quad craze, this is a tried and true solution,
                    with a large supply of spare parts at hand. This can sport both 5 and 6 inch props, and has bolt-on
                    arms, which are replaced easily in the event of them breaking. There is plenty of room on the inside of 
                    the frame to comfortably fit the receiver and vTx, while the battery is mounted either on top or bottom."
                ),
                2 => array(
                    "Bolt 180",
                    49.99,
                    "/images/BOLT180.jpeg",
                    "BOLT180",
                    "This mini quad, spinning 4 inch props and 18xx or 22xx motors, is an abosulte powerhouse. There are 
                    weight savings all across this frame, ensuring that every gram is there for a reason. This frame includes
                     a convenient mounting location for the vTx antenna, as well as the FPV cam. The battery can be mounted on 
                     both the underside and top, while the rest of the electronics reside inside of the frame."
                )
            )
        ]);
    }
}