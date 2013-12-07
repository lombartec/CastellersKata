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
        $this->assertSame( $expected, $obj->sortCastellersList( $castellers ), 'The second casteller has to be the first after sorting' );
    }

    /**
     * Tests that sortCastellerList method sorts Castellers correctly when every casteller is fine in its current position.
     */
    public function testThatSortCastellerListSortsWhenEveryCastellerIsWellPositioned()
    {
        $castellers = array(
            $this->getCastellerMock( 100, 100 ),
            $this->getCastellerMock( 50, 50 )
        );

        $obj = new CastellerSort();
        $this->assertSame( $castellers, $obj->sortCastellersList( $castellers ), 'Nothing has to change as every casteller is well positioned' );
    }

    /**
     * Tests that sortCastellersList sorts a Casteller array using the expected criteria.
     */
    public function testThatSortCastellersListSortsAsExpected()
    {
        $castellers = array(
            $this->getCastellerMock( 65, 100 ),
            $this->getCastellerMock( 70, 150 ),
            $this->getCastellerMock( 56, 90 ),
            $this->getCastellerMock( 75, 190 ),
            $this->getCastellerMock( 60, 95 ),
            $this->getCastellerMock( 68, 110 )
        );

        $expected = array(
            $castellers[3],
            $castellers[1],
            $castellers[5],
            $castellers[0],
            $castellers[4],
            $castellers[2],
        );

        $obj = new CastellerSort();
        $this->assertSame( $expected, $obj->sortCastellersList( $castellers ), 'The method is not sorting correctly' );
    }

    /**
     * Creates a mock of the Casteller class with the expectations for the sorting method.
     *
     * @param integer $height The height returned by the mock when calling __toString.
     * @param integer $weight The weight returned by the mock when calling __toString.
     *
     * @return \PHPUnit_Framework_MockObject_MockObject The mocked object.
     */
    private function getCastellerMock( $height, $weight )
    {
        $casteller_mock = $this->getMock( 'Castellers\Casteller', array( '__toString' ), array(), 'Casteller', false );

        $casteller_mock->expects( $this->any() )
            ->method( '__toString' )
            ->will( $this->returnValue( "$height$weight" ) );

        return $casteller_mock;
    }
}
