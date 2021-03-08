<?php

class Controller
{

    public function __construct()
    {
    }

    public function index($dr, Model $model)
    {
        $action = $dr[0];
        switch ($action) {
            case 'v':
                return "Views/" . $dr . ".php";
            case 'c':
                $this->$dr($model);
            case 'm':
                return "Models/" . $dr . ".php";
            default:
                return "404.php";
        }
    }

    private function c_search(Model $model)
    {
        $keyword = $_POST['keyword'];
        if ($keyword[0] == '@' || $keyword[0] == '#') {
            $_SESSION['search_result'] = $model->search_student($keyword);
            header("Location:?action=v_search_res");
        } else {
            $_SESSION['search_error'] = "You has entered invalid keyword's format";
            header("Location:?action=v_search_res");
        }

    }

    private function c_login(Model $model)
    {
        if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $success = $model->sign_in($username, $password);

            if ($success == 1) {
                $data = $model->select_user($username);

                if ($data['admin'] == 1) {
                    $user = new Admin();
                } else if ($data['admin'] == 0) {
                    $user = new Employee();
                }

                $user->set_id($data['ID']);
                $user->set_username($data['Username']);
                $user->set_email($data['Email']);
                $user->set_phone_number($data['Phone']);
                $user->set_department($data['Department']);
                $user->set_role($data['admin']);

                // assign User's information from database -> $_SESSION
                $_SESSION['session_id'] = rand(1000, 9999);
                $_SESSION['user'] = $user->to_array();
                $_SESSION['login'] = date('Y-m-d H:i:s');
                header("Location:?action=v_home");
            } else {
                $_SESSION['error'] = 'invalid password or username';
                header("location:?action=v_login");
            }
        }
    }

    private function c_logout(Model $model)
    {
        if (isset($_POST['logout'])) {
            $data = ['session_id' => $_SESSION['session_id'],
                'user_id' => $_SESSION['user']['id'],
                'created' => $_SESSION['login'],
                'logout' => date('Y-m-d H:i:s')
            ];
            $model->insert('sessions', $data);
            session_destroy();
            header("Location:?action=v_logout");
        }
    }

    private function c_add_user(Model $model)
    {
        $id = $_POST['id'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $department = $_POST['department'];

        $user = new Employee();
        $user->Employee($id, $username, $password, $email, $phone, $department);
        $model->create_user('employees', $user);
        header("Location:?action=v_user_manage");
    }

    private function c_update_user_info(Model $model)
    {
        $data = $_POST;
        unset($data['edit']);

        $model->change_info('employees', $data, $data['ID']);
        header("Location:?action=v_user_manage");
    }

    private function c_change_pass(Model $model)
    {
        $newPass = $_POST['new_pass'];
        $_SESSION['user']['password'] = $newPass;
        $id = $_SESSION['user']['id'];
        $table = 'employees';
        $data = $_SESSION['user'];
        if (!empty($newPass)) {
            $model->change_info($table, $data, $id);
            $_SESSION['change_password_announce'] = 'Your password has been changed';
        } else {
            $_SESSION['change_password_announce'] = 'Your password has been changed';
        }
        header("Location:?action=v_change_password");
    }

    private function c_delete_user(Model $model)
    {
        $model->delete('requests', 'username', $_POST['Username']);
        $model->delete('employees', 'ID', $_POST['ID']);
        $_SESSION['manage_info'] = $_POST['Username'] . " has been deleted";
        header("Location:?action=v_user_manage");
    }

    private function c_forgot_password(Model $model)
    {
        $username = $_POST['username'];

        $check = $model->select_single_row('employees', ['username' => $username]);
        if ($check) {
            $request = new Request($username, 'Reset password');

            $model->request_reset_password($request);

            $_SESSION['error'] = 'YOU REQUEST HAS SENT';

            header("Location:?action=v_login");
        } else {
            $_SESSION['forget_password'] = 'YOUR USERNAME IS NOT VALID';
            header("Location:?action=v_forgot_password");

        }

    }

    private function c_reset_pass(Model $model)
    {
        $id = $_POST['id'];

        $data = ['password' => $_POST['phone']];

        $model->change_info('employees', $data, $id);

        $_SESSION['manage_info'] = $_POST['Username'] . "'s password has been reset to phone number ";

        header("Location:?action=v_user_manage");
    }

    private function c_to_report(Model $model)
    {
        $id = $_POST['stu_id'];
        $programId = $_POST['prog_id'];
        $_SESSION['student'] = [ 'stu_id' => $id,
            'prog_id' => $programId ];
        header("Location:?action=v_report");
    }

     private function c_add_apsds(Model $model)
    {
        if (isset($_POST['add_apsds'])) {
            $data = $_POST;
            $data['rmt_stu_materials'] = implode(", ", $data['rmt_stu_materials']);
            unset($data['add_apsds']);
            $model->insert('apsds', $data);
            header("Location:?action=v_admPriorToStartDate_form");
        }
    }

    private function c_add_ppe(Model $model)
    {
        if (isset($_POST['add_ppes'])) {
            $data = $_POST;
            unset($data['add_ppes']);
            $model->insert('ppes', $data);
            header("Location:?action=v_priorToPracticeEducation_form");
        }
    }

    private function c_add_grad(Model $model)
    {
        if (isset($_POST['add_grad'])) {
            $data = $_POST;
            unset($data['add_grad']);
            $model->insert('graduations', $data);
            header("Location:?action=v_graduation_form");
        }
    }

    /**
     *generate pdf for invoice
     */
    private function c_generate_invoice()
    {
    }

    /**
     * generate report pdf
     */
    private function c_generate_report_pdf()
    {

    }

    /**
     *generate report .docx
     */
    private function c_generate_report_docx()
    {

    }

    /**
     *auto sending email attaching invoice to student
     */
    private function c_sending_mail()
    {
    }


}