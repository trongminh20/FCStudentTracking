<?php


class View
{
    public function __construct()
    {
    }

    public function display_as_form($id, $class, $data){

    }

    public function display_as_table($id = "", $class = "", $data)
    {
        $count = 0;
        echo "<table id='$id' class='$class'>";
        foreach($data as $d) {
            echo "<tr>";
            foreach ($d as $key => $vals) {
                if($count < count($data)){
                    echo "<td>$key</td>";
                }else{
                    echo "<td>$vals</td>";
                }
                $count++;
            }
            echo "</tr>";
        }
        echo "</table><br>";
    }
}