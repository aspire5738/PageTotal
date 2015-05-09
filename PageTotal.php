<?php

namespace app\components;


class PageTotal {

    /**
     * @param $provider ActiveDataProvider
     * @param $field string
     * @return double
     */
    public static function pageTotal($provider, $field)
    {
        $total=0;
        foreach($provider as $item){
            $total+=$item[$field];
        }
        return $total;
    }

}
