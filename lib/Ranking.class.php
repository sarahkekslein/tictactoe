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
        var_dump($array);
        return $array;
    }

    public function to_html()
    {
        $html = '';
        $i = 0;
        foreach ($this->ranking_list as $child) {
            $html = $html . '<tr><th>' . $key . '</th>' . '<th>';
            $html = (in_array($key, $editable)) ? $html . '<input name="' . $key . '" type="text" value="' . $value . '"></input></th></tr>' : $html . $value . '</th></tr>';
        }
        return ($html . '</table>');
    }

}