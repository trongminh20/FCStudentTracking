<?php


class View
{
    public function __construct()
    {
    }

    /**
     * auto generate form view of a table from database
     * @param string $id
     * @param string $class
     * @param string $action is redirect to an controller or another view
     * @param string $method is POST / GET
     * @param $data is an array that contains field names => data type.
     */
    public function display_form($id = "", $class = "", $action = "", $method = "", $data)
    {
        echo "<form class='$class' id='$id' method='$method' action='?action=$action'>";

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
            echo "<input type='$type' name = '$k' placeholder='$k' required='required'><br>";
        }
        echo "<input type='submit' name='submit' value='submit'>";
        echo "</form>";
    }


    /**
     * auto generate table view of data that got from database
     * @param string $id
     * @param string $class
     * @param $data is an array which contains data of a table
     */
    public function display_as_table($id = "", $class = "", $data)
    {
        $count = 0;

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

    /**
     * auto generate a table with Edit and Delete buttons
     * @param string $id
     * @param string $class
     * @param $actionForEdit routes to controller or view for feature Edit information
     * @param $actionForDelete routes to controller or view for feature Delete information
     * @param $data
     */
    public function show_table_with_manage_functions($id = "", $class = "", $actionForEdit, $actionForDelete,
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
            echo " <input type='submit' name='edit_user_info' value='Edit'>";
            echo "</form>";

            echo "</td>";
            //information for Delete
            echo "<td>";
            echo "<form action='?action=$actionForDelete' method='POST'>";
            foreach ($d as $k => $v) {
                echo "<input type='hidden' name='$k' value='$v'>";
            }
            echo " <input type='submit' name='delete_user' value='Delete'>";
            echo "</form>";

            echo "</td>";
            //information for Reset Password
            echo "<td>";
            echo "<form action='?action=$actionForReset' method='POST'>";
            foreach ($d as $k => $v) {
                echo "<input type='hidden' name='$k' value='$v'>";
            }
            echo " <input type='submit' name='reset_password' value='Reset Password'>";
            echo "</form>";

            echo "</td>";
            echo "</tr>";
        }
        echo "</table><br>";
    }


}