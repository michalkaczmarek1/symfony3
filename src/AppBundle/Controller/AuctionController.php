<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Auction;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\AuctionType;
use AppBundle\Form\BidType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormError;
use AppBundle\Service\DateService;


class AuctionController extends Controller
{
    /**
     * @Route(
     *      "/",
     *      name="auction_index"
     * )
     * @return Response
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $auctions = $em->getRepository(Auction::class)->findActiveOrdered();
        
        $dateService = $this->get(DateService::class);
        $logger = $this->get("logger");
        $logger->info("Użytkownik wszedł na aukcje info");
        $logger->info("Aktualny dzień miesiąca to " . $dateService->getDay(new \DateTime));
        
        return $this->render("Auctions/index.html.twig", ["auctions" => $auctions]);
    }
    
    /**
     * @Route(
     *      "/auction/details/{id}",
     *      name="auction_details"
     * )
     * @param Auction $auction
     */
    public function detailsAction(Auction $auction)
    {
        if($auction->getStatus() === Auction::STATUS_FINISHED){
            return $this->render("Auctions/finished.html.twig", ["auction" => $auction]);
        }
        
//         $em = $this->getDoctrine()->getManager();
//         $auction = $em->getRepository(Auction::class)->findOneBy(["id" => $id]);
                
        $buyForm = $this->createFormBuilder()
                ->setAction($this->generateUrl("offer_buy", ["id" => $auction->getId()]))
                ->add("submit", SubmitType::class, ["label" => "Kup teraz"])
                ->getForm();
        
        $bidForm = $this->createForm(BidType::class, null, 
                                ["action" => $this->generateUrl("offer_bid", 
                                ["id" => $auction->getId()])]);
                
        return $this->render("Auctions/details.html.twig", 
            [
                "auction" => $auction, 
                "buyForm" => $buyForm->createView(),
                "bidForm" => $bidForm->createView()
                
            ]);
    }
    
    
   
    

   
}

