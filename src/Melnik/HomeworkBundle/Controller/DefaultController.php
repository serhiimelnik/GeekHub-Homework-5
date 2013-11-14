<?php

namespace Melnik\HomeworkBundle\Controller;

use Melnik\HomeworkBundle\Entity\Car;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MelnikHomeworkBundle:Default:index.html.twig');
    }

    public function aboutAction()
    {
        return $this->render('MelnikHomeworkBundle:Default:about.html.twig');
    }

    public function contactAction()
    {
        return $this->render('MelnikHomeworkBundle:Default:contact.html.twig');
    }

    public function carInfoAction()
    {
        $info = new Car();
        $info->setMake('Audi');
        $info->setModel('A8');
        $info->setPrice('63890');
        $info->setBodyStyle('sedan');
        $info->setColor('black');

        return $this->render('MelnikHomeworkBundle:Default:carInfo.html.twig', array('info' => $info));
    }
}
