<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AutoController extends AbstractController
{
    /**
     * @Route("/auto", name="auto")
     */
    public function index()
    {
        return $this->render('auto/index.html.twig', [
            'controller_name' => 'AutoController',
        ]);
    }

    /**
     * @Route("exemples", name="exemples")
     */
    public function exemples(){
        $titre = "Ma première page";
        $admin = false;
        $voitures = ["Renault","Peugeot", "Ford", "Fiat"];

        return $this->render('auto/exemples.html.twig',['titre'=>$titre, 'test' => $admin, 'voitures'=>$voitures]);
    }

    /**
     * @Route("/donnees", name="donnees")
     */
    public function donnees(){

        $voitures = [
            ['id'=>1,'marque'=>'Renault', 'modele'=>'Cio2', 'pays'=>'France', 'image'=>"https://via.placeholder.com/50.png/09f/ff

            C/O https://placeholder.com/"],
            ['id'=>2,'marque'=>'Peugeot', 'modele'=>'504', 'pays'=>'Italie', "image"=>"https://via.placeholder.com/50.png/09f/ff

            C/O https://placeholder.com/"],
            ['id'=>3,'marque'=>'Mercedex', 'modele'=>'cl3', 'pays'=>'Allemagne', "image"=>"https://via.placeholder.com/50.png/09f/ff

            C/O https://placeholder.com/"],
            ['id'=>4,'marque'=>'Ford', 'modele'=>'Calipso', 'pays'=>'Danemark', "image"=>"https://via.placeholder.com/50.png/09f/ff

            C/O https://placeholder.com/"]
        ];
        return $this->render('auto/donnees.html.twig',
        ["voitures"=>$voitures]);
    }
}
