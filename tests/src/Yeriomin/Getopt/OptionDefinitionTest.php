<?php

namespace Yeriomin\Getopt;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2014-12-02 at 20:41:26.
 */
class OptionDefinitionTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var OptionDefinition
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new OptionDefinition;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * @covers Yeriomin\Getopt\OptionDefinition::setShort
     */
    public function testSetShort() {
        $this->assertEquals(
            null,
            $this->object->getShort(),
            '$short is expected to be null by default'
        );
        $this->object->setShort('a');
        $this->assertEquals(
            'a',
            $this->object->getShort()
        );
        $this->object->setShort('abc');
        $this->assertEquals(
            'a',
            $this->object->getShort()
        );
    }

    /**
     * @covers Yeriomin\Getopt\OptionDefinition::setLong
     */
    public function testSetLong() {
        $this->assertEquals(
            null,
            $this->object->getLong(),
            '$long is expected to be null by default'
        );
        $this->object->setLong('abc');
        $this->assertEquals(
            'abc',
            $this->object->getLong()
        );
    }

    /**
     * @covers Yeriomin\Getopt\OptionDefinition::setDescription
     */
    public function testSetDescription() {
        $this->assertEquals(
            '',
            $this->object->getDescription(),
            '$description is expected to be an empty string by default'
        );
        $this->object->setDescription('abc абв');
        $this->assertEquals(
            'abc абв',
            $this->object->getDescription()
        );
    }

    /**
     * @covers Yeriomin\Getopt\OptionDefinition::setIsRequired
     */
    public function testSetIsRequired() {
        $this->assertEquals(
            false,
            $this->object->getIsRequired(),
            '$isRequired is expected to be false by default'
        );
        $this->object->setIsRequired();
        $this->assertEquals(
            true,
            $this->object->getIsRequired()
        );
        $this->object->setIsRequired(false);
        $this->assertEquals(
            false,
            $this->object->getIsRequired()
        );
        $this->object->setIsRequired(true);
        $this->assertEquals(
            true,
            $this->object->getIsRequired()
        );
        $this->object->setIsRequired(false);
        $this->assertEquals(
            false,
            $this->object->getIsRequired()
        );
        $this->object->setIsRequired('asd');
        $this->assertEquals(
            true,
            $this->object->getIsRequired()
        );
    }

}
