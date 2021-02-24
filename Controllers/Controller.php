<?php
class Controller{

    public function __construct(){}

    public function index($dr, $model){
        $action = $dr[0];
        switch ($action){
            case 'v':
                return "Views/".$dr.".php";
            case 'c':
                $this->$dr($model);
            case 'm':
                return "Models/".$dr.".php";
            default:
                return "404.php";
        }
    }

    function c_login($model){
        if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $success = $model->sign_in($username, $password);

            if ($success == 1) {
                $data = $model->select_user($username);

                if($data['admin'] == 1){
                    $user = new Admin();
                } else if($data['admin'] == 0){
                    $user = new Employee();
                }

                $user->set_id($data['ID']);
                $user->set_username($data['Username']);
                $user->set_email($data['Email']);
                $user->set_phone_number($data['Phone']);
                $user->set_department($data['Department']);
                $user->set_role($data['admin']);

// assign User's information from database -> $_SESSION
                $_SESSION['user'] = $user->to_array();
                header("Location:?action=v_home");
            } else {
                $_SESSION['error'] = 'invalid password or username';
                header("location:?action=v_login");
            }
        }
    }

    function c_add_user($model){
        $id = $_POST['ID'];
        $username  = $_POST['Username'];
        $password  = $_POST['Password'];
        $email  = $_POST['Email'];
        $phone  = $_POST['Phone'];
        $department  = $_POST['Department'];

        $user = new Employee();
        $user  -> Employee($id, $username, $password, $email, $phone, $department);
        $model -> create_user('employees', $user);
        header("Location:?action=v_user_manage");
    }

    function c_update_info($model){
        $data = $_POST;
        unset($data['edit']);

        $model ->change_info('employees', $data, $data['ID']);
        header("Location:?action=v_user_manage");
    }

    function c_change_pass($model){
            $new = $_POST['new_pass'];
            $_SESSION['user']['password'] = $new ;
            $id = $_SESSION['user']['id'];
            $table = 'employees';
            $data = $_SESSION['user'];
            if (!empty($new)) {
                $model->change_info($table, $data, $id);
                $_SESSION['change_password_announce'] = 'Your password has been changed';
            } else {
                $_SESSION['change_password_announce'] = 'Your password has been changed';
            }
        header("Location:?action=v_change_password");
    }

    function c_delete_user($model){
        $model -> delete('requests','username',$_POST['Username']);
        $model -> delete('employees','ID', $_POST['ID']);
        $_SESSION['manage_info'] = $_POST['Username']." has been deleted";
        header("Location:?action=v_user_manage");
    }

    function c_forgot_password($model){
        $username = $_POST['username'];
        $check = $model->select_user($username);

        $request = new Request($username, 'Reset password');

        $model->request_reset_password($request);

        $_SESSION['error'] = 'YOU REQUEST HAS SENT';

        header("Location:?action=v_login");
    }

    function c_reset_pass($model){
        $id = $_POST['ID'];

        $data = ['Password' => $_POST['Phone']];

        $model->change_info('employees', $data, $id);

        $_SESSION['manage_info'] = $_POST['Username']."'s password has been reseted to phone number ";

        header("Location:?action=v_user_manage");
    }

    function c_log_out(){
        if(isset($_POST['logout'])){
            session_destroy();
            header("Location:?action=v_logout");
        }
    }
}