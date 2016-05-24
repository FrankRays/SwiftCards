<?php 

	/*
		UserCake Version: 1.0
		http://usercake.com
		

	*/
       require_once 'models/config.php';
?>	 <div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container clearfix">
        <a class="brand" id="logo" href="/"><?php echo $websiteName; ?></a>

        
        <ul class="nav pull-right">
<?php if(isUserLoggedIn()) { ?>
            	<li><a href="/SwiftCards/">Account Home</a></li>
                <li><a href="/SwiftCards/account-details.php">Account Details</a></li>
 				<li><a href="/SwiftCards/logout.php">Logout</a></li>
<?php } else { ?>
                <li><a href="/SwiftCards/index.php">Home</a></li>
                <li><a href="/SwiftCards/login.php">Login</a></li>
                <li><a href="/SwiftCards/register.php">Register</a></li>
<?php } ?>
        </ul>
        
      </div>
    </div>
  </div>