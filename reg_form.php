<?php

$page_title = "Register Form";

include ('includes/header2.php');
?>
<html>
    <head>
        <title>Register</title>
    </head>
    <body>

        <center>

            <h3>Register Here</h3>

           <div>
               <form action="signup.php" method="post">
            <table>
                
                <tr>
                    <td style="width: 85px">First Name: </td>
                    <td><input name="name" type="text" required></td>
                </tr>
                <tr>
                    <td>Last Name: </td>
                    <td><input name="lastname" type="text" required></td>
                </tr>
                <tr>
                    <td>User Name: </td>
                    <td><input name="username" type="text" required></td>
                </tr>
                <tr>
                    <td>Email: </td>
                    <td><input name="email" type="email" required></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input name="password" type="password" required></td>
                </tr>
                <tr>
                    <td colspan="2" style='padding: 10px 0 0 80px' class="bookstore-button">
                        <input type="submit" value="Register" />
                        <input type="button" value="Cancel" onclick="window.location.href = 'log_form.php'" />                    
                    </td>
                </tr>
            </table>

        </form>
    </div>
</div>

<?php
include ('includes/footer2.php');
