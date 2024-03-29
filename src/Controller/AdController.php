<?php
// php bin/console make:controller AdController
namespace App\Controller;

use App\Entity\Ad;
use App\Form\AnType;
use App\Entity\Image;
use App\Repository\AdRepository;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdController extends AbstractController
{
    /**
     * @Route("/ads", name="ads_index")
     */


    // Liste de services configuréspour être injectés visibles en faisant
    // php bin/console debug:autowiring

    //  Injection de dépendances
    public function index(AdRepository $repo)
    {
        // $repo = $this->getDoctrine()->getRepository(Ad::class);
        $ads= $repo->findAll();

        return $this->render('ad/index.html.twig', [
            'ads' => $ads
        ]);
    }

    // Param Converter

    /**
     * Permet de créer une annonce
     * 
     * @Route("/ads/new", name="ads_create")
     * @IsGranted("ROLE_USER")
     *
     * @return Response
     */
    public function create(Request $request, ObjectManager $manager){
        $ad = new Ad();

        $form = $this->createForm(AnType::class, $ad);
        $form->handleRequest($request);  
            dump($ad);  

        if($form->isSubmitted() && $form->isValid()){
            foreach($ad->getImages() as $image){
                $image->setAd($ad);
                $manager->persist($image);
            }

            $ad->setAuthor($this->getUser());
            $manager->persist($ad);
            $manager->flush();
            $this->addFlash(
                'success',
                "L'annonce  <strong> {$ad->getTitle()} </strong> a bien été enregistrée"
            );
            return $this->redirectToRoute('ads_show', [
                'slug' =>$ad->getSlug()
            ]);
        }

        return $this->render('ad/new.html.twig',[
            'form' => $form->createView()
        ]);
    }

    /**
     * Permet d'afficher leformulaire d'édition
     * 
     * @Route("/ads/{slug}/edit", name="ads_edit")
     * 
     * @Security("is_granted('ROLE_USER') and user === ad.getAuthor()",
     * message="Cette annonce ne vous appartient pas, vous ne pouvez pas la modifier")
     * 
     * @return Response
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
                "Les modifications de l'annonce  <strong> {$ad->getTitle()} </strong> ont bien été enregistrées"
            );
           
            return $this->redirectToRoute('ads_show', [
                'slug' =>$ad->getSlug()
            ]);
        }
        return $this->render('ad/edit.html.twig',[
            'form' => $form->createView(),
            'ad'   =>$ad
        ]);
    }
    /**
     * Permet d'afficher une seule annonce
     *
     * @Route("/ads/{slug}", name="ads_show")
     * @return Response
     */
    // Param Converter
    public function show(Ad $ad){
        // Je récupèrel'annonce qui correspond au Slug
        return $this->render('ad/show.html.twig',[
            'ad' => $ad
        ]);
    }  

    /**
     * PERMET DE SUPPRIMER UNE ANNONCE
     * 
     * @Route("/ads/{slug}/delete", name="ads_delete")
     * @Security("is_granted('ROLE_USER') and user == ad.getAuthor()",
     * message="Vous n'avez pas le droit d'accéder à cette ressource")
     *
     * @param Ad $ad
     * @param ObjectManager $manager
     * @return Response
     */
    public function delete(Ad $ad, ObjectManager $manager){
        $manager->remove($ad);
        $manager->flush();
        $this->addFlash(
            'success',
            "l'annonce <strong>{$ad->getTitle()}</strong> a bien été supprimée"
        );

        return $this->redirectToRoute("ads_index");
    }
 
}
