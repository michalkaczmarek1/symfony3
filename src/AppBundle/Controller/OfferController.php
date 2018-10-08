<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Auction;
use AppBundle\Entity\Offer;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Form\BidType;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use AppBundle\Entity\User;

class OfferController extends Controller
{
    /**
     * @Route(
     *      "/auction/buy/{id}",
     *      name="offer_buy",
     *      methods="POST"
     * )
     * 
     * @param Auction $auction
     * @return Response
     */
    public function buyAction(Auction $auction)
    {
        $this->denyAccessUnlessGranted("ROLE_USER");
        
        $offer = new Offer();
        $offer
            ->setAuction($auction)
            ->setType(Offer::TYPE_BUY)
            ->setPrice($auction->getPrice());
        
        $auction
            ->setStatus(Auction::STATUS_FINISHED)
            ->setExpiresAt(new \DateTime());
        
        $em = $this->getDoctrine()->getManager();
        $em->persist($auction);
        $em->persist($offer);
        $em->flush();
        
        $this->addFlash("success", "Kupiłes przedmiot {$auction->getTitle()} za kwotę {$offer->getPrice()} zł");
        
        return $this->redirectToRoute("auction_details", ["id" => $auction->getId()]);
        
    }
    
    /**
     * @Route(
     *      "/auction/bid/{id}",
     *      name="offer_bid",
     *      methods="POST"
     * )
     *
     * @param Request $request
     * @param Auction $auction
     * @return Response
     */
    public function bidAction(Request $request, Auction $auction)
    {
        $this->denyAccessUnlessGranted("ROLE_USER");
        
        $offer = new Offer();
        $bidForm = $this->createForm(BidType::class, $offer);
        
        $bidForm->handleRequest($request);
        
        if($bidForm->isValid()){
            
            $em = $this->getDoctrine()->getManager();
            $lastOffer = $em
                            ->getRepository(Offer::class)
                            ->findOneBy(["auction" => $auction], ["createdAt" => "DESC"]);
            if(isset($lastOffer)){
                if($offer->getPrice() <= $lastOffer->getPrice()){
                    $this->addFlash("error",
                        "Twoja oferta nie może być niższa niż {$lastOffer->getPrice()} zł");
                    
                    return $this->redirectToRoute("auction_details", ["id" => $auction->getId()]);
                }
            } else {
                if($offer->getPrice() < $auction->getStartingPrice()){
                    $this->addFlash("error",
                        "Twoja oferta nie może być niższa od ceny wywoławczej");
                    
                    return $this->redirectToRoute("auction_details", ["id" => $auction->getId()]);
                }
            }
            
            $offer
            ->setType(Offer::TYPE_AUCTION)
            ->setAuction($auction);
            
            
            $em->persist($offer);
            $em->flush();
            
            $this->addFlash("success",
                "Złożyłes ofertę na przedmiot {$auction->getTitle()} za kwotę {$offer->getPrice()} zł");
            
        } else {
            $this->addFlash("error",
                "Nie udało się zalicytować przedmiotu {$auction->getTitle()}");
            
        }
        
        return $this->redirectToRoute("auction_details", ["id" => $auction->getId()]);
        
    }
}

