<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form action="Script/AddNewUniversity.php" method="POST">

        <table border="1" cellspacing="5">

            <tbody>
                <tr>
                    <td>University Identification No</td>
                    <td><input type="text" name="uid" value="" /></td>
                </tr>
                <tr>
                    <td>University Name</td>
                    <td><input type="text" name="uname" value="" /></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><input type="text" name="uaddress" value="" size="60"/></td>
                </tr>
                <tr>
                    <td>Contact no</td>
                    <td><input type="text" name="utel" value="" size="10"/></td>
                </tr>
                <tr>
                    <td><input type="reset" value="Reset" /></td>
                    <td><input type="submit" value="Save" /></td>
                </tr>
            </tbody>
        </table>




        </form>




        <?php
        // put your code here
        ?>
    </body>
</html>
