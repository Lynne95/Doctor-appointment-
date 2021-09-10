<?php
//include 'header.php';

?>
<div class="heading">
    <img src="images/doctorsapp.png" style="width: 100%;height:40%;">
</div>
<form action="index.php" method="POST">
    <table align="center" class="loginform"><tr><td>
    <div style=" color:turquoise; margin-bottom:8px;"><b>WELCOME</b></div>
    <input type="text" name="username" placeholder="Username" required="required"><br>
        <input type="password" name="password" placeholder="Password" required="required"><br>
        <input type="submit" name="login" value="LOGIN" style="width: 40%;height:40px; background-color:darkturquoise;border-radius:8px; text-align:center;"><br>
        Don't have an account?<br>
        <a href="login.php" style="text-decoration:none; color:darkturquoise; margin-left:10px;">SIGNUP</a><br>
        <?php echo $err ?>
    </td></tr></table>
    
</form>
<?php
include 'styles.html';
?>
