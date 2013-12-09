<?php

namespace Castellers;

/**
 * Representation of a Casteller.
 *
 * @author Carlos Lombarte <lombartec@gmail.com>
 */
class Casteller implements StringRepresentationInterface
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
     * Object representation when treating it as a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->height . $this->weight;
    }
}