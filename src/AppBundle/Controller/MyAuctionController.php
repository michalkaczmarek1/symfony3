<?php
namespace AppBundle\Controller;

use AppBundle\Entity\Auction;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\FormError;
use AppBundle\Form\AuctionType;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use AppBundle\Entity\User;

class MyAuctionController extends Controller
{
    /**
     * @Route(
     *      "/my",
     *      name="my_auction_index"
     * )
     * @return Response
     */
    public function indexAction()
    {
        $this->denyAccessUnlessGranted("ROLE_USER");
        
        $em = $this->getDoctrine()->getManager();
        $auctions = $em->getRepository(Auction::class)->findMyOrdered($this->getUser());
        
        return $this->render("MyAuctions/index.html.twig", ["auctions" => $auctions]);
    }
    
    /**
     * @Route(
     *      "/my/auction/details/{id}",
     *      name="my_auction_details"
     * )
     * @param Auction $auction
     */
    public function detailsAction(Auction $auction)
    {
        $this->denyAccessUnlessGranted("ROLE_USER");
        
        if($auction->getStatus() === Auction::STATUS_FINISHED){
            return $this->render("MyAuctions/finished.html.twig", ["auction" => $auction]);
        }
        
        //         $em = $this->getDoctrine()->getManager();
        //         $auction = $em->getRepository(Auction::class)->findOneBy(["id" => $id]);
        
        $deleteForm = $this->createFormBuilder()
        ->setAction($this->generateUrl("my_auction_delete", ["id" => $auction->getId()]))
        ->setMethod(Request::METHOD_DELETE)
        ->add("submit", SubmitType::class, ["label" => "Usuń"])
        ->getForm();
        
        $finishForm = $this->createFormBuilder()
        ->setAction($this->generateUrl("my_auction_finish", ["id" => $auction->getId()]))
        ->add("submit", SubmitType::class, ["label" => "Zakończ"])
        ->getForm();
        
        return $this->render("MyAuctions/details.html.twig",
            [
                "auction" => $auction,
                "deleteForm" => $deleteForm->createView(),
                "finishForm" => $finishForm->createView()
                
            ]);
    }
    
    /**
     * @Route(
     *      "/my/auction/add",
     *      name="my_auction_add"
     * )
     *
     * @return Response
     */
    public function addAction(Request $request)
    {
        $this->denyAccessUnlessGranted("ROLE_USER");
        
        $auction = new Auction();
        
        $form = $this->createForm(AuctionType::class, $auction);
        
        if($request->isMethod("post")){
            $form->handleRequest($request);
            
            if($auction->getStartingPrice() >= $auction->getPrice()){
                $form->get("startingPrice")->addError(new FormError("Cena wywoławcza nie może być wyższa od ceny kup teraz"));
            }
            if($form->isValid()){
                
                $auction
                ->setStatus(Auction::STATUS_ACTIVE)
                ->setOwner($this->getUser());
                
                $em = $this->getDoctrine()->getManager();
                $em->persist($auction);
                $em->flush();
                
                $this->addFlash("success", "Aukcja {$auction->getTitle()} została dodana");
                
                return $this->redirectToRoute("my_auction_details", ["id" => $auction->getId()]);
                
            }
            
            $this->addFlash("error", "Nie udało się dodać aukcji");
            
        }
        
        
        return $this->render("MyAuctions/add.html.twig", ["form" => $form->createView()]);
        
    }
    
    /**
     * @Route(
     *      "/my/auction/edit/{id}",
     *      name="my_auction_edit"
     * )
     * @param Request $request
     * @param Auction $auction
     * @return Response
     */
    public function editAction(Request $request, Auction $auction)
    {
        $this->denyAccessUnlessGranted("ROLE_USER");
        
        if($this->getUser() !== $auction->getOwner()){
            throw new AccessDeniedException();
        }
        
        $form = $this->createForm(AuctionType::class, $auction);
        
        if($request->isMethod("post")){
            $form->handleRequest($request);
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($auction);
            $em->flush();
            
            $this->addFlash("success", "Aukcja {$auction->getTitle()} została zaaktualizowana");
            
            return $this->redirectToRoute("my_auction_details", ["id" => $auction->getId()]);
        }
        
        return $this->render("MyAuctions/edit.html.twig", ["form" => $form->createView()]);
    }
    
    /**
     * @Route(
     *      "/my/auction/delete/{id}",
     *      name="my_auction_delete",
     *      methods={"DELETE"}
     * )
     * @param Auction $auction
     * @return Response
     */
    public function deleteAction(Auction $auction)
    {
        $this->denyAccessUnlessGranted("ROLE_USER");
        
        if($this->getUser() !== $auction->getOwner()){
            throw new AccessDeniedException();
        }
        
        $em = $this->getDoctrine()->getManager();
        $em->remove($auction);
        $em->flush();
        
        $this->addFlash("success", "Aukcja {$auction->getTitle()} została usunięta");
        
        return $this->redirectToRoute("my_auction_index");
    }
    
    /**
     * @Route(
     *      "/my/auction/finish/{id}",
     *      name="my_auction_finish",
     *      methods={"POST"}
     * )
     * @param Auction $auction
     * @return Response
     */
    public function finishAction(Auction $auction)
    {
        $this->denyAccessUnlessGranted("ROLE_USER");
        
        if($this->getUser() !== $auction->getOwner()){
            throw new AccessDeniedException();
        }
        
        $auction
        ->setExpiresAt(new \DateTime)
        ->setStatus(Auction::STATUS_FINISHED);
        
        $em = $this->getDoctrine()->getManager();
        $em->persist($auction);
        $em->flush();
        
        $this->addFlash("success", "Aukcja {$auction->getTitle()} została zakończona");
        
        return $this->redirectToRoute("my_auction_details", ["id" => $auction->getId()]);
        
    }
    
    
}

