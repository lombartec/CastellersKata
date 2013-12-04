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

    /**
     * Tests that getWeight method returns the setted value in the constructor.
     */
    public function testThatGetWeightReturnsTheConstructorSettedValue()
    {
        $height = 100;
        $weight = 80;
        $obj    = new Casteller( $height, $weight );
        $this->assertEquals( $weight, $obj->getWeight(), 'The weight returned by the object must be equal to ' . $weight );
    }

    /**
     * Data provider for testing the compare method.
     *
     * @return array
     */
    public function compareProvider()
    {
        return array(
            'Equal Castellers' => array(
                'first_casteller'   => new Casteller( 100, 100 ),
                'second_casteller'  => new Casteller( 100, 100 ),
                'expected_output'   => 0,
                'message'           => 'When two castellers are equal 0 must be returned',
            ),
            'First Casteller is greater' => array(
                'first_casteller'   => new Casteller( 200, 200 ),
                'second_casteller'  => new Casteller( 100, 100 ),
                'expected_output'   => 1,
                'message'           => 'When the first casteller is greater 1 must be returned',
            ),
            'Second Casteller is greater' => array(
                'first_casteller'   => new Casteller( 100, 100 ),
                'second_casteller'  => new Casteller( 200, 200 ),
                'expected_output'   => -1,
                'message'           => 'When the second casteller is greater -1 must be returned',
            ),
        );
    }

    /**
     * Tests that compare method can compare two Casteller instances.
     *
     * @dataProvider compareProvider
     *
     * @param Casteller $first_casteller    The first Casteller that will be compared with the second one.
     * @param Casteller $second_casteller   The second Casteller that will be compared with the first one.
     * @param integer   $expected_output    What compare method should return.
     * @param string    $message            An error message to be shown in case of test fail.
     */
    public function testThatCompareCanCompareCastellersAsExpected( $first_casteller, $second_casteller, $expected_output, $message )
    {
        $this->assertEquals( $expected_output, $first_casteller->compare( $first_casteller, $second_casteller ), $message );
    }
}
