<?php

namespace Pi\FrontBundle\Controller;

use Pi\adminBundle\Entity\assurance;
use Pi\adminBundle\Entity\Veterinaires;
use Pi\adminBundle\Form\VeterinairesType;
use Pi\FrontBundle\Entity\comment;
use Pi\FrontBundle\Form\commentType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class DefaultController extends Controller
{
    public function indexAction()
    {

        return $this->render('PiFrontBundle:Default:index.html.twig');


    }

    public function layoutAction()
    {
        return $this->render('PiFrontBundle::layout.html.twig');
    }
    public function AboutAction()
    {
        return $this->render('PiFrontBundle:Default:About.html.twig');
    }
    public function AdoptionAction()
    {
        return $this->render('PiFrontBundle:Default:Adoption.html.twig');
    }
    public function MagasinsAction()
    {
        return $this->render('PiFrontBundle:Default:Magasins.html.twig');
    }
    public function VeterinairesAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $veterinaires=$em->getRepository("PiAdminBundle:Veterinaires")->findAll();


        return $this->render("PiFrontBundle:Default:Veterinaires.html.twig",array('veterinaires'=>$veterinaires));

    }

    public function AssurancesAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $assurances=$em->getRepository("PiAdminBundle:assurance")->findAll();

        return $this->render("PiFrontBundle:Default:Assurances.html.twig",array('assurances'=>$assurances));

    }
    public function calculerAction(Request $request)
    {

        $id = $request->get('id');

        $em = $this->getDoctrine()->getManager();
        $assurancess =$em->getRepository("PiAdminBundle:assurance")->findOneBy(array('id'=>$id));



       $nbanimaux = $request->get('nbanimaux');

            dump($nbanimaux);



            $prix=$assurancess->getPrixparanimaux();
            $tot=$nbanimaux*$prix;
            $assurancess->setTotalprix($tot);
            $em->persist($assurancess);
            $em->flush();



        $em = $this->getDoctrine()->getManager();
        $assurances=$em->getRepository("PiAdminBundle:assurance")->findAll();
        return $this->render("PiFrontBundle:Default:Assurances.html.twig",array('assurances'=>$assurances,'assurancess'=>$assurancess));

    }

    public function EvenementsAction()
    {
        return $this->render('PiFrontBundle:Default:Evenements.html.twig');
    }
    public function AssociationsAction()
    {
        return $this->render('PiFrontBundle:Default:Associations.html.twig');
    }
    public function PetSitterAction()
    {
        return $this->render('PiFrontBundle:Default:PetSitter.html.twig');
    }
    public function SanteAction()
    {
        return $this->render('PiFrontBundle:Default:Sante.html.twig');
    }
    public function SupportAdoptionAction()
    {
        return $this->render('PiFrontBundle:Default:SupportAdoption.html.twig');
    }
    public function PlusEventAction()
    {
        return $this->render('PiFrontBundle:Default:PlusEvent.html.twig');
    }
    public function ContactUsAction()
    {
        return $this->render('PiFrontBundle:Default:ContactUs.html.twig');
    }
    public function ArticleAction(Request $request)
    {
        $id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $articles=$em->getRepository("PiAdminBundle:Article")->findBy(array('veterinaire_id'=>$id));

        return $this->render('PiFrontBundle:Default:Article.html.twig',array('articles'=>$articles));
    }

    public function ArticleDetailsAction(Request $request){

        //affichage de l'article
        $id=$request->get('id');
        $em = $this->getDoctrine()->getManager();
        $articles=$em->getRepository("PiAdminBundle:Article")->findBy(array('id'=>$id));

        $comm=$em->getRepository("PiFrontBundle:comment")->findBy(array('article_id'=>$id));

        $m=$em->getRepository('PiFrontBundle:comment')->UpdateEtat($id);

        $user =$this->get('security.token_storage')->getToken()->getUser();

        $em = $this->getDoctrine()->getManager();
        $art =$em->getRepository("PiAdminBundle:Article")->find($id);
        //ajout de commentaire
        $comment = new comment();
        $form = $this->createForm(commentType::class, $comment);
        $form->handleRequest($request);
        if ($form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $comment->setLastTime(new \DateTime());
            $comment->setArticleId($art);
            $us= $em->getRepository("PiFrontBundle:User")->find($user);
            $comment->setUserId($us);
            $em->persist($comment);




            $em->flush();
          return $this->redirectToRoute("ArticleDetails",array('id'=>$id));
        }
        //Affichage commentaire
        $em = $this->getDoctrine()->getManager();
        $comments = $em->getRepository("PiFrontBundle:comment")
            ->findAll();

        return $this->render('PiFrontBundle:Default:ArticleDetails.html.twig',array('id'=>$id,'articles'=>$articles, 'form' => $form->createView(),'comments' =>$comm,'m'=>$m));


    }


    public function deleteCommentAction(Request $request,$idarticle)
    {
        $id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $comments = $em->getRepository("PiFrontBundle:comment")->find($id);
        $em->remove($comments);
        $em->flush();
        return $this->redirectToRoute("ArticleDetails",array("id"=>$idarticle));
    }



}
