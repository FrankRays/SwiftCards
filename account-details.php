<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <?php require_once("head_inc.php"); require_once("models/config.php"); require_once("navbar.php"); ?>
    </head>
    <body>
        <div id="content" style="text-align: center;">
            <p><strong><?php echo $loggedInUser->display_username; ?></strong><br />You are a <strong><?php  $group = $loggedInUser->groupID();
           echo $group['group_name']; ?></strong></p>
            
            <fieldset style="border: 0px solid !important;">
                <legend>
                    Change Password
                </legend>
                <a href="update-email-address.php" class="btn btn-primary" name="new">Update Email Address</a>
            </fieldset>
        <br />
                    <fieldset style="border: 0px solid !important;">
                                        <legend>
                    Update Email Address
                </legend>
                        <a href="change-password.php" class="btn btn-primary" name="new">Change Password</a>
            </fieldset>
       

      
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
