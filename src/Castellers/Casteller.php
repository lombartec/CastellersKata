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
}