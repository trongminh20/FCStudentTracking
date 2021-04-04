<?php

class Controller
{

    public function __construct()
    {
    }

    private function set_time()
    {
        date_default_timezone_set('Canada/Pacific');
    }

    public function index($dr, Model $model)
    {
        $this->set_time();
        $action = $dr[0];
        switch ($action) {
            case 'v':
                return "Views/" . $dr . ".php";
            case 'c':
                if(isset($_SESSION['session_id'])){
                $this->$dr($model);
                }else{
                    header("location:?action=v_login");
                }

            case 'm':
                return "Models/" . $dr . ".php";
            default:
                return "errors/404.php";
        }
    }

    private function c_search(Model $model)
    {
        $keyword = $_POST['keyword'];
        /*
         * @ search for username
         * # search for id number
         * ! search for programID
         * */
        if ($keyword[0] == '@' || $keyword[0] == '#' || $keyword[0] == '!') {
            $_SESSION['search_result'] = $model->search_student($keyword);
            header("Location:?action=v_search_res");
        } else {
            $_SESSION['search_error'] = "You have entered invalid keyword's format";
            header("Location:?action=v_search_res");
        }
    }

    private function c_login(Model $model)
    {
        if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = SHA1($_POST['password']);
            $success = $model->sign_in($username, $password);
            $sessionID = rand(1000, 9999);
            $check = $model ->select('sessions',['session_id' => $sessionID]);
            while(count($check) > 0){
                $check = $model ->select('sessions',['session_id' => $sessionID]);
                $sessionID = rand(1000, 9999);
            }

            if ($success == 1) {
                $data = $model->select_user($username);
                if ($data[0]['admin'] == 1) {
                    $user = new Admin();
                } else if ($data[0]['admin'] == 0) {
                    $user = new Employee();
                }
                $user->set_id($data[0]['id']);
                $user->set_username($data[0]['username']);
                $user->set_email($data[0]['email']);
                $user->set_phone_number($data[0]['phone']);
                $user->set_department($data[0]['department']);
                $user->set_role($data[0]['admin']);
                // assign User's information from database -> $_SESSION
                $_SESSION['session_id'] = $sessionID;

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

    private function c_auto_logout(Model $model)
    {
        $data = ['session_id' => $_SESSION['session_id'],
            'user_id' => $_SESSION['user']['id'],
            'created' => $_SESSION['login'],
            'logout' => date('Y-m-d H:i:s')
        ];
        $model->insert('sessions', $data);
        session_destroy();
        header("Location:?action=v_logout");
    }

    private function c_add_user(Model $model)
    {
        if (!empty($_POST)) {
            if (isset($_POST['add_user'])) {
                $id = $_POST['id'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $department = $_POST['department'];
                $fname = $_POST['fname'];
                $role = $_POST['role'];

                $user = new Employee();
                $user->Employee($id, $username, $password,
                    $email, $phone, $department);
                try {
                    $model->create_user('employees', $user);
                    $model->add_user_info('emp_info',
                        ['eid' => $id, 'fname' => $fname, 'role' => $role]);
                } catch (PDOException $e) {
                    $_SESSION['add_user_error'] = "Invalid data submitted!";
                    header("Location:?action=v_user_manage");
                }
            }
        } else {
            $_SESSION['add_user_error'] = "There are no data submitted! Please add information";
        }
        header("Location:?action=v_user_manage");
    }

    private function c_update_user_info(Model $model)
    {
        if (isset($_POST['edit'])) {
            $data = $_POST;
            $id = ['id' => $data['id']];
            unset($data['edit']);
            try {
                $model->change_info('employees', $data, $id);
            } catch (PDOException $e) {
                $_SESSION['update_user_info'] = $e->getMessage();
            }
            $_SESSION['update_user_info'] = "User's information have been updated successfully";
            header("Location:?action=v_user_manage");
        } else {
            $_SESSION['update_user_info'] = "Invalid input data, please try again";
            header("Location:?action=v_user_manage");
        }
    }

    private function c_change_pass(Model $model)
    {
        $newPass = SHA1($_POST['new_pass']);
        $_SESSION['user']['password'] = $newPass;
        $id = ['id' => $_SESSION['user']['id']];
        $table = 'employees';
        $data = ['password' => $newPass];
        if (!empty($newPass)) {
            $model->change_info($table, $data, $id);
            $_SESSION['change_password_announce'] = 'Your password has been changed';
        } else {
            $_SESSION['change_password_announce'] = 'Password has not successfully changed! Try again!';
        }
        header("Location:?action=v_change_password");
    }

    private function c_delete_user(Model $model)
    {
        $model->delete('requests', 'username', $_POST['username']);
        $model->delete('emp_info', 'eid', $_POST['id']);
        $model->delete('sessions', 'user_id', $_POST['id']);
        $model->delete('employees', 'id', $_POST['id']);

        $_SESSION['manage_info'] = $_POST['username'] . " has been deleted";
        header("Location:?action=v_user_manage");
    }

    private function c_forgot_password(Model $model)
    {
        $username = $_POST['username'];

        $check = $model->select('employees', ['username' => $username]);
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
        $id = ['id' => $_POST['id']];
        $number = rand(11, 99);
        $newPass = $_POST['id'] . $number;
        $data = ['password' => SHA1($newPass)];

        $content = "<h3>Your password has been reset:</h3><br>" .
            "<ul><li>Your new password is: $newPass</li></ul>" .
            "<h3>Please change your password immediately once you logged in successfully.</h3>";
        $model->change_info('employees', $data, $id);

        Mail::$fromAddress = "info.firstcollege@gmail.com";
        Mail::$fromPwd = "FCstudenttracking";
        Mail::$toAddress = $_POST['email'];
        Mail::$content = $content;
        Mail::$subject = 'Password has been reset';
        $_SESSION['manage_info'] = $_POST['username'] . "'s password has been reset, a message sent to user's email. ";
        Mail::send_mail();
        header("Location:?action=v_user_manage");
    }

    private function c_to_report(Model $model)
    {
        $id = $_POST['stu_id'];
        $programId = $_POST['prog_id'];
        $_SESSION['student'] = ['stu_id' => $id,
            'prog_id' => $programId];
        header("Location:?action=v_report");
    }

    private function c_add_apsds(Model $model)
    {
        if (isset($_POST['add_apsds'])) {
            $data = $_POST;
            if (isset($data['rmt_stu_materials'])) {
                $data['rmt_stu_materials'] = implode(", ", $data['rmt_stu_materials']);
            }
            unset($data['add_apsds']);
            $data = $this->alter_null($data);
            $model->insert('apsds', $data);
            header("Location:?action=v_admPriorToStartDate_form");
        }
    }

    private function c_add_ppes(Model $model): void
    {
        if (isset($_POST['add_ppes'])) {
            $data = $_POST;
            unset($data['add_ppes']);
            $data = $this->alter_null($data);
            $model->insert('ppes', $data);
            header("Location:?action=v_priorToPracticeEducation_form");
        }
    }

    private function c_add_grad(Model $model): void
    {
        if (isset($_POST['add_grad'])) {
            $data = $_POST;
            unset($data['add_grad']);
            $data = $this->alter_null($data);
            $model->insert('graduations', $data);
            header("Location:?action=v_graduation_form");
        }
    }

    private function c_add_student(Model $model): void
    {
        if (isset($_POST['add_student'])) {
            $data = $_POST;
            unset($data['add_student']);
            $data = $this->alter_null($data);
            $model->insert('students', $data);
            $_SESSION['add_student_announcement'] = "Student " . $data['name'] . " has been added successfully";
            header("Location:?action=v_enrollmentBriefSummary_form");
        } else {
            $_SESSION['add_student_announcement'] = "Invalid data, please try again";
        }
    }

    private function c_add_payment(Model $model): void
    {

        $data = $_POST;
        unset($data['add_payment_tracking']);
        $data = $this->alter_null($data);

        $model->insert('payment_tracking', $data);
        header("Location:?action=v_paymentTracking_form");

    }

    private function c_add_new_record(Model $model): void
    {
        if (isset($_POST['select_section'])) {
            $case = $_POST['select_section'];

            if ($case === 'Enrollment Brief Summary') {
                header("location:?action=v_enrollmentBriefSummary_form");
            }
            if ($case === 'Admission Prior to Start Date') {
                header("location:?action=v_admPriorToStartDate_form");
            }
            if ($case === 'Prior to Practice Education') {
                header("location:?action=v_priorToPracticeEducation_form");
            }
            if ($case === 'Graduation') {
                header("location:?action=v_graduation_form");
            }
            if ($case === 'Payment Tracking') {
                header("location:?action=v_paymentTracking_form");
            }
        }
    }

    private function c_update_record(Model $model): void
    {
        if (isset($_POST['update_record'])) {
            $data = $_POST;
            $table = $data['table'];
            if ($table == 'students') {
                $id = ['id' => $data['id']];
            } else {
                $id = ['student_id' => $data['student_id']];
            }
            unset($data['table']);
            unset($data['update_record']);
            if (isset($data['rmt_stu_materials'])) {
                $data['rmt_stu_materials'] = implode(", ", $data['rmt_stu_materials']);
            }
            $data = $this->alter_null($data);
            try {
                $model->change_info($table, $data, $id);
                $_SESSION['update_announce'] = 'Record updated';
            } catch (PDOException $e) {
                $_SESSION['update_announce'] = $e->getMessage();
            }
            header("Location:?action=v_add_new_record");
        } else {
            $_SESSION['update_announce'] = "Invalid data, please try again";
        }
    }

    /**
     * replacing an empty with NULL for inserting into db
     * @param $data
     * @return mixed
     */
    private function alter_null($data): array
    {
        $d = $data;
        $arrOfNulls = array();
        foreach ($d as $k => $v) {
            if (empty($d[$k])) {
                array_push($arrOfNulls, $k);
            }
        }
        for ($i = 0; $i < count($arrOfNulls); $i++) {
            foreach ($d as $k => $v) {
                if ($k == $arrOfNulls[$i]) {
                    $d[$k] = NULL;
                }
            }
        }
        return $d;
    }

}
