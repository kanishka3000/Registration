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



    <form action="Script/AdminAddQualification.php" method="POST">
        <table border="1" cellspacing="7" cellpadding="3">

            <tbody>
                <tr>
                    <td>Qualification Identification</td>
                    <td><input type="text" name="qid" value="" /></td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="qname" value="" /></td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td><textarea name="qdesc" rows="4" cols="20">
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
