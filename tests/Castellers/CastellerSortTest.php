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
     * Tests that sortCastellerList method sorts Casteller list as expected.
     */
    public function testThatSortCastellerListSortsCastellersCorrectly()
    {
        $casteller_a = $this->getMock( 'Castellers\Casteller', array( 'getHeight', 'getWeight' ), array(), 'Casteller', false );

        $casteller_a->expects( $this->once() )
            ->method( 'getHeight' )
            ->will( $this->returnValue( 100 ) );

        $casteller_a->expects( $this->once() )
            ->method( 'getWeight' )
            ->will( $this->returnValue( 100 ) );

        $casteller_b = $this->getMock( 'Castellers\Casteller', array( 'getHeight', 'getWeight' ), array(), 'Casteller', false );

        $casteller_b->expects( $this->once() )
            ->method( 'getHeight' )
            ->will( $this->returnValue( 200 ) );

        $casteller_b->expects( $this->once() )
            ->method( 'getWeight' )
            ->will( $this->returnValue( 200 ) );

        $castellers = array(
            $casteller_a,
            $casteller_b,
        );

        $expected_castellers = array(
            $casteller_b,
            $casteller_a
        );

        $obj = new CastellerSort();
        $this->assertEquals( $expected_castellers, $obj->sortCastellersList( $castellers ), 'This method must return the expected ordered array' );
    }
}
