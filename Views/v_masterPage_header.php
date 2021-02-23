<?php
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>First College Management</title>
    <link rel="stylesheet" href="css/css_reset.css"/>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/master_page.css"/>
    <link rel="stylesheet" href="css/w3.css"/>
    <!-- jQuery CDN -->
    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<!-- Header Section -->

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header" style="width: 250px;">
            <div style="float: left; width: 84%">
                <h3>
                    <a href="#">
                        <img src="images/logo.png" width="60" style="padding: 0 5px 0 5px;"/>First College
                    </a>
                </h3>
            </div>

        </div>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div style="float: left; padding: 10px;">
                <input type="text" placeholder="Search..">
                <button type="button" class="btn btn-light">GO!</button>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown top-menu-item">
                    <a href="#" class="dropdown-toggle profile waves-effect waves-light" data-toggle="dropdown"
                       aria-expanded="true" style="background: #ffffff;">
                        <img id="userimg" src="images/default.png" alt="user-img" class="img-circle" width="30"
                             style="border: 1px solid"/>
                    </a>
                    <ul class="dropdown-menu" style="padding: 10px;">
                        <li id="username"><a href="#" style="background: #ffffff;"><i
                                        class="glyphicon glyphicon-user"></i>
                                <?= $_SESSION['user']['username'] ?>
                                (<?= ($_SESSION['user']['admin'] == 1) ? 'admin' : 'Emp' ?>)
                            </a></li>
                        <li class="divider"></li>
                        <li id="changepassword"><a href="?action=v_change_password" style="background: #ffffff;"><i
                                        class="glyphicon glyphicon-lock"></i> Change Password</a></li>
                        <li class="divider"></li>
                        <?php
                        if ($_SESSION['user']['admin'] == 1) {
                            // I changed delete and edit user -> user management page
                            // TODO:
                            // edit icon if needed
                            // edit css if needed
                            // delete the commented html code
                            ?>
                            <li id="adduser"><a href="?action=v_user_manage" style="background: #ffffff;"><i
                                            class="glyphicon glyphicon-plus"></i> Manage User</a></li>
                            <li class="divider"></li>
<!-- WE ARE NO LONGER NEED THIS ONE
                         <li id="deleteuser"><a href="?action=v_delete_user" style="background: #ffffff;"><i-->
<!--                                            class="glyphicon glyphicon-trash"></i> Delete User</a></li>-->
<!--                            <li class="divider"></li>-->
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


