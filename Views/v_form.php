<?php

class Form
{
    /**
     * Form constructor.
     * @param $formClass
     * @param $formId
     * @param $formAction
     * @param $formMethod
     * @param $formName
     * @param string $formTarget
     */
    public function __construct($formClass, $formId, $formAction, $formMethod, $formName, $formTarget="")
    {
        echo "<h2 id='formTitle'>" . $formName . "</h2>";
        echo "<form class='" . $formClass . "' id='" . $formId . "' action='?action=" . $formAction . "' method='" . $formMethod . "' target='".$formTarget."'>";
    }

    /**
     * @param $labelAtt as [key => val]
     */
    public static function add_label($labelAtt)
    {
        $label = '<label ';
        foreach ($labelAtt as $att => $val) {
            if($att !== 'label') {
                $label .= ' ' . $att . " = '" . $val . "'";
            }
        }
        $label .= ">" . $labelAtt['label'] . "</label>";
        echo $label;
    }

    /**
     * @param $attributes is the array of inputs [key => val]
     */
    public static function add_input($attributes)
    {
        $input = "<input ";
        foreach ($attributes as $name => $value) {
            $input .= ' ' . $name . " = '" . $value . "'";
        }
        $input .= " >";

        echo $input;
    }

    /**
     * @param $attributes will be formatted as [att => [key => val],options => [...]]
     */
    public static function add_selection($attributes)
    {
        $select = "<select ";
        foreach ($attributes as $att => $value) {
            if ($att == 'att') {
                foreach ($value as $at => $v) {
                    $select .= " " . $at . " = '" . $v . "'";
                }
            }
        }
        $select .= " >";
        echo $select;
        foreach ($attributes as $att => $value) {
            if ($att == 'options') {
                foreach ($value as $v) {
                    echo "<option value='" . $v . "'>" . $v . "</option>";
                }
            }
        }
        echo "</select><br>";
    }

    /**
     * @param $attributes is formatted as [key => value]
     */
    public static function add_text_area($attributes)
    {
        $area = "<textarea ";
        foreach ($attributes as $att => $val) {
            $area .= ' ' . $att . " = '" . $val . "' ";
        }
        $area .= "></textarea><br>";
        echo $area;
    }

    /**
     * @param $fieldsetAttributes is formatter as [keu => value]
     */
    public static function start_fieldset($fieldsetAttributes)
    {
        $fieldset = "<fieldset ";
        foreach ($fieldsetAttributes as $att => $value) {
            $fieldset .= " " . $att . "='" . $value . "'";
        }
        $fieldset .= "'>";
        echo $fieldset;
    }

    public static function end_fieldset()
    {
        echo "</fieldset>";
    }

    public static function add_legend($attributes)
    {
        $legend = "<legend ";
        foreach ($attributes as $key => $val) {
            if ($key != 'value') {
                $legend .= " " . $key . " =' " . $val . "'>";
            }
        }
        $legend .= $attributes['value'] . "</legend>";
        echo $legend;
    }

    public static function end_form()
    {
        echo "</form>";
    }
}