<?php
include "v_masterPage_header.php";
?>
<?php
include "v_masterPage_sidebar.php";
?>
<div id="mainContent" style="">
    <h1>USER INFORMATION</h1>

    <?php
    //display error or announcements if existed
    if (!empty($_SESSION['manage_info'])) {
        echo "<h4>" . $_SESSION['manage_info'] . "</h4>";
        unset($_SESSION['manage_info']);
    }
    //the cols that are not displayed
    $unsetCols = ['password'];
    $loadTable = $model->select_displayed_data("employees", $unsetCols);
    $view->show_table_with_manage_functions("",
        "table table-striped",
        "v_edit_user",
        "c_delete_user",
        "c_reset_pass", $loadTable);
    ?>
    <hr>
    <?php
    if (isset($_SESSION['add_user_error'])) {
        echo "<div class='text-center'>" .
            "<h2 style='color:darkred'>" .
            $_SESSION['add_user_error'] .
            "</h2>" .
            "</div>";
        unset($_SESSION['add_user_error']);
    } else {
        echo "";
    }

    $labels = [
        'Employee ID' => 'id',
        'Username' => 'username',
        'Employee fullname' => 'fname',
        'Phone number' => 'phone',
        'Employee Email' => 'email',
        'Department' => 'department',
        'Password' => 'password',
        'Administrator' => 'admin',
        'Employee\'s role' => 'role'
    ];

    $form = new Form(['class' => "form-group col-lg-8",
        'action' => '?action=c_add_user',
        'method' => "POST"], "ADD NEW USER");
    echo "<ul><li>User ID must be unique</li><li>Username must be unique</li></ul>";
    foreach ($labels as $k => $v) {
        echo "<br>";
        $form->add_label(['for' => ''], $k);
        if ($v === 'id') {
            $form->add_input(['class' => 'form-control',
                'type' => 'number',
                'name' => $v,
                'placeholder' => 'User ID number',
                'required' => ""]);
        } elseif ($v == 'password') {
            $form->add_input(['id' => '',
                'class' => 'form-control',
                'name' => $v,
                'type' => 'password',
                'required' => ""]);
        } else if ($v == 'email') {
            echo "<br>";
            $form->add_label(['id'=>'emailValidateWarn', "style"=>"color:gray; font-size:10px;"],"");
            $form->add_input(['id' => 'email',
                'class' => 'form-control',
                'name' => $v,
                'type' => 'email',
                'required' => "",
                'onchange'=>"validate_email();"
            ]);
        } else if ($v == 'phone') {
            echo "<br>";
            $form->add_label(['for' => "tel",
                'id' => 'validateWarning',
                "style" => "font-size:10px;color:gray"], '');
            $form->add_input([
                "class" => 'form-control',
                "type" => "text",
                'id' => 'tel',
                "name" => $v,
                'onchange' => 'validate_phoneNumber();'
            ]);
        } else if ($v == 'admin') {
            echo "<br>";
            $form->add_input(['id' => 'admin',
                'type' => 'radio',
                'name' => $v,
                'value' => 'admin']);
            $form->add_label(['for' => 'admin'], '  Admin');
            echo "<br>";
            $form->add_input(['id' => 'user',
                'type' => 'radio',
                'name' => $v,
                'value' => 'user']);
            $form->add_label(['for' => 'user'], '  User');
        } else {
            $form->add_input(['id' => 'ID'.$v,
                'class' => 'form-control',
                'name' => $v,
                'type' => 'text',
                'required' => "",
                'onchange' =>"validate_txt(this.id)"
                ]);
        }
    }
    echo "<br>";
    $form->add_input(['id' => 'submit',
        'class' => 'btn btn-primary',
        'type' => 'submit',
        'name' => 'add_user',
        'value' => 'Add User']);
    $form->add_input(['class' => 'btn btn-warning btn-inline',
        'type' => 'reset',
        'value' => 'Clear Form']);
    $form->end_form();
    ?>
</div>
<script>


</script>