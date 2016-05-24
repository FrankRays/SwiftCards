<?php 
	/*
		UserPie Version: 1.0
		http://userpie.com
		

	*/
	require_once("models/config.php");
	/*
	* Uncomment the "else" clause below if e.g. userpie is not at the root of your site.
	*/

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo $websiteName; ?> </title>
<?php require_once("head_inc.php"); ?>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
            <script src="//code.jquery.com/jquery-1.10.2.js"></script>
            <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
            <script src="assets/js/agile.js"></script>
    </head>
    
    <body>
<?php require_once("navbar.php"); ?>
        <div id="content">
            
            
            <h1>Welcome</h1>
            
            <p>Welcome to your account page <strong><?php echo $loggedInUser->display_username; ?></strong></p>
            <h4 style="display: inline; padding-right: 20px;">Select a methodology</h4>
            <br/>
            
            <ol id="selectable">
                <li class="ui-state-default">Scrum</li>
                <li class="ui-state-default">Pair Programming</li>
                <li class="ui-state-default">Kanban</li>
            </ol>
        </div>
    </body>
</html>


