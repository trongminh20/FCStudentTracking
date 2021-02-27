<?php

class Form
{
    public function __construct()
    {
    }

    public static function start_form($class, $id, $action, $method)
    {
        echo "<form class='" . $class . "' id='" . $id . "' action='" . $action . "' method='" . $method . "'>";
    }

    /**
     *
     * @param $attributes
     */
    public static function add_input($attributes)
    {
        $input = "";
        foreach ($attributes as $att) {
            $input .= "<input ";
            foreach ($att as $name => $value) {
                $input .= ' ' . $name . " = '" . $value . "'";
            }
            $input .= " ><br>";
        }
        echo $input;
    }

    public static function add_selection_list($id, $class, $name, $options)
    {
        echo "<select name='" . $name . " id='" . $id . "' class='" . $class . "'>";
        foreach ($options as $opt => $vals) {
            echo "<option value='" . $vals . "'>";
        }
        echo "</select>";
    }

    public static function end_form()
    {
        echo "</form>";
    }
}