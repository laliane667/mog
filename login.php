<?php
    include_once 'header.php';
?>


<div id="signup-form">
    <h2>Log in</h2>
    <form action="includes/login.inc.php" method="post">
        <input type="text" name="name" placeHolder="Username/E-mail...">
        <input type="password" name="pwd" placeHolder="Password...">
        <button type="submit" name="submit">Log in</button>
    </form>
</div>


<?php
    include_once 'footer.php';
?>