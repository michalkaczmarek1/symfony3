<?php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @var Auction[]\ArrayCollection
     * 
     * @ORM\OneToMany(targetEntity="Auction", mappedBy="owner")
     * @ORM\JoinColumn(name="owner_id", referencedColumnName="id")
     */
    private $auctions;
    
    /**
     * @var Offer[]\ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="Offer", mappedBy="owner")
     * @ORM\JoinColumn(name="owner_id", referencedColumnName="id")
     */
    private $offers;
    
    /**
     * User constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->auctions = new ArrayCollection();
        $this->offers = new ArrayCollection();
    }
    

    /**
     * Add auction
     *
     * @param \AppBundle\Entity\Auction $auction
     *
     * @return $this
     */
    public function addAuction(\AppBundle\Entity\Auction $auction)
    {
        $this->auctions[] = $auction;

        return $this;
    }

    /**
     * Remove auction
     *
     * @param \AppBundle\Entity\Auction $auction
     */
    public function removeAuction(\AppBundle\Entity\Auction $auction)
    {
        $this->auctions->removeElement($auction);
    }

    /**
     * Get auctions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAuctions()
    {
        return $this->auctions;
    }

    /**
     * Add offer
     *
     * @param \AppBundle\Entity\Offer $offer
     *
     * @return $this
     */
    public function addOffer(\AppBundle\Entity\Offer $offer)
    {
        $this->offers[] = $offer;

        return $this;
    }

    /**
     * Remove offer
     *
     * @param \AppBundle\Entity\Offer $offer
     */
    public function removeOffer(\AppBundle\Entity\Offer $offer)
    {
        $this->offers->removeElement($offer);
    }

    /**
     * Get offers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOffers()
    {
        return $this->offers;
    }
}
