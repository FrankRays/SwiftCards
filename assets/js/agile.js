var incrementTask = 0;

$(function() {
    // Pair Programming Specific - START
    
    $( ".add-new-task-left" ).keypress(function(event){
        if(event.which === 13 && $( ".add-new-task-left" ).val() !== "" && $( ".add-new-task-left" ).val() !== " ")
        {
            $("<li id='newTaskLeft" + incrementTask + "' class='ui-state-default ui-sortable-handle'><a>" + $( ".add-new-task-left" ).val() + "</a></li>").insertBefore(".final-element-left");
            $( ".add-new-task-left" ).val("");
            incrementTask++;
        }
    });
    
    $( ".back-button" ).click(function(){
        window.location = "/SwiftCards/";
    });
    
    $( ".add-new-task-right" ).keypress(function(event){
        if(event.which === 13 && $( ".add-new-task-right" ).val() !== "" && $( ".add-new-task-right" ).val() !== " ")
        {
            $("<li id='newTaskRight" + incrementTask + "' class='ui-state-default ui-sortable-handle'><a>" + $( ".add-new-task-right" ).val() + "</a></li>").insertBefore(".final-element-right");
            $( ".add-new-task-right" ).val("");
            incrementTask++;
        }
    });
    
    $( ".add-new-task-left" ).blur(function(){
        if(!$(this).val())
        {
            $( ".add-new-task-left" ).val("Add a new task...");
        }
    });
    
    $( ".add-new-task-left" ).click(function(){
        $( ".add-new-task-left" ).val("");
    });
    
    
    $( ".add-new-task-right" ).blur(function(){
        if(!$(this).val())
        {
            $( ".add-new-task-right" ).val("Add a new task...");
        }
    });
    
    $( ".add-new-task-right" ).focus(function(){
        
        $( ".add-new-task-right" ).val("");
    });
    
    // Pair Programming Specific - END
    
    
    // Generic Stuff
    
    $( "#accordion" ).accordion({
        collapsible: true
    });
    
    $( "#addTimeBox" ).click(function(){
        $( ".scrum" ).prepend("<div class='portlet ui-widget ui-widget-content ui-helper-clearfix ui-corner-all'><div class='portlet-header ui-sortable-handle ui-widget-header ui-corner-all'><a>" + $( "#ticketTitle" ).val() + "</div><div class='portlet-content'><ul id='sortable' class='connectedSortable'><li class='ui-state-default final-element'><input class='add-new-task' value='Add a new task...' type='text'></li></ul></div></div>");
        $("#ticketTitle").val("");
    });
    
    $( "#ticketTitle" ).keypress(function(event){
        if(event.which === 13 && $( this ).val() !== "" && $( this ).val() !== " ")
        {
            event.preventDefault();
            $( ".scrum" ).prepend("<div class='portlet ui-widget ui-widget-content ui-helper-clearfix ui-corner-all'><div class='portlet-header ui-sortable-handle ui-widget-header ui-corner-all'><a>" + $( "#ticketTitle" ).val() + "</div><div class='portlet-content'><ul id='sortable' class='connectedSortable'><li class='ui-state-default final-element'><input class='add-new-task' value='Add a new task...' type='text'></li></ul></div></div>");
        }
    });
    
    $( "#addTicketHover" ).mouseenter(function(){
        $( "#timeboxDetails" ).show("slow");
    });
    
    $( "#addPairTasks" ).mouseenter(function(){
        $( "#addProgrammers" ).show("slow");
    });
    
    $( "#addProgrammers" ).mouseleave(function(){
        $( "#addProgrammers" ).hide("slow");
    });
    
    $( "#timeboxDetails" ).mouseleave(function(){
        $( "#timeboxDetails" ).hide("slow");
    });
    
    $( "#selectable" ).selectable({
        selected : function(event, ui) {
            
            switch(ui.selected.textContent)
            {
                case "Scrum":
                    window.location = "/SwiftCards/scrum/";
                    break;
                
                case "Pair Programming":
                    window.location = "/SwiftCards/pair/";
                    break;
                
                case "Kanban":
                    window.location = "/SwiftCards/kanban/";
                    break;
            }
        }            
    });
    
    
    $("#BtnAddPairTasks").click(function(){
        $(".portlet-header").find("A")[0].text = $( "#prog1" ).val();
        $(".portlet-header").find("A")[1].text = $( "#prog2" ).val();
        
        $(".modal-ish").hide("slow");
        $(".pair-task-list").show("slow");
        $("#addPairTasks").hide("slow");
        
    });
    
    $( "#prog2" ).keypress(function(){
        if(event.which === 13 && $( this ).val() !== "" && $( this ).val() !== " ")
        {
            event.preventDefault();
            $(".portlet-header").find("A")[0].text = $( "#prog1" ).val();
            $(".portlet-header").find("A")[1].text = $( "#prog2" ).val();
            
            $(".modal-ish").hide("slow");
            $(".pair-task-list").show("slow");
            $("#addPairTasks").hide("slow");
        }
    });
    
    $( ".scrum" ).sortable({
        connectWith: ".scrum",
        handle: ".portlet-header",
        cancel: ".portlet-toggle",
        placeholder: "portlet-placeholder ui-corner-all"
    });
    
    $( ".pair-task-list" ).sortable({
        connectWith: ".pair-task-list",
        handle: ".portlet-header",
        cancel: ".portlet-toggle",
        placeholder: "portlet-placeholder ui-corner-all"
    });
    
    
    $('body').on('click', '.portlet-header a', function() {
        $(this).editable(function(value) {
            return(value);
        },
        {
            placeholder : "",
            data: function(value) {
                if(value === 'Click To Edit..')
                {
                    value = "";
                }

                return value;
            }
        });
    });
    
    $('body').on('focus', '.add-new-task', function() {
        $(this).val("");
    });

    $('body').on('focusout', '.add-new-task', function() {
        $(this).val("Add a new task..");
    });
    
    $('body').on('keyup', '.add-new-task', function(event) {
        if(event.which === 13 && $( this ).val() !== "" && $( this ).val() !== " ")
        {
            $("<li id='newTask" + incrementTask + "' class='ui-state-default ui-sortable-handle'><a>" + $( this ).val() + "</a></li>").insertBefore(".final-element");
            $( this).val("");
            incrementTask++;
        }
    });
    
    $( ".portlet" )
            .addClass( "ui-widget ui-widget-content ui-helper-clearfix ui-corner-all" )
            .find( ".portlet-header" )
            .addClass( "ui-widget-header ui-corner-all" )
            .prepend( "<span class='portlet-toggle'></span>");
    
    
    $( "#sortable" ).sortable({
        connectWith: ".connectedSortable"
    }).disableSelection();
    
    $( "#dialog" ).dialog({
        autoOpen: false,
        show: {
            duration: 1000
        },
        hide: {
            duration: 1000
        }
    });
    
    $( "#BtnLearnMore" ).click(function() {
        $( "#dialog" ).dialog( "open" );
    });
    
    
   $('body').on('click', 'li.ui-state-default', function() {
       $(this).find("a").editable(function(value) { 
           return(value);
       },
       { 
           placeholder : "",
           onblur : "submit"
       });
   });
    
    $.contextMenu({
        selector: '.ui-state-default', 
        callback: function(key, options) {
            switch(key) {
                case "complete":
                    $(this).find("a").addClass("complete-task");
                    $(this).find("a").removeClass("incomplete-task");
                    break;
                
                case "incomplete":
                    $(this).find("a").removeClass("complete-task");
                    $(this).find("a").addClass("incomplete-task");
                    break;
            }
        },
        items: {
            "complete": {
                name: "Mark As Completed"
            },
            "incomplete": {
                name: "Mark As Incompleted"
            }
        }
    });
    
    // Generic Stuff
});