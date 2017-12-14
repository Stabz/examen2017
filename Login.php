




<?php
/**
 * Created by PhpStorm.
 * User: Dmitro
 * Date: 14-12-2017
 * Time: 09:10
 */


include ('Config.php');


if (isset($_COOKIE['logged']))
    header("Index.php");

if ($_POST['submit']) {
    //get username and password
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];

    if ($uname=="root" && $pass=="root"){
        setcookie('logged','1');
        header("Location: Index.php"); //Redirect to Index page
    }
    else echo "Wrong combinaton!";
}

?>

<html>
<body>
<form action="Login.php" method="post">
    <label>Username</label><input type="text" name="uname" /><br />
    <label>Password</label><input type="password" name="pass" /><br />
    <input type="submit" name="submit" value="Login" />
</form>
</body>
</html>