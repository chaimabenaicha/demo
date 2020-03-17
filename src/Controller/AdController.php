<?php

namespace App\Controller;

use App\Entity\Add;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdController extends AbstractController
{
    /**
     * @Route("/ad", name="ads_index")
     */
    public function index()
    {
        $repo = $this->getDoctrine()->getRepository(Add::class);

        return $this->render('ad/index.html.twig', [
            'controller_name' => 'AdController',
        ]);
    }
}
