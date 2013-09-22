<?php

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form action="Script/AddNewAreaOfExpertise.php" method="POST">

        <table border="1">

            <tbody>
                <tr>
                    <td>Identification Id</td>
                    <td><input type="text" name="aiid" value="" /></td>
                </tr>
                <tr>
                    <td>Area of Expertise</td>
                    <td><input type="text" name="aoi" value="" /></td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td><textarea name="aoidesc" rows="4" cols="20">
enter a description to identify the area of interest
                    </textarea></td>
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
