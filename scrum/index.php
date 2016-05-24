<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>
            <?php echo $websiteName;?> 
        </title>
<?php require_once("../navbar.php");?>
        
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script src="../assets/js/agile.js"></script>
        <script src="../assets/js/jeditable.js"></script>
        <script src="../assets/js/jquery.contextMenu.js"></script>
        <script src="../assets/js/jquery.ui.position.js"></script>
        <!--
        
        
        -->
        <link href="../assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/custom.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/jquery.contextMenu.css" rel="stylesheet" type="text/css" />
        
        
        
        
        <script src="../assets/js/bootstrap-carousel.js"></script>
        
        <script src="../assets/js/bootstrap-transition.js"></script>
    </head>
    
    <body>
        <div id="content">
            <a class="back-button">Back</a>
            <h3 style="text-align: center;">Scrum</h3>
            <a style='width: 70px; display: block; margin-left: auto; margin-right: auto;' id='addTicketHover'>Add Ticket</a>
            <div id='timeboxDetails' class="modal-ish" style='display: none;'>
                <div class="modal-body">
                    <form>
                        <p>
                            <label>Ticket Title:</label>
                            <input type="text" id="ticketTitle">
                        </p>
                    </form></div>
                
                <div class="modal-footer">
                    <button id="addTimeBox" style='width: 200px; display: block; margin-left: auto; margin-right: auto;' class="btn btn-primary">Add</button>
                </div>
            </div>
        </div>
        
        <div class="timeboxes">
            <div class="scrum">    
            </div>
        </div>
    </div>
</div>
</body>
</html>
