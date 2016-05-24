<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>
            <?php echo $websiteName;?> 
        </title>
        <?php require_once("../navbar.php");?>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script src="../assets/js/agile.js"></script>
        <script src="../assets/js/jquery.contextMenu.js"></script>
        <script src="../assets/js/jquery.ui.position.js"></script>
        <link href="../assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/custom.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/jquery.contextMenu.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div id="content">
            <a class="back-button">Back</a>
            <h3 style="text-align: center;">Pair Programming</h3>
            <a style='width: 184px; display: block; margin-left: auto; margin-right: auto;' id='addPairTasks'>Add Pair Programming Tasks</a>
            <div id="addProgrammers" class="modal-ish" style="display: none;">
                <div class="modal-body">
                    <form>
                        <p>
                            <label>Please Add Pair Programmer Names:</label>
                            Programmer 1:<input type="text" id="prog1">
                            Programmer 2:<input type="text" id="prog2">
                        </p>
                    </form></div>
                
                <div class="modal-footer">
                    <button id="BtnAddPairTasks" class="btn btn-primary">Add Tasks</button>
                </div>
                
                
            </div>
        </div>
        <br />
        
        <div class="pair-task-list" style="display: none;">
            <div class="fifty-split-screen-left">
                <div class="portlet">
                    <div class="portlet-header"><a>Partner 1</a></div>
                    <div class="portlet-content">
                        <ul id="sortable" class="connectedSortable">
                            <li class="ui-state-default final-element-left"><input class="add-new-task-left" value="Add a new task..." type="text"></input></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="fifty-split-screen-right">
                <div class="portlet">
                    <div class="portlet-header"><a>Partner 2</a></div>
                    <div class="portlet-content">
                        <ul id="sortable" class="connectedSortable">
                            <li class="ui-state-default final-element-right"><input class="add-new-task-right" value="Add a new task..." type="text"></input></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
