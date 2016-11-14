<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LuckyController extends Controller
{
    /**
     * @Route("/lucky/{number}", name="lucky_number")
     */
    public function numberAction($number)
    {
        if(is_numeric($number))
            return $this->render('lucky/number.html.twig', array(
                'number' => $number,
            ));
        else
            return $this->redirectToRoute('lucky_number_generate');
    }

    /**
     * @Route("/lucky", name="lucky_number_generate")
     */
    public function emptyNumberAction()
    {
        // if the user doesnt enter a number himself
        // he will be redirected to a number page
        $number = mt_rand(0, 100);

        return $this->redirectToRoute('lucky_number', array(
            'number' => $number,
        ));
    }
}
