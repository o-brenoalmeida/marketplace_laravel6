<?php

function filterItemByStoreId(array $items, $storeId){
    return array_filter($items, function($line) use($storeId){
        return $line['store_id'] == $storeId;
    });
}