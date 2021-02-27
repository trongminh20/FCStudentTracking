<?php

class Form
{
    public function __construct()
    {
    }

    public static function start_form($class, $id, $action, $method, $formName)
    {
        echo "<h3>".$formName."</h3>";
        echo "<form class='" . $class . "' id='" . $id . "' action='" . $action . "' method='" . $method . "'>";
    }

    public static function add_label($label){
        echo "<label for='".$label['for']."'>".$label['label']."</label>";
    }

    /**
     * @param $attributes is the array of inputs [[input1],[input2]]
     */
    public static function add_input($attributes)
    {
        $input = "";
//        foreach ($attributes as $att) {
            $input .= "<input ";
            foreach ($attributes as $name => $value) {
                $input .= ' ' . $name . " = '" . $value . "'";
            }
            $input .= " ><br>";
//        }
        echo $input;
    }

    /**
     * @param $id
     * @param $class
     * @param $name
     * @param $options
     */
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