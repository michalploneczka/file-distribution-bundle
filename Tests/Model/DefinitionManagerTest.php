<?php


namespace Abc\Bundle\FileDistributionBundle\Tests\Model;

use Abc\Bundle\FileDistributionBundle\Model\DefinitionManager;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class DefinitionManagerTest extends TestCase {

    /** @var DefinitionManager|MockObject */
    protected $subject;

    protected function setUp(): void
    {
        $this->subject = $this->getMockForAbstractClass('Abc\Bundle\FileDistributionBundle\Model\DefinitionManager');
    }


    public function testCreate()
    {
        $this->subject->expects($this->any())
            ->method('getClass')
            ->will($this->returnValue('Abc\Bundle\FileDistributionBundle\Entity\Definition'));

        $entity = $this->subject->create();

        $this->assertInstanceOf('Abc\Bundle\FileDistributionBundle\Entity\Definition', $entity);
    }
}
