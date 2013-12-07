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
        $sorted_castellers  = array();
        $castellers_size    = count( $castellers );

        for( $i = 0; $i < $castellers_size; $i++ )
        {
            $max_casteller_key = array_search( max( $castellers ), $castellers );
            $sorted_castellers[] = &$castellers[$max_casteller_key];

            unset( $castellers[$max_casteller_key] );
        }

        return $sorted_castellers;
    }
}