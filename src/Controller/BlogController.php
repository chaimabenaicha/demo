<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="blog")
     */
    public function index()
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }
    /**
     * @Route("/", name="home")
     */
    //la page d'acceuil du site 
    public function home()
    {
        //pour appeller un fichier twig pour pouvoir l afficher
        return $this->render('blog/home.html.twig', [
            'title' => "Bienvenue ici les amis",
            'age' => 31
        ]);
    }

    /**
     * @Route("/hello/{prenom}", name="hello")
     * Montre la page qui dit bonjour 
     *
     * @return void
     */
    public function hello($prenom = "annonyme", $age = 0)
    {
        return $this->render(
            'blog/hello.html.twig',
            [
                'prenom' => $prenom,
                'age' => $age
            ]
        );
    }
    /**
     * @Route("/blog/12", name="blog_show")
     *
     * @return void
     */
    public function show()
    {
        return $this->render('blog/show.html.twig');
    }
}
