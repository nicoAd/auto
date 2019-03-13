<?php

namespace App\Controller;

use App\Entity\Produit;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProduitController extends AbstractController
{
    /**
     * @Route("/produit/add", name="produit_add")
     */
    public function add()
    {
        $em =  $this->getDoctrine()->getManager();

        $produit = new Produit();

        $produit->setNom("Lumia");
        $produit->setMarque("Nokia");
        $produit->setPrix(500);
        $produit->setImage("https://via.placeholder.com/50/09f.png/fff

        C/O https://placeholder.com/");
        $produit->setDescription("modèle.

        Avec Apple GiveBack, vous obtenez un crédit pour l’achat ");

        $em->persist($produit);
        $em->flush();
        return $this->render('produit/add.html.twig', [
            
        ]);
    }
    /**
     * @Route("/produit/list", name="produit_list")
     */
    public function list(){

        $repo = $this->getDoctrine()->getRepository(Produit::class);
        $produits = $repo->findAll();
        
        return $this->render('produit/list.html.twig',
        ['produits'=>$produits]);
    }

    /**
     * @Route("/produit/{id}/show", name="produit_show")
     */
    public function show($id){

        $repo = $this->getDoctrine()->getRepository(Produit::class);
       $produit =  $repo->find($id);

       return $this->render('produit/show.html.twig', ['produit'=>$produit]);
    }
}
