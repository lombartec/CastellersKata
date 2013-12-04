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
                'expected'          => 0,
                'message'           => 'When two castellers are equal 0 must be returned',
            ),
            'First Casteller is greater' => array(
                'first_casteller'   => new Casteller( 200, 200 ),
                'second_casteller'  => new Casteller( 100, 100 ),
                'expected'          => 1,
                'message'           => 'When the first casteller is greater 1 must be returned',
            ),
            'Second Casteller is greater' => array(
                'first_casteller'   => new Casteller( 100, 100 ),
                'second_casteller'  => new Casteller( 200, 200 ),
                'expected'   => -1,
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
     * @param integer   $expected           What compare method should return.
     * @param string    $message            An error message to be shown in case of test fail.
     */
    public function testThatCompareCanCompareCastellersAsExpected( $first_casteller, $second_casteller, $expected, $message )
    {
        $this->assertEquals( $expected, $first_casteller->compare( $first_casteller, $second_casteller ), $message );
    }

    /**
     * Data provider to test if a casteller fits in a group or not.
     *
     * @return array
     */
    public function fitsGroupProvider()
    {
        return array(
            'Does not fit because greater weight' => array(
                'first_casteller' => new Casteller( 100, 200 ),
                'second_casteller' => new Casteller( 110, 100 ),
                'expected' => false,
                'message' => 'This method must return false when a casteller does not fit a group of castellers',
            ),
            'Does not fit because greater height' => array(
                'first_casteller' => new Casteller( 200, 100 ),
                'second_casteller' => new Casteller( 110, 100 ),
                'expected' => false,
                'message' => 'This method must return false when a casteller does not fit a group of castellers',
            ),
            'Does fit because both properties are smaller' => array(
                'first_casteller' => new Casteller( 100, 100 ),
                'second_casteller' => new Casteller( 200, 200 ),
                'expected' => true,
                'message' => 'This method must return true when a casteller does fit a group of castellers',
            ),
        );
    }

    /**
     * Tests that compare sets a property class to false when a casteller does not fit the group of castellers.
     *
     * @dataProvider fitsGroupProvider
     *
     * @param Casteller $first_casteller    The first Casteller that will be compared with the second one.
     * @param Casteller $second_casteller   The second Casteller that will be compared with the first one.
     * @param integer   $expected           What the method that determines if a casteller fits a group or not should return.
     * @param string    $message            An error message to be shown in case of test fail.
     */
    public function testThatACastellerThatDoesNotFitTheGroupSetsAPropertyToFalse( $first_casteller, $second_casteller, $expected, $message )
    {
        $first_casteller->compare( $first_casteller, $second_casteller );

        $this->assertEquals( $expected, $first_casteller->isGroupCorrectForCasteller(), $message );
    }
}
