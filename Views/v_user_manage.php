<?php
include "v_masterPage_header.php";
?>
<?php
include "v_masterPage_sidebar.php";
?>
<div id="mainContent" style="margin-left:50px;">
    <h1>USER MANAGEMENT INTERFACE</h1>

    <?php
    //display error or announcements if existed
    if (!empty($_SESSION['manage_info'])) {
        echo "<h4>" . $_SESSION['manage_info'] . "</h4>";
        unset($_SESSION['manage_info']);
    }
    //the cols that are not displayed
    $unsetCols = ['password'];
    $loadTable = $model->select_displayed_data("employees",$unsetCols);
    $view->show_table_with_manage_functions("", "table table-striped", "v_edit_user", "c_delete_user",
        "c_reset_pass",
        $loadTable);
    ?>

    <?php
    if(isset($_SESSION['add_user_error'])){
        echo "<div class='text-center'>".
                "<h2 style='color:darkred'>".
                    $_SESSION['add_user_error'].
                "</h2>".
            "</div>";
        unset($_SESSION['add_user_error']);
    }else{
        echo "<hr>";
    }
    $labels = [
            'Employee ID'=> 'id',
            'Username' => 'username',
            'Employee fullname' => 'fname',
            'Phone number' => 'phone',
            'Employee Email' => 'email',
            'Department' => 'department',
            'Password' => 'password',
            'Administrator (1 for Yes, 0 for No)' => 'admin',
            'Employee\'s role' => 'role'
    ];
    $form = new Form("form-group col-lg-8","","c_add_user","POST", 'Add new Employee',"");
    foreach($labels as $k => $v){
        $form->add_label(['for'=>'','label'=>$k]);
        if($v == 'password') {
            $form->add_input(['id' => '', 'class' => 'form-control', 'name' => $v,
                'type' => 'password', 'required' => ""]);
        }else if($v == 'email') {
            $form->add_input(['id' => '', 'class' => 'form-control', 'name' => $v,
                'type' => 'email', 'required' => ""]);
        }else{
            $form->add_input(['id' => '', 'class' => 'form-control', 'name' => $v,
                'type' => 'text', 'required' => ""]);
        }
    }
    echo "<br>";
    $form ->add_input(['class'=>'btn btn-primary','type' => 'submit', 'name' => 'add_user', 'value'=>'Add User']);
     $form ->add_input(['class'=>'btn btn-warning btn-inline','type' => 'reset', 'value'=>'Clear']);
    $form ->end_form();
    ?>
</div>
