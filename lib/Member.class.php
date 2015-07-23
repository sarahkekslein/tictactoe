<?php
/**
 * Created by PhpStorm.
 * User: Marvin
 * Date: 23.07.2015
 * Time: 12:21
 */
class Member
{

    private $id, $name, $points, $win, $lose, $tie, $games;

    public function __construct($id)
    {
        if (is_integer($id)) {
            $this->id = $id;
            $data = $this->get_member_data();
            $this->win = $data['win'];
            $this->lose = $data['lose'];
            $this->tie = $data['tie'];
            $this->games = $this->win + $this->lose + $this->tie;
            $this->points = $this->win - $this->lose;
        } else {
            echo "Ungültige id in Member.class";
        }
    }

    private function get_member_data()
    {
        $db_connect = Database::getInstance();
        $data = Database::get_data("SELECT win, lose, tie FROM statistic WHERE userid=$this->id", $db_connect);
        $this->name = Database::get_data("SELECT name FROM user WHERE id=$this->id", $db_connect)['name'];
        return $data;

    }

    public function get_id()
    {
        return $this->id;
    }

    public function get_name()
    {
        return $this->name;
    }

    public function get_win()
    {
        return $this->win;
    }

    public function get_lose()
    {
        return $this->lose;
    }

    public function get_tie()
    {
        return $this->tie;
    }

    public function get_games()
    {
        return $this->games;
    }

    public function get_points()
    {
        return $this->points;
    }
}