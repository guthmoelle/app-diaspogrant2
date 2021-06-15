<?php

namespace App\Controller;

use App\Entity\Entreprise;

// use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

Class HomeController extends AbstractController
{

    /**
     * @Route("/")
    */
    public function index()
    {

        return $this->render('home.html.twig'); 

    }



    /**
     * @Route("/inscription")
    */
    public function inscription()
    {

        return $this->render('inscription.html.twig'); 

    }


    /**
     * @Route("/connexion")
    */
    public function connexion()
    {

        return $this->render('connexion.html.twig'); 

    }


    /**
     * @Route("/entreprises")
    */
    public function entreprises()
    {


        // Méthode findBy qui permet de récupérer les données avec des critères de filtre et de tri
        $entreprises = $this->getDoctrine()->getRepository(Entreprise::class)->findAll();

        // $entreprise = $this->getDoctrine()->getRepository(Entreprise::class)->findBy([],['r_social' => 'desc']);

        return $this->render('entreprises.html.twig', [
            'entreprises' => $entreprises,
        ]); 


        
        /*

        $em = $this->getDoctrine()->getManager();
        $entreprise = new Entreprise();
        
        // $entreprise->setRSocial(r_social: 'DT Solution');

        $entreprise->setRSocial('DT Solution');

        $em->persist($entreprise);
        return $this->render('home.html.twig', [
            "entreprises" => $entreprise
        ]);  */
        
        /* return new JsonResponse([
            'success'=>true,
            'message'=>'Hello from Lyon'
        ]); */
    }




    /**
     * @Route("/entreprise/id")
    */
    public function entreprise($r_social)
    {

        
        $entreprise = $this->getDoctrine()->getRepository(Entreprise::class)->findBy([
            "r_social" => $r_social,
        ]);

        return $this->render('entreprise.html.twig', [  // entreprises/entreprise.html.twig
            'entreprise' => $entreprise,
        ]); 


    }  

}