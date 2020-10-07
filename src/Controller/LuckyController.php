<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{
     /**
     * @Route("/", name="lucky_index")
     */
    public function index(){
        return $this->render(
            'lucky/index.html.twig'
        );
    }
    /**
     * @Route("/lucky/number", name="lucky_number")
     */
    public function number()
    {
        $number = random_int(0, 100);

        return $this->render(
            'lucky/number.html.twig',
            [
                'number' => $number
            ]
        );
    }
}
