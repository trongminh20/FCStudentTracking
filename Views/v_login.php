<?php
    include "v_header.php";
?>
<div id="wrapper">
    <h2 id="header">First College Student Management</h2>
    <form class="control-form" id="login-form">
        <div id="form-title">Welcome Back!</div>
        <input type="text" class="form-control" id="username" placeholder="Enter your username" name="username"><br>
        <input type="password" class="form-control" id="password" placeholder="Enter your password" name="password"><br>
        <input type="submit" class="form-btn form-control" id="login-btn" value="LOG IN" name="submit">
        <div id="forget-password"><a href="#">Fogot your password?</a></div>
    </form>
</div>
<?php
    include "v_footer.php";
    ?>
