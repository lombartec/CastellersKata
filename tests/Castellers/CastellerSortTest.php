<?php

namespace Castellers;

/**
 * Test suite for the class CastellerSort.
 *
 * @author Carlos Lombarte <lombartec@gmail.com>
 */
class CastellerSortTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests that sortCastellerList method sorts Castellers correctly when the first casteller has less height and weight than the second.
     */
    public function testThatSortCastellerListSortsWhenFirstCastellerIsLowerThanSecond()
    {
        $castellers = array(
            $this->getCastellerMock( 100, 100 ),
            $this->getCastellerMock( 200, 200 )
        );

        $expected = array(
            $castellers[1],
            $castellers[0]
        );

        $obj = new CastellerSort();
        $this->assertEquals( $expected, $obj->sortCastellersList( $castellers ), 'The second casteller has to be the first after sorting' );
    }

    /**
     * Creates a mock of the Casteller class with the expectations for the sorting method.
     *
     * @param integer $height The height returned by the mock when calling getHeight.
     * @param integer $weight The weight returned by the mock when calling getWeight.
     *
     * @return \PHPUnit_Framework_MockObject_MockObject The mocked object.
     */
    private function getCastellerMock( $height, $weight )
    {
        $casteller_mock = $this->getMock( 'Castellers\Casteller', array( 'getHeight', 'getWeight' ), array(), 'Casteller', false );

        $casteller_mock->expects( $this->once() )
            ->method( 'getHeight' )
            ->will( $this->returnValue( $height ) );

        $casteller_mock->expects( $this->once() )
            ->method( 'getWeight' )
            ->will( $this->returnValue( $weight ) );

        return $casteller_mock;
    }
}
