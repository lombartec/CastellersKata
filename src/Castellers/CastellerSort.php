<?php

namespace Castellers;

/**
 * Responsible of sorting a list of Casteller instances.
 *
 * @author Carlos Lombarte <lombartec@gmail.com>
 */
class CastellerSort implements SorterInterface
{
    /**
     * Returns a sorted array of Casteller instances, the sorting is defined by which Casteller has the greatest height and weight to the lowest.
     *
     * @param array $castellers An array of Casteller instances.
     *
     * @return array The sorted Casteller array.
     */
    public function sortItems( array $castellers )
    {
        $sorted_castellers  = array();

        foreach ( $castellers as $casteller )
        {
            $greatest_casteller_key     = array_search( max( $castellers ), $castellers );
            $sorted_castellers[]        = $castellers[$greatest_casteller_key];

            unset( $castellers[$greatest_casteller_key] );
        }

        return array_unique( $sorted_castellers );
    }
}