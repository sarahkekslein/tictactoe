<?php

/**
 * Created by PhpStorm.
 * User: Marvin
 * Date: 23.07.2015
 * Time: 12:43
 */
class Ranking
{
    private $ranking_list;

    public function __construct($member_array)
    {
        $this->ranking_list = $this->sort($member_array);
    }

    private function sort($member_array)
    {
        $point_id_array = $this->get_small_array($member_array);
        $array = array();
        for($i = 0; $i<count($point_id_array); $i++){
            $array[] = $member_array[$point_id_array[$i]];
        }
        return $array;
    }

    private function get_small_array($member_array)
    {
        $array = array();
        foreach ($member_array as $child) {
            $array[$child->get_points()] = $child->get_id();
        }
        array_multisort($array, SORT_DESC);
        var_dump($array);
        return $array;
    }

    public function to_html (){

    }
}