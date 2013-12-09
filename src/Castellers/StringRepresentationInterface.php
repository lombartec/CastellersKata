<?php

namespace Castellers;

/**
 * Interface used to make sure that the class that implements it will have an string representation using the __toString() method.
 *
 * @author Carlos Lombarte <lombartec@gmail.com>
 */
interface StringRepresentationInterface
{
    /**
     * Allows the class to decide how it will react when it is treated like a string.
     *
     * @return string
     */
    public function __toString();
}