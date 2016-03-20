<?php

namespace BloodCenter\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        return $this->render('BloodCenterMainBundle:Main:index.html.twig', array(
                // ...
            ));    }

}
