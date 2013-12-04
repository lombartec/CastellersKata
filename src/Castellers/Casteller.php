<?php

namespace Castellers;

/**
 * Provides a way to control the height and weight of a Casteller, also defines a way to compare Castellers between them.
 *
 * @author Carlos Lombarte <lombartec@gmail.com>
 */
class Casteller
{
    /**
     * The height of the casteller.
     *
     * @var integer
     */
    private $height;

    /**
     * The weight of the casteller.
     *
     * @var integer
     */
    private $weight;

    /**
     * Sets the value for height and weight.
     *
     * @param integer $height The height of the casteller.
     * @param integer $weight The weight of the casteller.
     */
    public function __construct( $height, $weight )
    {
        $this->height = $height;
        $this->weight = $weight;
    }

    /**
     * Returns the height of the casteller.
     *
     * @return integer
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Returns the weight of the casteller.
     *
     * @return integer
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Determines if a Casteller is greater/lesser than or equal to another Casteller using height and weight to do so.
     *
     * @param Casteller $first_casteller    The first Casteller that will be compared with the second one.
     * @param Casteller $second_casteller   The second Casteller that will be compared with the first one.
     *
     * @return integer Returns 0 when equal, -1 when the second casteller is greater, 1 when the first casteller is greater.
     */
    public function compare( Casteller $first_casteller, Casteller $second_casteller )
    {
        if ( $first_casteller->getHeight() < $second_casteller->getHeight() && $first_casteller->getWeight() < $second_casteller->getWeight() )
        {
            return -1;
        }
        else if ( $first_casteller->getHeight() > $second_casteller->getHeight() && $first_casteller->getWeight() > $second_casteller->getWeight() )
        {
            return 1;
        }
        else if ( $first_casteller->getHeight() == $second_casteller->getHeight() && $first_casteller->getWeight() == $second_casteller->getWeight() )
        {
            return 0;
        }
    }
}