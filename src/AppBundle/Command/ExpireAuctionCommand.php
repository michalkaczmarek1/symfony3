<?php

namespace AppBundle\Command;


use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use AppBundle\Entity\Auction;
use Doctrine\ORM\EntityManager;
use Symfony\Component\Console\Command\Command;
use Doctrine\ORM\EntityManagerInterface;


class ExpireAuctionCommand extends Command
{
    /**
     * @var EntityManager
     */
    private $entityManager;
    
    public function __construct(EntityManagerInterface $entityManager)
    {
        parent::__construct();
        $this->entityManager = $entityManager;
    }
    
    /**
     * 
     * {@inheritDoc}
     * @see \Symfony\Component\Console\Command\Command::configure()
     */
    protected function configure()
    {
        $this
            ->setName("app:expire_auction")
            ->setDescription("Komenda do wygaszania aukcji");
    }
    
    /**
     * 
     * {@inheritDoc}
     * @see \Symfony\Component\Console\Command\Command::execute()
     */
    public function execute(InputInterface $input, OutputInterface $output)
    {
//         $em = $this->getContainer()->get("doctrine.orm.entity_manager");
        $auctions = $this->entityManager->getRepository(Auction::class)->findActiveExpired();
        
        $output->writeln(sprintf("Znaleziono <info>%d</info> aukcji do wygaszenia", count($auctions)));
        
        foreach ($auctions as $auction){
            $auction->setStatus(Auction::STATUS_FINISHED);
            $this->entityManager->persist($auction);
        }
        
        $this->entityManager->flush();
        
        $output->writeln("Udało się zaaktualizować aukcje!");
        
    }
}

