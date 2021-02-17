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
                if($count < count($d)){
                    echo "<td>$key</td>";
                }else{
                    echo "<td></td>";
                }
                $count+=1;
            }
            echo "</tr><tr>";

            foreach ($d as $key => $vals) {
                echo "<td>$vals</td>";
            }

            echo "</tr>";
        }
        echo "</table><br>";
    }
}