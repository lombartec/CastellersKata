<?php

namespace Castellers;

/**
 * Test suite for the class Casteller.
 *
 * @author Carlos Lombarte <lombartec@gmail.com>
 */
class CastellerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * The tested object.
     *
     * @var Casteller
     */
    private $obj;

    /**
     * Executes before every test case execution.
     */
    public function setUp()
    {
        $this->obj = new Casteller( 100, 80 );
    }

    /**
     * Executes after every test case execution.
     */
    public function tearDown()
    {
        $this->obj = null;
    }

    /**
     * Tests that getHeight method returns the setted value in the constructor.
     */
    public function testThatGetHeightReturnsTheConstructorSettedValue()
    {
        $expected_height = 100;
        $this->assertEquals( $expected_height, $this->obj->getHeight(), 'The height returned by the object must be equal to ' . $expected_height );
    }

    /**
     * Tests that getWeight method returns the setted value in the constructor.
     */
    public function testThatGetWeightReturnsTheConstructorSettedValue()
    {
        $expected_weight = 80;
        $this->assertEquals( $expected_weight, $this->obj->getWeight(), 'The weight returned by the object must be equal to ' . $expected_weight );
    }
}
