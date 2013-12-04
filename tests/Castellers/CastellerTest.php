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
     * Tests that getHeight method returns the setted value in the constructor.
     */
    public function testThatGetHeightReturnsTheConstructorSettedValue()
    {
        $height = 100;
        $weight = 80;
        $obj    = new Casteller( $height, $weight );
        $this->assertEquals( $height, $obj->getHeight(), 'The height returned by the object must be equal to ' . $weight );
    }
}
