<?php
include "v_header.php";

?>

<div id="wrapper">
    <h2 id="header">First College Student Management</h2>
    <form class="control-form" id="loginForm" action=".?action=c_login" method="POST">
        <div id="formTitle">Welcome Back!</div>
        <div id="message">
            <?php
                if(empty($_SESSION['error'])){
                    echo "<p></p>";
                }else{
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                }
            ?>
        </div>
        <input type="text" class="form-control" id="usernameText" placeholder="Enter your username" name="username"
               required="required"
        ><br>
        <input type="password" class="form-control" id="passwordText" placeholder="Enter your password"
               name="password" required="required"><br>
        <input type="submit" class="form-btn form-control" id="loginBtn" value="LOG IN" name="submit">
        <div id="forgetPassword">
            <a href="?action=v_forgot_password">Forgot your password?</a>
        </div>
    </form>
</div>

<?php
    include "v_footer.php";
?>
