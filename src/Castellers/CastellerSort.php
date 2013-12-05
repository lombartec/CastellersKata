<?php

namespace Castellers;

/**
 * Responisble of sorting a list of Casteller instances.
 *
 * @author Carlos Lombarte <lombartec@gmail.com>
 */
class CastellerSort
{
    /**
     * Returns a sorted array of Casteller instances, the sorting is defined by which Casteller has the greatest height and weight to the lowest.
     *
     * @param array $castellers An array of Casteller instances.
     *
     * @return array The sorted Casteller array.
     */
    public function sortCastellersList( array $castellers )
    {
        $result = array();

        if ( $castellers[0]->getHeight() < $castellers[1]->getHeight() && $castellers[0]->getWeight() < $castellers[1]->getWeight() )
        {
            $result[] = $castellers[1];
            $result[] = $castellers[0];
        }

        return $result;
    }
}