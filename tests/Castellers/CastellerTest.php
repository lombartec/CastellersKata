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
     * Tests to determine if the object is being correctly represented as a string.
     */
    public function testThatToStringOutputsExpectedData()
    {
        $expected   = "10080";
        $result     = '' . $this->obj; // forcing the __toString call.
        $this->assertEquals( $expected, $result, 'The __toString method is not representing the object as expected' );
    }
}
