<?php
    include_once 'header.php';
?>


<div id="signup-form">
    <h2>Sign up</h2>
    <form action="includes/signup.inc.php" method="post">
        <input type="text" name="name" placeHolder="Full name...">
        <input type="text" name="email" placeHolder="E-mail...">
        <input type="text" name="uid" placeHolder="Username...">
        <input type="password" name="pwd" placeHolder="Password...">
        <input type="password" name="pwdRepeat" placeHolder="Repeat password...">
        <button type="submit" name="submit">Sign up</button>
    </form>
</div>


<?php
    include_once 'footer.php';
?>