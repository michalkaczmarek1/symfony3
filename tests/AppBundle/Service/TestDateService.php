<?php
namespace tests\AppBundle\Service;

use AppBundle\Service\DateService;

class TestDateService extends \PHPUnit_Framework_TestCase
{
    public function testGetDay()
    {
        $dateService = new DateService();
        $this->assertEquals(19, $dateService->getDay(new \DateTime("2017-01-19")), "Powinień być zwrócony dzien 19");
    }
}

