<?php
include "v_header.php";

?>

<div id="wrapper">
    <h2 id="header">First College Student Management</h2>
    <form class="control-form" id="login-form" action=".?action=c_login" method="POST">
        <div id="form-title">Welcome Back!</div>
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
        <input type="text" class="form-control" id="username-txt" placeholder="Enter your username" name="username"
               required="required"
        ><br>
        <input type="password" class="form-control" id="password-txt" placeholder="Enter your password"
               name="password" required="required"><br>
        <input type="submit" class="form-btn form-control" id="login-btn" value="LOG IN" name="submit">
        <div id="forget-password">
            <a href="?action=c_forget_password">Forgot your password?</a>
        </div>
    </form>
</div>

<?php
    include "v_footer.php";
?>
