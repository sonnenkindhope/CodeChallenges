<?php
namespace App\FlatListDepth;

class Nest
{

    /**
     * Remodels arrays
     * [1,2] => [1,[2]]
     *
     * @param array<mixed> $items
     * @return array<mixed>
     */
    static function incrementalDepth(array $items) : array
    {
        $result = [];

        for($i = count($items); $i >= 1; $i--){
            if ( count($result) > 0){
                $result = [$items[$i-1], $result];
            } else {
                $result[] = $items[$i-1];
            }
        }

        return $result;
    }
}