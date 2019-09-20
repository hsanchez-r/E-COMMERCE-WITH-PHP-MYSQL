<?php
$page_title="SIGN IN";
require_once('includes/header2.php');
require_once('includes/database.php');

$login_status = '';
if (isset($_SESSION['login_status']))
    $login_status = $_SESSION['login_status'];

if ($login_status == 1) {
    echo"<p>You are logged in as " . $_SESSION['login'] . ".</p>";
    echo"<a href = 'log_out.php' style='color: white;'>Logout</a><br/>";
    include('includes/footer2.php');
    exit();
}
if ($login_status == 3) {
    echo"<p>Thank you for registering with us. Your account has been created.</p>";
    echo"<a href='log_out.php'>Logout</a><br/>";
    include('includes/footer2.php');
    exit();
}

if ($login_status == 2) {
    $message = "User name or password invalid. Please try again.";
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <style type="text/css">
            input[type="submit"]{
                cursor:pointer;
            }
        </style>
    </head>

    <body>
    <center>
     
        <h3>Login Here</h3>
        <form action="log_in.php" method="post">
            <table>
                <tbody>
                    <tr>
                        <td>Username:</td>
                        <td><input type="text" name="username" placeholder="Enter username"></td>
                    </tr>

                    <tr>
                        <td>Password:</td>
                        <td><input type="password" name="password" placeholder="Enter password"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="submit" value="Login"></td>
                        <td>Not yet a Member? <a href="reg_form.php">Register</a></td>
                    </tr>    

                </tbody>
            </table>


        </form>
    
        <?php
        include ('includes/footer2.php');
        ?>
    </center>

