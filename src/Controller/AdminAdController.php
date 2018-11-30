<?php

namespace App\Controller;

use App\Entity\Ad;
use App\Form\AnType;
use App\Repository\AdRepository;
use App\Service\PaginationService;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminAdController extends AbstractController
{
    /**
     * @Route("/admin/ads/{page<\d+>?1}", name="admin_ads_index")
     */
    public function index(AdRepository $repo, $page, PaginationService $pagination)
    {

        // $limit = 5;
        // $start = $page * $limit - $limit;
        // 1 * 10 = 10 - 10 = 0
        // 2 * 10 = 20 - 10 = 10

        $pagination->setEntityClass(Ad::class)
                   ->setPage($page);
   
        return $this->render('admin/ad/index.html.twig', [
            'pagination'  => $pagination
        ]);
    }

    /**
     * Permet d'afficher le formulaire d'édition
     * 
     * @Route("/admin/ads/{id}/edit", name="admin_ads_edit")
     * 
     * @param Ad $ad
     * @return Response
     * 
     */
    public function edit(Ad $ad, Request $request, ObjectManager $manager){
     
        $form = $this->createForm(AnType::class, $ad);
     
        $form->handleRequest($request);
        
        
        if($form->isSubmitted() && $form->isValid()){

            foreach($ad->getImages() as $image){
                $image->setAd($ad);
                $manager->persist($image);
            }

            $manager->persist($ad);
            $manager->flush();

            $this->addFlash(
                'success',
                "L'annonce <strong>{$ad->getTitle()}</strong> a bien été modifiée"
            );
        }

        return $this->render('admin/ad/edit.html.twig', [
            'ad'   => $ad,
            'form' => $form->createView()
        ]);
    }
    /**
     * Permet de supprimer une annonce
     * 
     * @Route("/admin/ads/{id}/deete", name="admin_ads_delete")
     *
     * @param Ad $ad
     * @param ObjectManager $manager
     * @return Response
     */
    public function delete(Ad $ad,ObjectManager $manager){

        if(count($ad->getBookings()) > 0){
            $this->addFlash(
                'warning',
                "Vous ne pouvez pas supprimer l'annonce <strong>{$ad->getTitle()}</strong> car elle possède déjà une ou des réservations"
            );
        }else{
       
        $manager->remove($ad);
        $manager->flush();
        $this->addFlash(
            'success',
            "L'annonce <strong>{$ad->getTitle()}</strong> a bien été supprimée"
        );
    }
        return $this->redirectToRoute('admin_ads_index');
    }
}

