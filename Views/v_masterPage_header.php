<?php
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>First College Management</title>
    <link rel="stylesheet" href="css/css_reset.css"/>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/master_page.css"/>
    <link rel="stylesheet" href="css/w3.css"/>
    <!-- jQuery CDN -->
    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!--Custom JS-->
    <script src="js/customizeJS.js"></script>
</head>

<!-- Header Section -->
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header" style="width: 250px;">
            <div style="float: left; width: 84%">
                <h3>
                    <a href="?action=v_home">
                        <img src="images/logo.png" width="60" style="padding: 0 5px 0 5px;"/>First College
                    </a>
                </h3>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarCollapse">

            <ul class="nav navbar-nav navbar-right">
                <div style="float: left; padding: 13px;">
                    <form class="form-inline" action="?action=c_search" method="POST">
                        <input class="form-control mr-sm-2" type="search" placeholder="@student name OR #student id"
                               name="keyword" style="width:430px !important;">
                        <button class="btn btn-outline-success my-2 my-sm-0" name="search" type="submit" value="Search">
                            Search
                        </button>
                    </form>
                </div>
                <li class="dropdown top-menu-item">
                    <a href="#" class="dropdown-toggle profile waves-effect waves-light" data-toggle="dropdown"
                       aria-expanded="true" style="background: #ffffff;">
                        <img id="userimg" src="images/default.png" alt="user-img" class="img-circle" width="30"
                             style="border: 1px solid"/>
                    </a>
                    <ul class="dropdown-menu" style="padding: 10px;">
                        <li id="username"><a href="#" style="background: #ffffff;"><i
                                        class="glyphicon glyphicon-user"></i>
                                <?php
                                $fname = $model->select('emp_info', ['eid' => $_SESSION['user']['id']]);
                                echo $fname[0]['fname'];
                                ?>
                                (<?= ($_SESSION['user']['admin'] == 1) ? 'admin' : 'Emp' ?>)
                            </a></li>
                        <li class="divider"></li>
                        <li id="changepassword"><a href="?action=v_change_password" style="background: #ffffff;"><i
                                        class="glyphicon glyphicon-lock"></i> Change Password</a></li>
                        <li class="divider"></li>
                        <?php
                        if ($_SESSION['user']['admin'] == 1) {
                            ?>
                            <li id="adduser"><a href="?action=v_user_manage" style="background: #ffffff;"><i
                                            class="glyphicon glyphicon-plus"></i> Manage User</a></li>
                            <li class="divider"></li>

                            <?php
                        }
                        ?>

                        <li>
                            <form action="?action=c_logout" method="POST">
                                <input type="submit" id="btnlogout" value="Log out" name="logout" class="btn
                                btn-default
                                       btn-flat"
                                       style="background:#ef0707 ;Color:#fff;width:100%;"/>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>


