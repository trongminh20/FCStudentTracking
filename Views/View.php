<?php

class View
{
    public function __construct()
    {
    }

    /**
     * @param $id
     * @param $class
     * @param $inputList is a 3D array
     * [
     *  [
     *      fieldset => [],
     *      legend => []
     *  ],
     *  [
     *      label => [],
     *      intput => []
     *  ],
     *  [
     *      label => [],
     *      input => []
     *  ],
     *  [
     *      end_fieldset=>[]
     *  ]
     *  ,...
     * ]
     * @param $formMethod
     * @param $formAction
     * @param $formName
     */
    public function display_customized_form($id, $class, $inputList, $formMethod, $formAction, $formName)
    {
        $form = new Form($id, $class, $formMethod, $formAction, $formName);
        for ($i = 0; $i < count($inputList); $i++) {
            foreach ($inputList[$i] as $key => $val) {
                if ($key == 'fieldset') $form::start_fieldset($val);
                if ($key == 'end_fieldset') $form::end_fieldset();
                if ($key == 'legend') $form::add_legend($val);
                if ($key == 'label') $form::add_label($val);
                if ($key == 'input') $form::add_input($val);
                if ($key == 'textarea') $form::add_text_area($val);
                echo "<br>";
                if ($key == 'selection') $form::add_selection($val);
            }
        }
        $form::end_form();
    }

    /**
     * generate a form view from a chosen table
     * @param string $id
     * @param string $class
     * @param $fieldSet is the <fieldset> of form
     * @param string $action is form's action
     * @param string $method is form's method
     * @param $table is the name of table need to be display
     * @param $model current Model
     */
    public function display_table_to_form($id = "", $class = "",
                                          $fieldSet, $action = "",
                                          $method = "", $table, $model)
    {
        $data = $model->get_type($table);
        echo "<form class='$class' id='$id' method='$method' action='?action=$action'>";
        echo "<filedset>";
        echo "<legend>$fieldSet</legend>";
        foreach ($data as $k => $v) {
            echo "<label>$k</label>";
            if (strpos($v, 'int') !== false) {
                $type = 'number';
            } else if (strpos($v, 'date') !== false) {
                $type = 'date';
            } else if ($k == 'Password') {
                $type = 'password';
            } else if ($k == 'Email') {
                $type = 'email';
            } else {
                $type = 'text';
            }
            echo "<input class='form-control' type='$type' name = '$k' placeholder='$k' required='required'><br>";
        }
        echo "<input class='btn btn-primary' type='submit' name='submit' value='submit'>";
        echo "</filedset>";
        echo "</form>";
    }

    /**
     * Display data from the chosen table with wanted columns
     * @param string $id
     * @param string $class
     * @param $table the chosen table
     * @param $listOfUnsetCols an array of the cols that won't be displayed
     * @param $model is the current Model
     */
    public function display_as_table_multi_rows($id = "", $class = "",
                                                $table, $listOfUnsetCols, $model)
    {
        $count = 0;
        $data = $model->select_displayed_data($table, $listOfUnsetCols);
        echo "<table id='$id' class='$class'>";

        foreach ($data as $d) {
            echo "<tr>";
            foreach ($d as $key => $vals) {
                if ($count < count($d)) {
                    echo "<td>$key</td>";
                } else {
                    echo "<td></td>";
                }
                $count += 1;
            }
            echo "</tr><tr>";

            foreach ($d as $key => $vals) {
                echo "<td>$vals</td>";
            }
            echo "</tr>";
        }

        echo "</table><br>";
    }

    public function display_as_table_single_row($table, $data, Model $model){
        $arr = $model -> select_single_row($table, $data);
        if($table == 'apsds' || $table == 'ppes' || $table == 'graduations'){
            if(isset($arr['student_id'])){
                unset($arr['student_id']);
            }
        }
        echo "<table>";
        foreach($arr as $k => $v){
            echo "<tr>";
            echo "<td>$k</td>";
            if($v == NULL){
                echo "<td>Not Available</td>";
            }else if(gettype($v) == "array"){
                echo "<td>";
                foreach($v as $d){
                    echo $d.", " ;
                }
                echo "</td>";
            }
            else {
                echo "<td>$v</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    /**
     * auto generate a table with Edit and Delete buttons
     * @param string $id
     * @param string $class
     * @param $actionForEdit routes to controller or view for feature Edit information
     * @param $actionForDelete routes to controller or view for feature Delete information
     * @param $data
     */
    public function show_table_with_manage_functions($id = "", $class = "",
                                                     $actionForEdit, $actionForDelete,
                                                     $actionForReset, $data)
    {
        $count = 0;

        echo "<table id='$id' class='$class'>";
        //display table header
        foreach ($data as $d) {
            echo "<tr>";
            foreach ($d as $key => $vals) {
                if ($count < count($d)) {
                    echo "<td>$key</td>";
                } else {
                    echo "<td></td>";
                }
                $count += 1;
            }
            echo "</tr><tr>";

            //display table content
            foreach ($d as $key => $vals) {
                echo "<td>$vals</td>";

            }
            //information for Edit
            echo "<td>";
            echo "<form action='?action=$actionForEdit' method='POST'>";
            foreach ($d as $k => $v) {
                echo "<input type='hidden' name='$k' value='$v'>";
            }
            echo " <input class='btn btn-default' type='submit' name='edit_user_info' value='Edit'>";
            echo "</form>";

            echo "</td>";
            //information for Delete
            echo "<td>";
            echo "<form action='?action=$actionForDelete' method='POST'>";
            foreach ($d as $k => $v) {
                echo "<input type='hidden' name='$k' value='$v'>";
            }
            echo " <input class='btn btn-danger' type='submit' name='delete_user' value='Delete'>";

            echo "</form>";

            echo "</td>";
            //information for Reset Password
            echo "<td>";
            echo "<form action='?action=$actionForReset' method='POST'>";
            foreach ($d as $k => $v) {
                echo "<input type='hidden' name='$k' value='$v'>";
            }
            echo " <input class='btn btn-warning' type='submit' name='reset_password' value='Reset Password'>";
            echo "</form>";

            echo "</td>";
            echo "</tr>";
        }
        echo "</table><br>";
    }

}