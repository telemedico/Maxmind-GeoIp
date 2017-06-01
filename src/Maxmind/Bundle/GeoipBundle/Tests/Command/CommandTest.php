<?php
namespace Maxmind\Bundle\GeoipBundle\Tests\GeoipManager;

use Maxmind\Bundle\GeoipBundle\Command\LoadDataCommand;

class LoadDataCommandTest extends \PHPUnit_Framework_TestCase
{
    protected $loadDataCommand;

    public function setUp()
    {
        $this->loadDataCommand = new LoadDataCommand();
    }

    public function testSetDataFilePath()
    {
        $this->assertInstanceOf("Maxmind\Bundle\GeoipBundle\Command\LoadDataCommand",
            $this->loadDataCommand->setDataFilePath(__DIR__."/../data/GeoLiteCity.dat"));
    }

}
