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
        foreach ($point_id_array as $key => $value) {
            foreach ($member_array as $child) {
                if ($child->get_id() === $key) {
                    array_unshift($array, $child);
                    break;
                }
            }
        }
        return $array;
    }

    private function get_small_array($member_array)
    {
        $array = array();
        foreach ($member_array as $child) {
            $array[$child->get_id()] = $child->get_points();
        }
        asort($array, SORT_DESC);
        return $array;
    }

    public function to_html()
    {
        $html = "";
        $i = 1;
        foreach ($this->ranking_list as $child) {
            $html = $html . '<tr align="center">';
            $array = array();
            $array['rank'] = $i;
            $array['name'] = $child->get_name();
            $array['points'] = $child->get_points();
            $array['games'] = $child->get_games();
            $array['win'] = $child->get_win();
            $array['tie'] = $child->get_tie();
            $array['lose'] = $child->get_lose();
            foreach ($array as $key => $value) {
                $html = $html . "<td >$value</td>";
            }
            $html = $html . "</tr>";
            $i++;
        }
        return $html;
    }
}