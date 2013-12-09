<?php

namespace lombartec\Castellers;

/**
 * Defines that a class is able to sort in one way or another.
 *
 * @author Carlos Lombarte <lombartec@gmail.com>
 */
interface SorterInterface
{
    /**
     * Sorts an array of items.
     *
     * @param array $item_list The items to be sorted.
     * @return array An array containing the sorted items.
     */
    public function sortItems( array $item_list );
}